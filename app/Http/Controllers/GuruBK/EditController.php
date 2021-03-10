<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class EditController extends Controller
{
    public function dataDiri(){
        $data['guru'] = User::find(auth()->guard('guru')->user()->id);
        return view('data_master_user.guru_bk.form_data_diri')->with($data);
    }

    public function riwayatPendidikan(){
        $data['siswa'] = Keluarga::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_keluarga')->with($data);
    }

    public function riwayatPekerjaan(){
        $data['siswa'] = Akademik::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_akademik')->with($data);
    }

    public function publikasiArtikel(){
        $data['siswa'] = KondisiRumah::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_rumah')->with($data);
    }

    public function pengalamanPenelitian(Request $request){
        dd($request);
        $data['siswa'] = Keluarga::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_keluarga')->with($data);
    }
}
