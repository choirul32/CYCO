<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;

class CreateController extends Controller
{
    public function createForm(){
        return view('konten.create');
    }

    public function store(Request $request){
        try {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
                    // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'konten';
            $file->move($tujuan_upload,$nama_file);
            Konten::create([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'file' => $nama_file,
            ]);
            return view('konten.create')->with(['success' => 'Konten berhasil ditambah']);
        } catch (\Throwable $th) {
            return view('konten.create')->with(['error' => 'Konten gagal ditambah']);
        }

    }
}
