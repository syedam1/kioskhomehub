<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Configurations extends Model
{
    protected $table = "config";
    protected $primaryKey = 'config_id';

    public static function getConfigDetails($key=null){

        $return_values = [];
        $values=DB::table('config')->get();
        foreach ($values as $key => $value) {
            $return_values[$value->key] = $value->value;
        }

        return $return_values;
   
    }
}