<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Data\Akademik;
use App\Models\Data\Keluarga;
use App\Models\Data\KondisiRumah;
class ReadController extends Controller
{
    public function getAPISiswa(){
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    public function getAPISiswaById($id){
        $data['siswa'] = Siswa::find($id);
        $data['akademik'] = Akademik::find($id);
        $data['keluarga'] = Keluarga::find($id);
        $data['kondisi_rumah'] = KondisiRumah::find($id);
        return response()->json($data);
    }

}
