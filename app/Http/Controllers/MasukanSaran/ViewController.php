<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexSiswa(){
        return view('masukan_saran.create');
    }
}
