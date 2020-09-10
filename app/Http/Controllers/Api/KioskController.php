<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KioskModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class KioskController extends Controller
{
    public function kiosklist(){
        return response()->json(KioskModel::get(),200);
    }

    public function getuser(Request $request){
        //return "ID which is passed is ".$request->id;
        return response()->json(KioskModel::get()->where('user_id', $request->id),200);
    }

    public function verify(Request $request){
        $html = "Email ".$request->email."\n";
        $html .= "Password ".$request->password."\n";
        #echo $html;
        return response()->json(
            KioskModel::get()->where('email', '=', $request->email)-> where('password', '=',$request->password),200);
        
    }

    public function adduser(Request $request){
        $html = "Email ".$request->email."\n";
        $html .= "Password ".$request->password."\n";

        $email = $request->email;
        $password = $request->password;

        if($email !='' && $password != ''){
            $data = array("username"=>$email, "email"=>$email,"password"=>$password);
 
            // Insert user details into the KioskDB
            $value = KioskModel::insertData($data);
            if($value){
                $KHH_BASE_PATH = env("KHH_STORAGE_BASE");
                $KHH_user_folder_path = $KHH_BASE_PATH.'khh_user_'.$value;
                File::makeDirectory($KHH_user_folder_path, $mode = 0777, true, true);
                return response()->json(KioskModel::get()->where('user_id', $value),200);
            }else{
                return response()->json(['user already exists']);
            }
 
        }
        
    }

    public function deleteuser(Request $request){        
        $value = KioskModel::deleteuser($request->id);
        return response()->json(['user deleted']);        
    }

}
