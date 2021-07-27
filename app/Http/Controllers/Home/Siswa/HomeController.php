<?php

namespace App\Http\Controllers\Home\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\Poin;
use App\Models\Kehadiran;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    public function siswaHome(){
        $data['siswa'] = Siswa::where("id", Auth::user()->id)->first();
        $data['sum_poin'] = Poin::where('siswa_id', Auth::user()->id)->get()->sum('poin');
        $data['kehadiran'] = Kehadiran::where('siswa_id', Auth::user()->id)->first();
        return view('home.index_siswa')->with($data);
    }
}
