<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class KioskModel extends Model
{
    protected $table = "users";
    protected $primaryKey = 'user_id';


    public static function insertData($data){
        $value=DB::table('users')->where('email', $data['email'])->get();
        if($value->count() == 0){
          DB::table('users')->insert($data);
          return DB::getPdo()->lastInsertId();
         }else{
           return 0;
         }
     
    }

    public static function userDetails($data){
      $value=DB::table('users')->where('phone', $data['phone'])->get();
      if($value->count() == 0){
        return false;
      }else{
         return $value[0]->slack_access_token;
      }
   
    }

    public static function deleteuser($id){
        DB::delete('delete from users where user_id = ?',[$id]);
    }

    public static function updateuser($user_data){

      DB::update('update users where user_id = ?',[$user_data['user_id']]);
    }
    
    
}