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
}
