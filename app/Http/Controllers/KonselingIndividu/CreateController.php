<?php

namespace App\Http\Controllers\KonselingIndividu;

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
        $data['jenis_konseling'] = 0;
        Konseling::create($data);
        return redirect('siswa/konseling_individu');
    }
}
