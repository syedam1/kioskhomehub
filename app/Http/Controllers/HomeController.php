<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $avatar = (Auth::user()->profile_image) ? '/uploads/'.Auth::user()->profile_image : '/assets/img/icons/placeholder_image.png';
        return view('home', ['avatar' => $avatar]);
    }
}
