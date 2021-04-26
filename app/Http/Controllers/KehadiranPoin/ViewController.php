<?php

namespace App\Http\Controllers\KehadiranPoin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Poin;

class ViewController extends Controller
{
    public function indexSiswa(){
        return view('kehadiran_poin.index');
    }

    public function indexTable(Request $request){

        $data['siswa'] = Siswa::when($request->keyword, function ($query) use ($request) {
            $query->where('nama_lengkap', 'like', "%{$request->keyword}%")
                ->orWhere('username', 'like', "%{$request->keyword}%");
        })->whereHas('absensi')->paginate(10);

        $data['poin'] = Siswa::when($request->keyword_poin, function ($query) use ($request) {
            $query->where('nama_lengkap', 'like', "%{$request->keyword_poin}%")
                ->orWhere('username', 'like', "%{$request->keyword_poin}%");
        })->whereHas('poin')->orderBy('created_at', 'desc')->paginate(10);

        return view('kehadiran_poin.index_table')->with($data);
    }

    public function indexOrangtua(){
        return view('kehadiran_poin.index_table');
    }
}
