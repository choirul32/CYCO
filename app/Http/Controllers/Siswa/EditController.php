<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Data\Keluarga;
use App\Models\Data\Akademik;
use App\Models\Data\KondisiRumah;
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
            $array_foto = ['foto_rumah_depan', 'foto_rumah_belakang'];


            if (!isset($model)) {
                foreach ($array_foto as $item) {
                    $name = null;
                    if($request->hasFile($item)){
                        $file = $request->file($item);
                        $nama_file = time()."_".$file->getClientOriginalName();
                        $tujuan_upload = 'foto_rumah';
                        $file->move($tujuan_upload, $nama_file);
                    }
                    $temp[$item] = $nama_file;
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
        //     dd('salah');
        //     return redirect('siswa/data_rumah')->with(['alert' => 'Data Akademik Gagal Diperbaharui']);
        // }
    }
}
