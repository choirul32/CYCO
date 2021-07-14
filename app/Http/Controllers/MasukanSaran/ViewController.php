<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Krisar;
use Auth;
use Carbon\Carbon;

class ViewController extends Controller
{
    public function index(){
        $data['krisar'] = Krisar::where('user_id',Auth::user()->id)->whereDate('created_at', Carbon::today())->get();
        return view('masukan_saran.create')->with($data);

    }
    public function indexTable(){
        $data['krisar'] = Krisar::all();
        return view('masukan_saran.table')->with($data);
    }
}
