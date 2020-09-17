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
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.profile', ['avatar' => $avatar]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function settings(account $account)
    {
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.settings', ['avatar' => $avatar]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function address(account $account)
    {
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.addresses', ['avatar' => $avatar]);
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
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.activity', ['avatar' => $avatar]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function billing(account $account)
    {
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.billing', ['avatar' => $avatar]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function paymenthistory(account $account)
    {
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.payment-history', ['avatar' => $avatar]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function notifications(account $account)
    {
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('account.notifications', ['avatar' => $avatar]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function widgets(account $account)
    {
        //
        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('widgets', ['avatar' => $avatar]);
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
            dd($this->validateRequest());
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
            $user->profile_image = $user_avatar;
            $user->save();

            return redirect()->route('home');

        } else {
            dd($this->validateRequest());
        }
        

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

    private function validateRequest()
    {

        return tap(request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
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
            $user_avatar_path = $request->file('fileToUpload')->store($user_folder, 'uploads');  //On the disk
        } 

        return $user_avatar_path;
    }
}
