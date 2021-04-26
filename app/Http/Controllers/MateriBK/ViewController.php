<?php

namespace App\Http\Controllers\MateriBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriBK;

class ViewController extends Controller
{
    public function index(){
        $data['materi'] = MateriBK::all();
        return view('materi_bk.index')->with($data);
    }
}
