<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use App\Models\Guru;
use Auth;

class ViewController extends Controller
{
    public function indexSiswa(){
        $data['konseling'] = Konseling::where('jenis_konseling', 0)
        ->where('siswa_id', Auth::guard('siswa')->user()->id)
        ->get();
        $data['guru_bk'] = Guru::where('role_id', 2)->get();
        return view('konseling_individu.siswa.index')->with($data);
    }

    public function indexGuruBK(){
        $data['konseling'] = Konseling::where('jenis_konseling', 0)->orderBy('verified_at', 'DESC')->get();
        return view('konseling_individu.guru_bk.index')->with($data);
    }

    public function indexOrangtua(){
        $data['konseling'] = Konseling::where('jenis_konseling', 0)
        ->where('siswa_id', Auth::guard('orangtua')->user()->siswa->id)
        ->get();
        $data['guru_bk'] = Guru::where('role_id', 2)->get();
        return view('konseling_individu.orangtua.index')->with($data);
    }

    public function riwayatKonseling(){
        $data['konseling'] = Konseling::where('selesai', 1)->orderBy('verified_at', 'DESC')->get();
        return view('konseling_individu.riwayat-konseling.index')->with($data);
    }

    public function formKonselingBerakhir($id){
        $data['konseling'] = Konseling::where('id',$id)->first();
        return view('konseling_individu.guru_bk.form-selesai-konseling')->with($data);
    }
}
