<?php

namespace App\Http\Controllers\Home\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    public function siswaHome(){
        return view('home.index_siswa');
    }
}
