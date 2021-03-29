<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProfilGuru;

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
        $data['profil_guru'] = ProfilGuru::where('user_id', auth()->guard('guru')->user()->id)->first();
        return view('data_master_user.guru_bk.data_riwayat_pendidikan')->with($data);
    }
    public function riwayatPekerjaan(){
        $data['profil_guru'] = ProfilGuru::where('user_id', auth()->guard('guru')->user()->id)->first();
        return view('data_master_user.guru_bk.data_riwayat_pekerjaan')->with($data);
    }
    public function publikasiArtikel(){
        $data['profil_guru'] = ProfilGuru::where('user_id', auth()->guard('guru')->user()->id)->first();
        return view('data_master_user.guru_bk.data_publikasi_artikel')->with($data);
    }
    public function pengalamanPenelitian(){
        $data['profil_guru'] = ProfilGuru::where('user_id', auth()->guard('guru')->user()->id)->first();
        return view('data_master_user.guru_bk.data_pengalaman_penelitian')->with($data);
    }
}
