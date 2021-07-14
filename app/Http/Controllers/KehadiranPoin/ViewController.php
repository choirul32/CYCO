<?php

namespace App\Http\Controllers\KehadiranPoin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Poin;
use App\Models\Kehadiran;
use Auth;

class ViewController extends Controller
{
    public function indexSiswa(){
        $data['sum_poin'] = Poin::where('siswa_id', Auth::user()->id)->get()->sum('poin');
        $data['kehadiran'] = Kehadiran::where('siswa_id', Auth::user()->id)->first();
        return view('kehadiran_poin.index')->with($data);
    }

    public function indexTable(Request $request){

        $data['siswa'] = Kehadiran::when($request->keyword, function ($query) use ($request) {
            $query->where('siswa.nama_lengkap', 'like', "%{$request->keyword}%")
                ->orWhere('siswa.username', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate(10);

        $data['poin'] = Poin::when($request->keyword_poin, function ($query) use ($request) {
            $query->where('siswa.nama_lengkap', 'like', "%{$request->keyword_poin}%")
                ->orWhere('siswa.username', 'like', "%{$request->keyword_poin}%");
        })->orderBy('created_at', 'desc')->paginate(10);
        return view('kehadiran_poin.index_table')->with($data);
    }

    public function indexOrangtua(){
        return view('kehadiran_poin.index_table');
    }

    public function formPoin(){
        $data['siswa'] = Siswa::get();
        return view('kehadiran_poin.create-poin')->with($data);
    }
    public function formKehadiran(){
        $data['siswa'] = Siswa::pluck('nama_lengkap', 'id');
        return view('kehadiran_poin.create-kehadiran')->with($data);
    }
}
