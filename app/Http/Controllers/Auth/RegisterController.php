<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\KioskModel;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function uservalidator(array $data)
    {
        $validator = Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return $validator->messages()->first();
        } else {
            return true;
        }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public static function create(array $data)
    {
        $userdata = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
        //Create a user folder
        self::createuserfolder($userdata);
        return $userdata;
    }

    public static function createuserfolder($userdata){
        $KHH_BASE_PATH = env("KHH_STORAGE_BASE");
        $KHH_user_folder_path = $KHH_BASE_PATH.'khh_user_'.$userdata->user_id;
        File::makeDirectory($KHH_user_folder_path, $mode = 0777, true, true);
    }

    public function newregister(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        $user->save();

        if($user !== null){
            //SendEmail
            MailController::sendSignupEmail($user->username, $user->email, $user->verification_code);
            return redirect()->back()->with(session()->flash('alert-success', 'Successfully registered.  Please check your email for verification code.'));
            //ShowMessage
        } else {
            //Show Error Message
            return redirect()->back()->with(session()->flash('alert-danger', 'Unable to register registered.'));
        }

    }
}
