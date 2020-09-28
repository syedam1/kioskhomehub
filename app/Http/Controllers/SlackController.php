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
                $user->slac_token = $request->code;
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
