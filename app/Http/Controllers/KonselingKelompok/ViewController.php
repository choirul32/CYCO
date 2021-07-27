<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use App\Models\Guru;
use App\Models\Siswa;
use Auth;

class ViewController extends Controller
{
    public function indexSiswa(){
        $data['konseling'] = Konseling::where('jenis_konseling', 1)
        ->whereJsonContains('kelompok', Auth::guard('siswa')->user()->id)
        ->get();
        $data['guru_bk'] = Guru::where('role_id', 2)->get();
        $data['siswa'] = Siswa::where('id','!=', Auth::guard('siswa')->user()->id)->get();
        return view('konseling_kelompok.siswa.index')->with($data);;
    }
    public function indexGuruBK(){
        $data['konseling'] = Konseling::where('jenis_konseling', 1)->get();
        return view('konseling_kelompok.guru_bk.index')->with($data);
    }

    public function indexOrangtua(){
        $data['konseling'] = Konseling::where('jenis_konseling', 1)
        ->where('siswa_id', Auth::guard('orangtua')->user()->siswa_id)
        ->get();//konseling kelompok
        $data['guru_bk'] = Guru::where('role_id', 2)->get();
        return view('konseling_kelompok.orangtua.index')->with($data);;
    }
}
