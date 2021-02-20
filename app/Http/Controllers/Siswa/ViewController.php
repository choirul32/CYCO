<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('data_master_user.siswa.index');
    }
    public function form(){
        return view('data_master_user.siswa.tambah');
    }
    public function form2(){
        return view('data_master_user.siswa.tambah2');
    }
    public function form3(){
        return view('data_master_user.siswa.tambah3');
    }
    public function form4(){
        return view('data_master_user.siswa.tambah4');
    }
}
