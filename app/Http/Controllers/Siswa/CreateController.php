<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnggahanSiswa;
use Auth;

class CreateController extends Controller
{
    public function createUnggahanSiswa(Request $request){
        try {
            $model = new UnggahanSiswa();
            $model->siswa_id = Auth::user()->id;
            $model->nama = $request->nama;
            $model->jenis = $request->jenis;
            $model->keterangan = $request->keterangan;
            $file = $request->file_unggahan;
            $nama_file = time()."_".$file->getClientOriginalName();
            $model->file = $nama_file;
            $tujuan_upload = 'unggahan-siswa';
            $file->move($tujuan_upload,$nama_file);
            $model->save();

            return redirect('siswa/unggahan-siswa')->with(['success' => 'Unggahan Baru Berhasil ditambah']);
        } catch (\Throwable $th) {
            return redirect('siswa/unggahan-siswa')->with(['success' => 'Unggahan Baru Gagal ditambah']);
        }
    }
}
