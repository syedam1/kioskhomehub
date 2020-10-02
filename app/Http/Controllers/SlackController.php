<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KioskModel;
use App\Models\Configurations;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use PhpParser\JsonDecoder;

class SlackController extends Controller
{

    protected $slack_configs;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->slack_configs = Configurations::getConfigDetails();
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
                $client = new Client;
                $url    = "https://slack.com/api/oauth.v2.access";
                $response = $client->post($url, [
                    'headers' => [],
                    'form_params' => [
                        'client_id'=>env("SLACK_CLIENT_ID"),
                        'client_secret'=>env("SLACK_CLIENT_SECRET"),
                        'redirect_uri'=>$request->root().'/slack/',
                        'code'=>$request->code,
                    ],
                ]);
        
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
                return view('account.settings');
            }

        } 

    }

    public function createchannel(Request $request, $sender, $receiver){

        $slack_verification_token = (Auth::check())  ? $this->customuserdata()->detail->slack_access_token : $this->slack_configs['SLACK_BOT_TOKEN'];
        $request_channel_name = (isset($sender) && $sender <> null ) ? $sender : $request->channel_name;
        $slack_verification_token = KioskModel::userDetails(['phone'=>$receiver]);
        
        $client = new Client;
        $url    = "https://slack.com/api/conversations.create";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
                'name'=>$request_channel_name,
                'is_private'=>true,
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
            return json_encode([$response, "Could not create channel"]);
        }


    }

    public function postmessage(Request $request){
        
        // THE MESSAGE
        $request_message = $request->slack_message." - ".date("H:i:s");
        // THE CHANNEL - FROM NUMBER
        $request_channel = $this->getUserChannel($request, $request->sender, $request->receiver);
        // THE USER based on TO RECEIVER TOKEN
        
        $slack_verification_token = $this->getUserTokenByPhone($request->receiver);  // This is the person who will appear to be sending the message
        //$slack_verification_token = $this->slack_configs['SLACK_BOT_TOKEN'];  
        
        // Post to this channel
        $client = new Client;
        $url    = "https://slack.com/api/chat.postMessage";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
                'channel'=>$request_channel,
                'username'=>$request_channel,
                'text'=>"<!channel> ".$request_message,
            ],
        ]);

        $response = json_decode($response->getBody(), true);
        
        if($response['ok']){
            if (Auth::check()) {
                $request->session()->flash('slack_message.level', 'success');
                $request->session()->flash('slack_message.content', 'Message sent successfully');
                return redirect()->route('settings');
            } else {
                return json_encode($response);
            }
        } else {
            if (Auth::check()) {
                $request->session()->flash('slack_message.level', 'danger');
                $request->session()->flash('slack_message.content', 'Message sending failed :(');
                return redirect()->route('settings');
            } else {
                return json_encode([$response, 'ERR' => 'Could not post message ', 'Sender'=>$request_channel, 'TOKEN'=>$slack_verification_token]);
            }
        }
    

    }

    public function getUserChannel(Request $request, $sender, $receiver){
        //Obtain channel information
        //$slack_verification_token = (Auth::check()) ? $this->customuserdata()->detail->slack_access_token : $this->slack_configs['SLACK_BOT_TOKEN'];
        //$slack_verification_token = $this->slack_configs['SLACK_BOT_TOKEN']; //KioskModel::userDetails(['phone'=>$receiver]);
        $slack_verification_token = KioskModel::userDetails(['phone'=>$receiver]);

        $client = new Client;
        $url    = "https://slack.com/api/conversations.list";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
                'types'=>'private_channel',
            ],
        ]);

        $response = json_decode($response->getBody(), true);

        $channel_list = [];
        if(isset( $response['channels']) ){
            foreach ($response['channels'] as $key => $value) {
                $channel_list[] = $value['name'];
            }
        }
        
        if(in_array($sender, $channel_list)){
            //Existing channel
            return($sender);
        } else {
            //Create new channel
            $this->createchannel($request, $sender, $receiver);
            return($sender);
        }

    }

    public function getUserTokenByPhone($phone){

        // USER BY PHONE TOKEN
        $slack_verification_token = KioskModel::userDetails(['phone'=>$phone]);
        
        if($slack_verification_token){
            return $slack_verification_token;
        } else {
            return false;
        }

        // LOGGED IN USER TOKEN
        if(Auth::check()){
            $slack_verification_token = $this->customuserdata()->detail->slack_access_token;
            return $slack_verification_token;
        }
        // DEFAULT TOKEN
        $slack_verification_token = $this->slack_configs['SLACK_BOT_TOKEN'];  
        return $slack_verification_token;

    }

    public function retrievemessage(Request $request){
        $content = 123;
        return response($content)
            ->withHeaders([
                'Content-Type' => 'text/plain',
                'challenge' => 'f40c74e90ef401272e0685de0d769df8',
            ]);
        
    }

}
