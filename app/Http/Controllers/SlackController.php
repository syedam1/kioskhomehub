<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KioskModel;
use App\Models\Configurations;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use PhpParser\JsonDecoder;
use Illuminate\Support\Facades\Log;

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
        $slack_verification_token = KioskModel::userDetails(['phone'=>$receiver]);
        //$slack_verification_token = $this->slack_configs['SLACK_BOT_TOKEN'];

        //Get the list of channels associated with the receiver $receiver;
        $request_channel_name = (isset($sender) && $sender <> null ) ? $sender : $request->channel_name;
        $channel_list = $this->getAllUserChannels($receiver);

        //dd($channel_list);
        
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

        if(isset($response['channel']['id'])){
            $client = new Client;
            $url    = "https://slack.com/api/conversations.invite";
            $response = $client->post($url, [
                'headers' => [],
                'form_params' => [
                    'token'=>$slack_verification_token,
                    'channel'=>$response['channel']['id'],
                    'users'=>'U01BDGYM1RB',
                ],
            ]);
            $response = json_decode($response->getBody(), true);
        }
        Log::debug($slack_verification_token." - ".$response['channel']['id']);
        Log::debug($response);
    

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
        // THE CHANNEL - SENDERs NUMBER 
        $request_channel = $this->getUserChannel($request, $request->sender, $request->receiver);
        // THE USER based on TO RECEIVER TOKEN
        
        $slack_verification_token = $this->getUserTokenByPhone($request->receiver);  // This is the person who will appear to be sending the message
        $slack_verification_token = $this->slack_configs['SLACK_BOT_TOKEN'];  
        
        // Post to this channel
        $client = new Client;
        $url    = "https://slack.com/api/chat.postMessage";

        $form_params = [
            'token'=>$slack_verification_token,
            'channel'=>$request_channel,
            'username'=>$request_channel,
            
        ];
        if($request->slack_message){
            $form_params['text'] = "<!channel> ".$request->slack_message;
        }
        if($request->attachments){
            $form_params['attachments'] = '[{"pretext": "", "text": "'.$request->attachments.'"}]';
        }
        if($request->link){
            $form_params['attachments'] = '[{"pretext": "", "text": "'.$request->link.'"}]';
        }

        Log::debug($form_params);

        $response = $client->post($url, [
            'headers' => [],
            'form_params' => $form_params,
        ]);
        $response = json_decode($response->getBody(), true);

        Log::debug($slack_verification_token." - ".$request_channel." - ".$request_channel);


        
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
        $channel_list = $this->getAllUserChannels($receiver);
        
        if(in_array($sender, $channel_list)){
            //Existing channel
            return($sender);
        } else {
            //Create new channel
            $this->createchannel($request, $sender, $receiver);
            return($sender);
        }

    }


    public function getAllUserChannels($receiver){
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
        
        //dd($response);

        $channel_list = [];
        if(isset( $response['channels']) ){
            foreach ($response['channels'] as $key => $value) {
                //$channel_list[] = preg_replace('/_[0-9]+/s', '', $value['name']);
                $channel_list[] = $value['name'];
            }
        }

        return $channel_list;
    }


    public function getChannelInfo($channel_id){
        $slack_verification_token = $this->slack_configs['SLACK_BOT_TOKEN'];

        $client = new Client;
        $url    = "https://slack.com/api/conversations.info";
        $response = $client->post($url, [
            'headers' => [],
            'form_params' => [
                'token'=>$slack_verification_token,
                'channel'=>$channel_id,
            ],
        ]);

        $response = json_decode($response->getBody(), true);
        if(isset($response['channel']['name'])){
            return $response['channel']['name'];
        }

        return $channel_id;
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
        //dd($request);
        //Log the message captured on Slack.
        $channel_name = $this->getChannelInfo($request->sender);
        Log::debug($channel_name ." : ".$request->message);

    }

}
