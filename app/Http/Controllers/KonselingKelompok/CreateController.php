<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use Auth;

class CreateController extends Controller
{
    public function storeSiswa(Request $request){
        $data = $request->all();
        $data['konselor_id'] = $request->konselor;
        $data['siswa_id'] = 1;
        $data['jenis_konseling'] = 1;
        Konseling::create($data);
        return redirect('siswa/konseling_kelompok');
    }
}
