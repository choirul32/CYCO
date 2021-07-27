<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use Auth;

class CreateController extends Controller
{
    public function storeSiswa(Request $request){
        try {
            $data = $request->all();
            $data['konselor_id'] = $request->konselor;
            $data['perantara'] = $request->perantara;
            $data['siswa_id'] = Auth::guard('siswa')->user()->id;
            $data['jenis_konseling'] = 1;
            if ($request->kelompok_siswa != null) {
                $kelompok = [];
                foreach ($request->kelompok_siswa as $key => $value) {
                    array_push($kelompok, (int)$value);
                }
                array_push($kelompok, $data['siswa_id']);
                $data['kelompok'] = json_encode($kelompok);
            }
            Konseling::create($data);
            return redirect('siswa/konseling_kelompok')->with(['success' => 'Konseling Kelompok Berhasil Dibuat']);
        } catch (\Throwable $th) {
            return redirect('siswa/konseling_kelompok')->with(['error' => 'Konseling Kelompok Gagal Dibuat']);
        }
    }
}
