<?php

namespace App\Http\Controllers\TindakLanjutSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TindakLanjutSiswa;

class EditController extends Controller
{
    public function saveTanggapan(Request $request, $id){
        $model = TindakLanjutSiswa::find($id);
        $model->tanggapan = $request->tanggapan;
        $model->save();
        return redirect('guru/tindak-lanjut-siswa')->with(['success' => 'Tanggapan Guru BK Berhasil Diperbaharui']);
    }
}
