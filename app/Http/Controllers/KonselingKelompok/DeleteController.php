<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling\Kelompok;

class DeleteController extends Controller
{
    public function deleteSiswa($id){
        $data = Individu::where('', $id);
        $data->delete();
    }
}
