<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ViewController extends Controller
{
    public function index(){
        $data['guru_bk'] = User::where('role_id', 2)->get();
        return view('data_master_user.guru_bk.index')->with($data);
    }
    public function form(){
        return view('data_master_user.guru_bk.tambah');
    }

    public function dataDiri(){
        $data['guru'] = User::find(auth()->guard('guru')->user()->id);
        return view('data_master_user.guru_bk.data_diri')->with($data);
    }
    public function riwayatPendidikan(){
        return view('data_master_user.guru_bk.data_riwayat_pendidikan');
    }
    public function riwayatPekerjaan(){
        return view('data_master_user.guru_bk.data_riwayat_pekerjaan');
    }
    public function publikasiArtikel(){
        return view('data_master_user.guru_bk.data_publikasi_artikel');
    }
    public function pengalamanPenelitian(){
        return view('data_master_user.guru_bk.data_pengalaman_penelitian');
    }
}
