<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProfilGuru;
use Auth;

class EditController extends Controller
{
    public function dataDiri(){
        $data['guru'] = User::where('id',auth()->guard('guru')->user()->id)->first();
        return view('data_master_user.guru_bk.form_data_diri')->with($data);
    }

    public function riwayatPendidikan(){
        $data['profil_guru'] = ProfilGuru::where('user_id',Auth::user()->id)->first();
        return view('data_master_user.guru_bk.form_data_riwayat_pendidikan')->with($data);
    }

    public function riwayatPekerjaan(){
        $data['profil_guru'] = ProfilGuru::where('user_id',Auth::user()->id)->first();
        return view('data_master_user.guru_bk.form_data_riwayat_pekerjaan')->with($data);
    }

    public function publikasiArtikel(){
        $data['profil_guru'] = ProfilGuru::where('user_id',Auth::user()->id)->first();
        return view('data_master_user.guru_bk.form_data_publikasi_artikel')->with($data);
    }

    public function pengalamanPenelitian(Request $request){
        $data['profil_guru'] = ProfilGuru::where('user_id',Auth::user()->id)->first();
        return view('data_master_user.guru_bk.form_data_pengalaman_penelitian')->with($data);
    }

    public function dataDiriUpdate(Request $request){
        try {
            $data = $request->all();
            $model = User::where('id',Auth::user()->id)->first();
            $model->update($data);
            $model->save();
            return redirect('guru/profil/data_diri')->with(['success' => 'Data Diri Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('guru/profil/data_diri')->with(['error' => 'Data Diri Gagal Diperbaharui']);
        }
    }

    public function riwayatPendidikanUpdate(Request $request){
        try {
            $data['riwayat_pendidikan'] = json_encode($request->except(['_token']));
            $model = ProfilGuru::where('user_id',Auth::user()->id)->first();
            if (!isset($model)) {
                $model = new ProfilGuru();
                $data['user_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('guru/profil/riwayat_pendidikan')->with(['success' => 'Data Riwayat Pendidikan Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('guru/profil/riwayat_pendidikan')->with(['error' => 'Data Riwayat Pendidikan Gagal Diperbaharui']);
        }
    }

    public function riwayatPekerjaanUpdate(Request $request){
        try {
            // dd($request);
            $temp_data = [];
            for ($i=0; $i < count($request->status_kepegawaian); $i++) {
                $temp = [];
                $temp['status_kepegawaian'] = $request->status_kepegawaian[$i];
                $temp['lembaga_pengangkatan'] = $request->lembaga_pengangkatan[$i];
                $temp['no_sk'] = $request->no_sk[$i];
                $temp['tanggal_sk'] = $request->tanggal_sk[$i];
                $temp['tmt_kerja'] = $request->tmt_kerja[$i];
                $temp['tempat_kerja'] = $request->tempat_kerja[$i];
                $temp_data[] = $temp;
            }
            // dd($temp_data);

            $data['riwayat_pekerjaan'] = $temp_data;
            $model = ProfilGuru::where('user_id',Auth::user()->id)->first();
            if (!isset($model)) {
                $model = new ProfilGuru();
                $data['user_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('guru/profil/riwayat_pekerjaan')->with(['success' => 'Data Riwayat Pekerjaan Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('guru/profil/riwayat_pekerjaan');
        }
    }

    public function publikasiArtikelUpdate(Request $request){
        try {
            $temp_data = [];
            for ($i=0; $i < count($request->judul_artikel_ilmiah); $i++) {
                $temp = [];
                $temp['judul_artikel_ilmiah'] = $request->judul_artikel_ilmiah[$i];
                $temp['nama_jurnal'] = $request->nama_jurnal[$i];
                $temp['volume_nomer_tahun'] = $request->volume_nomer_tahun[$i];
                $temp_data[] = $temp;
            }
            $data['publikasi_artikel'] = $temp_data;
            $model = ProfilGuru::where('user_id',Auth::user()->id)->first();
            if (!isset($model)) {
                $model = new ProfilGuru();
                $data['user_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('guru/profil/publikasi_artikel')->with(['success' => 'Data Publikasi Artikel Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('guru/profil/publikasi_artikel');
        }
    }

    public function pengalamanPenelitianUpdate(Request $request){
        try {
            // dd($request);
            $temp_data = [];
            for ($i=0; $i < count($request->tahun); $i++) {
                $temp = [];
                $temp['tahun'] = $request->tahun[$i];
                $temp['jenis_penelitian'] = $request->jenis_penelitian[$i];
                $temp['judul'] = $request->judul[$i];
                $temp['sumber_pendanaan'] = $request->sumber_pendanaan[$i];
                $temp_data[] = $temp;
            }
            $data['pengalaman_penelitian'] = $temp_data;
            $model = ProfilGuru::where('user_id',Auth::user()->id)->first();
            if (!isset($model)) {
                $model = new ProfilGuru();
                $data['user_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('guru/profil/pengalaman_penelitian')->with(['success' => 'Data Pengalaman Penelitian Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('guru/profil/pengalaman_penelitian');
        }
    }
}
