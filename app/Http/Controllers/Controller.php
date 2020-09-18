<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function avatar() 
    {
        if(Auth::user()){

            if (file_exists( public_path() . '/storage/'.Auth::user()->profile_image) && Auth::user()->profile_image != null) {
                return '/storage/'.Auth::user()->profile_image;
            } elseif (file_exists(public_path().'/uploads/'.Auth::user()->profile_image) && Auth::user()->profile_image != null) {
                return '/uploads/'.Auth::user()->profile_image;
            }else{
                return '/assets/img/icons/placeholder_image.png';
            } 
        }else {
            return '/assets/img/icons/placeholder_image.png';
        }
        
    }

    public static function customuserdata(){
        $user_data = new \stdClass;
        if(Auth::user()){
            $user_data->detail = Auth::user() ?? null;
        }else {
            $user_data->detail = new \stdClass;
            $user_data->detail->username=false;
            $user_data->detail->first_name=false;
            $user_data->detail->last_name=false;
            $user_data->detail->bio=false;
        }
        
        $user_data->avatar = SELF::avatar();

        //dd((object)$user_data->detail->first_name);
        return (object)$user_data;
    }
}
