<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Data\Keluarga;
use App\Models\Data\Akademik;
use App\Models\Data\KondisiRumah;
use App\Models\Data\UnggahBerkas;
use Auth;

class EditController extends Controller
{
    public function dataSiswa(){
        $data['siswa'] = Siswa::find(Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_siswa')->with($data);
    }

    public function dataKeluarga(){
        $data['siswa'] = Keluarga::where('siswa_id',Auth::user()->id)->first();
        if (!isset($data['siswa'])) {
            $data['siswa'] = new Keluarga();
        }
        return view('data_master_user.siswa.form_data_keluarga')->with($data);

    }

    public function dataAkademik(){
        $data['siswa'] = Akademik::where('siswa_id',Auth::user()->id)->first();
        if (!isset($data['siswa'])) {
            $data['siswa'] = new Akademik();
        }
        return view('data_master_user.siswa.form_data_akademik')->with($data);
    }

    public function dataRumah(){
        $data['siswa'] = KondisiRumah::where('siswa_id',Auth::user()->id)->first();
        if (!isset($data['siswa'])) {
            $data['siswa'] = new KondisiRumah();
        }
        return view('data_master_user.siswa.form_data_rumah')->with($data);
    }

    public function unggahBerkas(){
        $data['siswa'] = UnggahBerkas::where('siswa_id',Auth::user()->id)->first();
        if (!isset($data['siswa'])) {
            $data['siswa'] = new KondisiRumah();
        }
        return view('data_master_user.siswa.form_data_rumah')->with($data);
    }

    public function dataSiswaUpdate(Request $request){
        $data = $request->all();
        $data['bahasa'] = json_encode($request->input("bahasa") ?? []);
        $model = Siswa::find(Auth::user()->id);
        $model->update($data);
        $model->save();
        return redirect('siswa/data_siswa')->with(['success' => 'Data Siswa Berhasil Diperbaharui']);
    }

    public function dataKeluargaUpdate(Request $request){
        $data = $request->all();
        $model = Keluarga::where('siswa_id',Auth::user()->id)->first();
        if (!isset($model)) {
            $model = new Keluarga();
            $data['siswa_id'] = Auth::user()->id;
            $model->create($data);
        }else{
            $model->update($data);
            $model->save();
        }
        return redirect('siswa/data_keluarga')->with(['success' => 'Data Keluarga Berhasil Diperbaharui']);
    }

    public function dataAkademikUpdate(Request $request){
        // try {
            // dd($request);
            $data = $request->except([ 'rangking', 'nilai_total', 'rata_rata', 'jml_mapel']);
            $model = Akademik::where('siswa_id',Auth::user()->id)->first();
            $data['ekskul'] = json_encode($request->input("ekskul") ?? []);
            $data['mapel_senangi'] = json_encode($request->input("mapel_senangi") ?? []);

            $temp_data = [];
            for ($i=0; $i < count($request->rangking); $i++) {
                $temp = [];
                $temp['rangking'] = $request->rangking[$i];
                $temp['nilai_total'] = $request->nilai_total[$i];
                $temp['rata_rata'] = $request->rata_rata[$i];
                $temp['jml_mapel'] = $request->jml_mapel[$i];
                $temp_data[] = $temp;
            }
            $data['nilai'] = json_encode($temp_data);
            // dd($data);
            if (!isset($model)) {
                $model = new Akademik();
                $data['siswa_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('siswa/data_akademik')->with(['success' => 'Data Akademik Berhasil Diperbaharui']);
        // } catch (\Throwable $th) {
        //     return redirect('siswa/data_akademik')->with(['alert' => 'Data Akademik Gagal Diperbaharui']);
        // }
    }

    public function dataKondisiRumahUpdate(Request $request){
        // try {
            $data = $request->all();
            $this->validate($request, [
                'foto_rumah_*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20248'
            ]);
            $model = KondisiRumah::where('siswa_id',Auth::user()->id)->first();
            if (isset($model)) {
                $temp = json_decode($model->foto_rumah, true);
            }
            $array_foto = ['foto_rumah_depan', 'foto_ruang_tamu', 'foto_dapur', 'foto_kamar_tidur', 'foto_ruang_belajar', 'foto_kamar_mandi'];

            if (!isset($model)) {
                foreach ($array_foto as $item) {
                    if($request->hasFile($item)){
                        $file = $request->file($item);
                        $nama_file = time()."_".$file->getClientOriginalName();
                        $tujuan_upload = 'foto_rumah';
                        $file->move($tujuan_upload, $nama_file);
                        $temp[$item] = $nama_file;
                    }
                }
                $data['foto_rumah'] = json_encode($temp);
                $model = new KondisiRumah();
                $data['siswa_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                foreach ($array_foto as $item) {
                    if($request->hasFile($item)){
                        $file = $request->file($item);
                        $nama_file = time()."_".$file->getClientOriginalName();
                        $tujuan_upload = 'foto_rumah';
                        $file->move($tujuan_upload, $nama_file);
                        $temp[$item] = $nama_file;
                    }
                }
                $data['foto_rumah'] = json_encode($temp);
                $model->update($data);
                $model->save();
            }
            // dd('benar');
            return redirect('siswa/data_rumah')->with(['success' => 'Data Kondisi Rumah Berhasil Diperbaharui']);
        // }
        // catch (\Throwable $th) {
        //     return redirect('siswa/data_rumah')->with(['alert' => 'Data Akademik Gagal Diperbaharui']);
        // }
    }
    public function unggahBerkasUpdate(Request $request){
        try {
            $foto_diri = $request->file('foto_diri');
            $ijazah = $request->file('ijazah');
            $skhu = $request->file('skhu');
            $kk = $request->file('kk');
            $akta_kelahiran = $request->file('akta_kelahiran');
            $lain_lain = $request->file('lain_lain');
            $tujuan_upload = 'data_berkas';
            if (isset($foto_diri)) {
                $foto_diri_nama = time()."_".$foto_diri->getClientOriginalName();
                $foto_diri->move($tujuan_upload,$foto_diri_nama);
            }
            if (isset($ijazah)) {
                $ijazah_nama = time()."_".$ijazah->getClientOriginalName();
                $ijazah->move($tujuan_upload,$ijazah_nama);
            }
            if (isset($skhu)) {
                $skhu_nama = time()."_".$skhu->getClientOriginalName();
                $skhu->move($tujuan_upload,$skhu_nama);
            }
            if (isset($kk)) {
                $kk_nama = time()."_".$kk->getClientOriginalName();
                $kk->move($tujuan_upload,$kk_nama);
            }
            if (isset($akta_kelahiran)) {
                $akta_kelahiran_nama = time()."_".$akta_kelahiran->getClientOriginalName();
                $akta_kelahiran->move($tujuan_upload,$akta_kelahiran_nama);
            }
            if (isset($lain_lain)) {
                $lain_lain_nama = time()."_".$lain_lain->getClientOriginalName();
                $lain_lain->move($tujuan_upload,$lain_lain_nama);
            }

            $berkas = UnggahBerkas::where('siswa_id', Auth::user()->id)->first();
            if (!isset($berkas)) {
                $berkas = new UnggahBerkas();
                $berkas->siswa_id = Auth::user()->id;
            }

            if($request->hasFile('foto_diri')){
                $berkas->foto_diri = $foto_diri_nama ?? null;
            }
            if($request->hasFile('ijazah')){
                $berkas->ijazah = $ijazah_nama ?? null;
            }
            if($request->hasFile('skhu')){
                $berkas->skhu = $skhu_nama ?? null;
            }
            if($request->hasFile('kk')){
                $berkas->kk = $kk_nam ?? null;
            }
            if($request->hasFile('akta_kelahiran')){
                $berkas->akta_kelahiran = $akta_kelahiran_nama ?? null;
            }
            if($request->hasFile('lain_lain')){
                $berkas->lainnya = $lain_lain_nama ?? null;
            }
            $berkas->save();
            return redirect('siswa/unggah_berkas')->with(['success' => 'Berkas Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('siswa/unggah_berkas')->with(['success' => 'Berkas Gagal Diperbaharui']);
        }
    }
}
