<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Krisar;

class ViewController extends Controller
{
    public function index(){
        return view('masukan_saran.create');
    }
    public function indexTable(){
        $data['krisar'] = Krisar::all();
        return view('masukan_saran.table')->with($data);
    }
}
