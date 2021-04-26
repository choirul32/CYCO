<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use Auth;

class EditController extends Controller
{
    public function verifikasiPermintaan($id){
        try {
            $konseling = Konseling::find($id);
            $now = date_create()->format('Y-m-d');
            $konseling->verified_at = $now;
            $konseling->verified_by = Auth::user()->id;
            $konseling->save();
            return redirect()->back()->with(['success' => 'Konseling Kelompok Berhasil Diverifikasi']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['success' => 'Konseling Kelompok Gagal Diverifikasi']);
        }
    }

    public function editSiswa(Request $request, $id){
        try {
            $data = $request->all();
            $konseling = Konseling::find($id);
            $data['konselor_id'] = $request->konselor;
            $data['tanggal'] = $request->tanggal;
            $data['jam'] = $request->jam;
            $data['masalah'] = $request->masalah;
            $data['harapan'] = $request->harapan;
            $data['perantara'] = $request->perantara;
            $data['jenis_konseling'] = 1;
            $konseling->update($data);
            return redirect('siswa/konseling_kelompok')->with(['success' => 'Konseling Kelompok Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            dd($th);
            return redirect('siswa/konseling_kelompok')->with(['error' => 'Konseling Kelompok Gagal Diperbaharui']);
        }
    }

    public function saveLink(Request $request){
        try {
            $konseling = Konseling::find($request->id);
            $data['link'] = $request->link;
            $konseling->update($data);
            return redirect('guru/konseling_kelompok')->with(['success' => 'Link Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            dd($th);
            return redirect('guru/konseling_kelompok')->with(['error' => 'Link Gagal Diperbaharui']);
        }
    }

    public function saveJam(Request $request){
        try {
            $konseling = Konseling::find($request->id);
            $data['jam_pengganti'] = $request->jam;
            $konseling->update($data);
            return redirect('guru/konseling_kelompok')->with(['success' => 'Jam Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('guru/konseling_kelompok')->with(['error' => 'Jam Gagal Diperbaharui']);
        }
    }
}
