<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling\Individu;

class DeleteController extends Controller
{
    public function deleteSiswa($id){
        $data = Individu::where('', $id);
        $data->delete();
    }
}
