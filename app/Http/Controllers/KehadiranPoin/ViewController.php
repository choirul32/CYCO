<?php

namespace App\Http\Controllers\KehadiranPoin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexSiswa(){
        return view('kehadiran_poin.index');
    }
    public function indexTable(){
        return view('kehadiran_poin.index_table');
    }
    public function indexOrangtua(){
        return view('kehadiran_poin.index_table');
    }
}
