<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;
use Auth;

class EditController extends Controller
{
    public function verifikasiPermintaan($id){
        $konseling = Konseling::find($id);
        $konseling->verified_at = now();
        $konseling->verified_by = Auth::user();
        $konseling->save();
        return redirect()->back();
    }

    public function editSiswa(Request $request, $id){
        $data = $request->all();
        $konseling = Konseling::find($id);
        $data['konselor_id'] = $request->konselor;
        $konseling->update($data);
        return redirect('siswa/konseling_individu');
    }
}
