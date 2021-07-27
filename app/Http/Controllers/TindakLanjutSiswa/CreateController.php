<?php

namespace App\Http\Controllers\TindakLanjutSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TindakLanjutSiswa;
use Auth;

class CreateController extends Controller
{
    public function createTindakLanjut(Request $request){
        $data_respon = ['success' => 'Tindak Lanjut Siswa Berhasil Dibuat'];
        if ($request->id != null) {
            $model =  TindakLanjutSiswa::find($request->id);
            $data_respon = ['success' => 'Tindak Lanjut Siswa Berhasil Perbarui'];
        }else{
            $model = new TindakLanjutSiswa();
            $model->guru_mapel_id = Auth::guard('guru')->user()->id;

        }
        $model->siswa_id = $request->siswa_id;
        $model->masukan = $request->masukan;
        $model->keterangan = $request->keterangan;
        $model->save();
        return redirect('guru/tindak-lanjut-siswa')->with($data_respon);
    }


}
