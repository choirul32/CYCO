<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrangTua;

class ViewController extends Controller
{
    public function index(){
        $data['orangtua'] = OrangTua::all();
        return view('data_master_user.orang_tua.index')->with($data);
    }
    public function form(){
        return view('data_master_user.orang_tua.tambah');
    }
}
