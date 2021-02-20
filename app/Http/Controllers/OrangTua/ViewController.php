<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('data_master_user.orang_tua.index');
    }
    public function form(){
        return view('data_master_user.orang_tua.tambah');
    }
}
