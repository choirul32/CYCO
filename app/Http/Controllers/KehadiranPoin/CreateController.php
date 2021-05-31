<?php

namespace App\Http\Controllers\KehadiranPoin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Poin;
use App\Models\Kehadiran;
use Auth;
class CreateController extends Controller
{
    public function createNewPoin(Request $request){
        try {
            $data['siswa_id'] = $request->siswa_id;
            $data['nama'] = $request->nama;
            $data['poin'] = $request->poin;
            $data['keterangan'] = $request->keterangan;
            $data['created_by'] = Auth::guard('guru')->user()->id;
            Poin::create($data);
            return redirect('guru/kehadiran_dan_poin')->with(['success' => 'Poin Pelanggaran Berhasil Dibuat']);
        } catch (\Throwable $th) {
            return redirect('guru/kehadiran_dan_poin')->with(['error' => 'Poin Pelanggaran Gagal Dibuat']);
        }
    }

    public function createNewKehadiran(Request $request){
        try {
            $data['siswa_id'] = $request->siswa_id;
            $data['sakit'] = $request->sakit;
            $data['izin'] = $request->izin;
            $data['tanpa_keterangan'] = $request->tanpa_keterangan;
            $data['created_by'] = Auth::guard('guru')->user()->id;
            Kehadiran::create($data);
            return redirect('guru/kehadiran_dan_poin')->with(['success' => 'Data Kehadiran Siswa Berhasil Dibuat']);
        } catch (\Throwable $th) {
            return redirect('guru/kehadiran_dan_poin')->with(['error' => 'Data Kehadiran Siswa Gagal Dibuat']);
        }
    }
}
