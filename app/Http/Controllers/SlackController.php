<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KioskModel;
use Illuminate\Support\Facades\Auth;

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
            //Store the token for the user
            try {

                $user = KioskModel::find(Auth::user()->user_id);
                $user->slack_token = $request->code;
                $user->save();
            
                $request->session()->flash('slack_message.level', 'success');
                $request->session()->flash('slack_message.content', 'Access granted. New Token: '.$request->code);

                return redirect()->route('settings');
            } catch (\Throwable $th) {
                //throw $th;
                return view('account.settings', ['user_data' => $this->customuserdata()]);
            }

        } 

    }

}
