<?php

namespace App\Http\Controllers\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class ViewController extends Controller
{
    public function index(){
        $data['pengumuman'] = Pengumuman::all();
        return view('pengumuman.index')->with($data);
    }
}
