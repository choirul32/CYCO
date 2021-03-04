<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;

class ViewController extends Controller
{
    public function indexSiswa(){
        $data['konseling'] = Konseling::where('jenis_konseling', 1)
        // ->where('siswa_id', Auth::user()->id)
        ->get();//konseling kelompok
        return view('konseling_kelompok.siswa.index')->with($data);;
    }
    public function indexGuruBK(){
        $data['konseling'] = Konseling::where('jenis_konseling', 1)->get();
        return view('konseling_kelompok.guru_bk.index')->with($data);
    }
}
