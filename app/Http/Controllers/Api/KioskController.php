<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KioskModel;

class KioskController extends Controller
{
    public function kiosklist(){
        return response()->json(KioskModel::get(),200);
    }
}
