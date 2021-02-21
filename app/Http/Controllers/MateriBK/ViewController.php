<?php

namespace App\Http\Controllers\MateriBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('materi_bk.index');
    }
}
