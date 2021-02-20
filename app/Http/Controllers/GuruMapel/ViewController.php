<?php

namespace App\Http\Controllers\GuruMapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('data_master_user.guru_mapel.index');
    }
    public function form(){
        return view('data_master_user.guru_mapel.tambah');
    }
}
