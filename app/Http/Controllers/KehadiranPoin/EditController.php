<?php

namespace App\Http\Controllers\KehadiranPoin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Poin;
use App\Models\Kehadiran;
use Auth;

class EditController extends Controller
{
    public function formEditPoin($id){
        $data['siswa'] = Siswa::pluck('nama_lengkap', 'id');
        $data['poin'] = Poin::find($id);
        return view('kehadiran_poin.edit-poin')->with($data);
    }

    public function formEditKehadiran($id){
        $data['siswa'] = Siswa::pluck('nama_lengkap', 'id');
        $data['kehadiran'] = Kehadiran::find($id);
        return view('kehadiran_poin.edit-kehadiran')->with($data);
    }

    public function editPoin(Request $request){
        try {
            $model = Poin::find($request->id);
            $model->siswa_id = $request->siswa_id;
            $model->nama = $request->nama;
            $model->poin = $request->poin;
            $model->keterangan = $request->keterangan;
            $model->save();
            return redirect('guru/kehadiran_dan_poin')->with(['success' => 'Poin Pelanggaran Berhasil Diedit']);
        } catch (\Throwable $th) {
            return redirect('guru/kehadiran_dan_poin')->with(['error' => 'Poin Pelanggaran Gagal Diedit']);
        }
    }

    public function editKehadiran(Request $request){
        try {
            $model = Kehadiran::find($request->id);
            $model->siswa_id = $request->siswa_id;
            $model->sakit = $request->sakit;
            $model->izin = $request->izin;
            $model->tanpa_keterangan = $request->tanpa_keterangan;
            $model->save();
            return redirect('guru/kehadiran_dan_poin')->with(['success' => 'Data Kehadiran Siswa Berhasil Diedit']);
        } catch (\Throwable $th) {
            return redirect('guru/kehadiran_dan_poin')->with(['error' => 'Data Kehadiran Siswa Gagal Diedit']);
        }
    }
}
