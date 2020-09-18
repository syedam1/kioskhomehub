<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProjectController extends Controller
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
    public function index($param1, $page)
    {
        //dd($param1,$page);
        $page = preg_replace('/.[^.blade]*$/', '', $page);
        $page = preg_replace('/.[^.]*$/', '', $page);
        return view($param1.'/'.$page, ['user_data' => $this->customuserdata()]);
    }
}
