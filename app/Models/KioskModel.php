<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class KioskModel extends Model
{
    protected $table = "users";

    public static function insertData($data){
        $value=DB::table('users')->where('email', $data['email'])->get();
        if($value->count() == 0){
          DB::table('users')->insert($data);
          return DB::getPdo()->lastInsertId();
         }else{
           return 0;
         }
     
    }
    
    
}
