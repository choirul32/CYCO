<?php

namespace App\Http\Controllers\TindakLanjutSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TindakLanjutSiswa;
use App\Models\Siswa;

class ViewController extends Controller
{
    public function indexGuruBK(){
        $data['tindak_lanjut'] = TindakLanjutSiswa::all();
        return view('tindak-lanjut.index_bk')->with($data);
    }

    public function create(){
        $data['tindak_lanjut'] = new TindakLanjutSiswa();
        $data['siswa'] = Siswa::get();
        return view('tindak-lanjut.form')->with($data);
    }

    public function edit($id){
        $data['tindak_lanjut'] = TindakLanjutSiswa::find($id);
        $data['siswa'] = Siswa::get();
        return view('tindak-lanjut.form')->with($data);
    }
}
