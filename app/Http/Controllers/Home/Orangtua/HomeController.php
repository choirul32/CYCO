<?php

namespace App\Http\Controllers\Home\Orangtua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:orangtua');
    }

    public function orangtuaHome(){
        return view('home.index_orangtua');
    }
}
