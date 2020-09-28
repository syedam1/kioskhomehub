<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\KioskModel;


class AccountController extends Controller
{

    protected $user_data;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function profile(account $account)
    {
        return view('account.profile', ['user_data' => $this->customuserdata()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function settings(account $account, Request $request)
    {
        
        $request_code = ($request->exists('code')) ? $request_code = $request->code : null;
        $slack_button_url = "https://slack.com/oauth/v2/authorize?client_id=1332390320279.1383932006806&scope=&redirect_uri=".$request->root()."/slack&user_scope=groups:write,channels:read,channels:write,chat:write,im:read,im:write";
        return view('account.settings', ['user_data' => $this->customuserdata(), 'slack_button_url'=>$slack_button_url,'slack_token'=>$request_code]);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function address(account $account)
    {

        return view('account.addresses', ['user_data' => $this->customuserdata()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function activity(account $account)
    {
        //
        return view('account.activity', ['user_data' => $this->customuserdata()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function billing(account $account)
    {
        return view('account.billing', ['user_data' => $this->customuserdata()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function paymenthistory(account $account)
    {
        
        return view('account.payment-history', ['user_data' => $this->customuserdata()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function notifications(account $account)
    {
        
        return view('account.notifications', ['user_data' => $this->customuserdata()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function widgets(account $account)
    {       
        return view('widgets', ['user_data' => $this->customuserdata()]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function profilesubmit(Request $request, account $account)
    {
        //Users Profile Update function

        if($this->validateRequest()){
            //Combine the data to be inserted into the db
            $valid_request_data = $this->validateRequest();
            $user_data = ['first_name' => $valid_request_data['first_name'], 'last_name'=>$valid_request_data['last_name'], 'user_id'=>Auth::user()->user_id];
            //Store File in the Storage
            if (request()->has('fileToUpload')) {
                $user_data['user_avatar'] = $user_avatar = $this->storeImage($request);
            }
            //Store the data in the DB
            //dd($user_data);
            $user = KioskModel::find(Auth::user()->user_id);
            $user->first_name = $valid_request_data['first_name'];
            $user->last_name = $valid_request_data['last_name'];
            if(request()->has('bio')){
                $user->bio = $valid_request_data['bio'];
            }
            if (request()->has('fileToUpload')) {
                $user->profile_image = $user_avatar;
            }
            $user->save();

            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Profile has been updated successfully!');
            return redirect()->route('profile');

        } else {
            dd($this->validateRequest());
        }
        

    }

    /**Validate requests and store image funtions */
    private function validateRequest()
    {

        return tap(request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'bio' => 'min:3',
            'fileToUpload' => 'sometimes|file|image',
        ]),function(){
            if(request()->hasFile('fileToUpload')){
                request()->validate([
                    'fileToUpload' => 'file|image',
                ]);
            }
        });
    
    }

    private function storeImage(Request $request)
    {
        if (request()->has('fileToUpload')) {
            $user_folder = 'useravatars/'. Auth::user()->user_id; 
            $user_avatar_path = $request->file('fileToUpload')->store($user_folder,'public');  /// Stores in the storage folder which is hidden from source countrol
            //$user_avatar_path = $request->file('fileToUpload')->store($user_folder, 'uploads');  //On the disk
        } 

        return $user_avatar_path;
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(account $account)
    {
        //
    }

    
}
