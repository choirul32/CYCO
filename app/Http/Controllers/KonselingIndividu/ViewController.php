<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexSiswa(){
        return view('konseling_individu.siswa.index');
    }
    public function indexGuruBK(){
        return view('konseling_individu.guru_bk.index');
    }
}
