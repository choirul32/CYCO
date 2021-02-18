<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexSiswa(){
        return view('konseling_kelompok.siswa.index');
    }
}
