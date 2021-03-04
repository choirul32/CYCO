<?php

namespace App\Http\Controllers\GuruMapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ViewController extends Controller
{
    public function index(){
        $data['guru_mapel'] = User::where('role_id', 2)->get();
        return view('data_master_user.guru_mapel.index')->with($data);
    }
    public function form(){
        return view('data_master_user.guru_mapel.tambah');
    }
}
