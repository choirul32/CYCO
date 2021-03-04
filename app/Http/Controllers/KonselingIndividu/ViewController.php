<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use Auth;

class ViewController extends Controller
{
    public function indexSiswa(){
        $data['konseling'] = Konseling::where('jenis_konseling', 0)
        // ->where('siswa_id', Auth::user()->id)
        ->get();
        return view('konseling_individu.siswa.index')->with($data);
    }
    public function indexGuruBK(){
        $data['konseling'] = Konseling::where('jenis_konseling', 0)->orderBy('verified_at', 'DESC')->get();
        return view('konseling_individu.guru_bk.index')->with($data);
    }
}
