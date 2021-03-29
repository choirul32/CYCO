<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class ReadController extends Controller
{
    public function getAPISiswa(){
        $siswa = Siswa::all();
        return response()->json($siswa);
    }

    public function getAPISiswaById($id){
        $guru = Siswa::find($id);
        return response()->json($guru);
    }
}
