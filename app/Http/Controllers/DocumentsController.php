<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($param1, $page)
    {
        return view('docs/'.$param1.'/'.$page, ['user_data' => $this->customuserdata()]);
    }
}
