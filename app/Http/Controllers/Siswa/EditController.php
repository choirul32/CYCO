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
        try {
            $data = $request->all();
            $model = Akademik::where('siswa_id',Auth::user()->id)->first();
            $data['ekskul'] = $request->input("ekskul");
            $data['mapel_senangi'] = $request->input("mapel_senangi");

            $temp_data = [];
            for ($i=0; $i < count($request->rangking); $i++) {
                $temp = [];
                $temp['rangking'] = $request->rangking[$i];
                $temp['nilai_total'] = $request->nilai_total[$i];
                $temp['rata_rata'] = $request->rata_rata[$i];
                $temp['jml_mapel'] = $request->jml_mapel[$i];
                $temp_data[] = $temp;
            }
            $data['nilai'] = $temp_data;

            if (!isset($model)) {
                $model = new Akademik();
                $data['siswa_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('siswa/data_akademik')->with(['success' => 'Data Akademik Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('siswa/data_akademik')->with(['alert' => 'Data Akademik Gagal Diperbaharui']);
        }
    }

    public function dataKondisiRumahUpdate(Request $request){
        try {
            $data = $request->all();
            $model = KondisiRumah::where('siswa_id',Auth::user()->id)->first();
            if (!isset($model)) {
                $model = new KondisiRumah();
                $data['siswa_id'] = Auth::user()->id;
                $model->create($data);
            }else{
                $model->update($data);
                $model->save();
            }
            return redirect('siswa/data_rumah')->with(['success' => 'Data Kondisi Rumah Berhasil Diperbaharui']);
        } catch (\Throwable $th) {
            return redirect('siswa/data_rumah')->with(['alert' => 'Data Akademik Gagal Diperbaharui']);
        }
    }
}
