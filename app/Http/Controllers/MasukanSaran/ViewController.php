<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('masukan_saran.create');
    }
    public function indexAdmin(){
        return view('masukan_saran.table');
    }
}
