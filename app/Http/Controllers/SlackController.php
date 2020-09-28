<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KioskModel;

class SlackController extends Controller
{
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
                $user_data = ['slack_token' => $request->code];
                $user = KioskModel::find(Auth::user()->user_id);
                $user->save();
    
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Profile has been updated successfully!');
                return redirect()->route('account.settings');
            } catch (\Throwable $th) {
                //throw $th;
            }

        } 

    }

}
