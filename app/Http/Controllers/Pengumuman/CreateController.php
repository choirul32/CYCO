<?php

namespace App\Http\Controllers\Pengumuman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class CreateController extends Controller
{
    public function createForm(){
        return view('pengumuman.create');
    }

    public function store(Request $request){
        try {
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'pengumuman';
            $file->move($tujuan_upload,$nama_file);
            Pengumuman::create([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'file' => $nama_file,
            ]);
            return view('pengumuman.create')->with(['success' => 'Pengumuman berhasil ditambah']);
        } catch (\Throwable $th) {
            return view('pengumuman.create')->with(['error' => 'Pengumuman gagal ditambah']);
        }
        // menyimpan data file yang diupload ke variabel $file


    }
}
