<?php

namespace App\Http\Controllers\Home\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:guru');
    }

    public function siswaHome(){
        return view('home.index_siswa');
    }
    public function guruBKHome(){
        return view('home.index_guru');
    }
}
