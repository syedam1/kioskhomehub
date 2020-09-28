<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KioskModel;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class SlackController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

}
