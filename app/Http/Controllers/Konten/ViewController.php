<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;

class ViewController extends Controller
{
    public function index(){
        $data['konten'] = Konten::all();
        return view('konten.index')->with($data);
    }
}
