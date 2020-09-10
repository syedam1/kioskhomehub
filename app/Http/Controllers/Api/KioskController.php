<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\Models\KioskModel;


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

    public function verify(Request $request){
        $statusCode = 200;
        $contents = KioskModel::get()->where('email', '=', $request->email)-> where('password', '=',$request->password);
        $html = "Email ".$request->email."\n";
        $html .= "Password ".$request->password."\n";
        #echo $html;
        return response()->json($contents,$statusCode);
        
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

}
