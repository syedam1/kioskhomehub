<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KioskModel;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use PhpParser\JsonDecoder;

class SlackController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        //$this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function obtaintoken(Request $request)
    {
        
        if($request->exists('code')){
            $request_code = $request->code;
            
            try {

                //Step 2 - Users are redirected to your server with a verification code  #
                $user = KioskModel::find(Auth::user()->user_id);
                $user->slack_verification_token = $request->code;
                $user->save();

                

                //Step 3 - Exchanging a verification code for an access token
                $slack_auth_url = "https://slack.com/api/oauth.v2.access?client_id=1332390320279.1383932006806&client_secret=ba7098fb65dfcdc6085c34fa27cd9b94&redirect_uri=".$request->root()."/slack&code=".$request->code;
                

                //echo "<a href='".$slack_auth_url."'> Auth </a> </br>";
                //dd($slack_auth_url);

                $client = new Client;

                $response = $client->get($slack_auth_url, [
                    'headers' => [],
                    'form_params' => [],
                ]);

                // You need to parse the response body
                // This will parse it into an array
                $response = json_decode($response->getBody(), true);
                
                $slack_access_token = $response['authed_user']['access_token'];
                $user = KioskModel::find(Auth::user()->user_id);
                $user->slack_access_token = $slack_access_token;
                $user->updated_at = NOW();
                $user->save();

                $request->session()->flash('slack_message.level', 'success');
                $request->session()->flash('slack_message.content', 'Access granted. New Access Token: '.$slack_access_token);

                return redirect()->route('settings');
            } catch (\Throwable $th) {
                //throw $th;
                return view('account.settings', ['user_data' => $this->customuserdata()]);
            }

        } 

    }

    public function createchannel(Request $request, $phone = null){

        $slack_verification_token = (Auth::check())  ? $this->customuserdata()->detail->slack_access_token : env("SLACK_PLACEHOLDER_TOKEN");
        $request_channel_name = $phone ? $phone : $request->channel_name;
        $client = new Client;
        $url    = "https://slack.com/api/conversations.create";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
                'name'=>$request_channel_name,
                'is_private'=>false,
                'user_scope'=>'groups:write,channels:read,channels:write,chat:write,im:read,im:write',
                'scope'=>'groups:write,channels:read,channels:write,chat:write,im:read,im:write',
                'user'=>'channels:write,groups:write,im:write,mpim:write',
            ],
        ]);

        $response = json_decode($response->getBody(), true);
        
        if(Auth::check()){

        //Save channel details into db
        $user = KioskModel::find(Auth::user()->user_id);
        $user->channel_info = $response;
        $user->save();
        
        $request->session()->flash('slack_message.level', 'success');
        $request->session()->flash('slack_message.content', 'Channel Created successfully');
        return redirect()->route('settings');
        } else {
            return json_encode($response);
        }


    }

    public function postmessage(Request $request){
        // The method accepts two parameters.  Phone number and message
        
        $request_channel = 'channel-30sep2020';
        //If new user create a new channel
        $request_channel = $this->getUserChannel($request, $request->phone);

        // //Else use the phone number to identify the channel.
        // if(json_decode(Auth::user()->channel_info)->channel->name){
        //     $request_channel = json_decode(Auth::user()->channel_info)->channel->name;
        // }

        $request_channel = $request->phone ? $request->phone : 'channel-30sep2020';
        $request_message = $request->slack_message." - ".date("H:i:s");
        $slack_verification_token = (Auth::check())  ? $this->customuserdata()->detail->slack_access_token : env("SLACK_PLACEHOLDER_TOKEN");

        // Post to this channel
        $client = new Client;
        $url    = "https://slack.com/api/chat.postMessage";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
                'channel'=>$request_channel,
                'text'=>$request_message,
            ],
        ]);

        $response = json_decode($response->getBody(), true);
    
        if (Auth::check()) {
            $request->session()->flash('slack_message.level', 'success');
            $request->session()->flash('slack_message.content', 'Message sent successfully');
            return redirect()->route('settings');
        } else {
            return json_encode($response);
        }
        


    }

    public function getUserChannel(Request $request, $phone){
        //Obtain channel information
        $slack_verification_token = (Auth::check()) ? $this->customuserdata()->detail->slack_access_token : env("SLACK_PLACEHOLDER_TOKEN");
        $client = new Client;
        $url    = "https://slack.com/api/conversations.list";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
            ],
        ]);

        $response = json_decode($response->getBody(), true);
        $channel_list = [];
        if(isset( $response['channels']) ){
            foreach ($response['channels'] as $key => $value) {
                $channel_list[] = $value['name'];
            }
        }
        

        if(in_array($phone, $channel_list)){
            //Existing channel
            return($phone);
        } else {
            //Create new channel
            $this->createchannel($request, $phone);
            return($phone);
        }

    }

}
