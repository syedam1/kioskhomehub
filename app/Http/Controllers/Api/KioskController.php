<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\Models\KioskModel;
use Illuminate\Support\Facades\Auth;


class KioskController extends Controller
{
    public function kiosklist(){
        $statusCode = 200;
        $contents = KioskModel::get();
        return response()->json($contents,$statusCode);
    }

    public function getuser(Request $request){
        //return "ID which is passed is ".$request->id;
        $statusCode = 200;
        $contents = KioskModel::get()->where('user_id', $request->id);
        #$response = Response::make($contents, $statusCode);
        #$content_type = "json";
        #$response->header('Content-Type', $content_type);
        #return $response;
        return response()->json($contents,$statusCode);
    }

    public function getUserbyEmail($email){
        $contents = KioskModel::get()->where('email', $email)->first();
        return $contents;
    }

    public function verify(Request $request){
        $statusCode = 200;
    
        //$user = KioskModel::find(Auth::user()->user_id);
        $user = $this->getUserbyEmail($request->email);
        
        $hasher = app('hash');
        if ($hasher->check($request->password, $user->password)) {
            $contents = ['email'=>$request->email, 'password'=>$request->password,'valid'=>true];
            return response()->json($contents,$statusCode);
        } else {
            $contents = ['email'=>$request->email, 'password'=>$request->password,'valid'=>false];
            return response()->json($contents,'400');
        }
    }

    public function adduser(Request $request){
        $email = $request->email;
        $password = $request->password;

        if($email !='' && $password != ''){
            $data = ["username"=>$email, "email"=>$email,"password"=>$password];
            //Validate if the user exists 
            $validation = RegisterController::uservalidator($data);

            if ($validation === true) {
                // Insert user details into the KioskDB
                $userdata = RegisterController::create($data);

                if($userdata->user_id){
                    $statusCode = 200;
                    $contents = KioskModel::get()->where('user_id', $userdata->user_id);
                }else{
                    $statusCode = 400;
                    $contents = ['error'=>'Failed to create user'];
                }
            } else {
                $statusCode = 400;
                $contents = ['error'=>$validation];
            }
            
            
            return response()->json($contents, $statusCode);
 
        }
        
    }

    public function deleteuser(Request $request){        
        $value = KioskModel::deleteuser($request->id);
        return response()->json(['user deleted']);        
    }

    public function apiregister(Request $requesst){
        dd("Hello");
    }

}
