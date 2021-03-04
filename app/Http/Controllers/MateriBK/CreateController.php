<?php

namespace App\Http\Controllers\MateriBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriBK;

class CreateController extends Controller
{
    public function form(){
        return view('materi_bk.create');
    }
    public function store(Request $request){
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
		MateriBK::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
			'file' => $nama_file,
		]);
        return view('materi_bk.create');
    }
}
