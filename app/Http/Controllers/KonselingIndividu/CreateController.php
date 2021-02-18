<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling\Individu;
use Auth;

class CreateController extends Controller
{
    public function createSiswa(Request $request){
        try{
            $data = new Individu;
            $data->konselor_id = $request->permintaan_tgl;
            $data->permintaan_tgl = $request->permintaan_tgl;
            $data->permintaan_jam =  $request->permintaan_jam;
            $data->masalah =  $request->masalah;
            $data->harapan =  $request->harapan;
            $data->siswa_id =  Auth()->user;
            $data->save();
        }catch(\Throwable $th) {
            return "gagal";
        }
    }
}
