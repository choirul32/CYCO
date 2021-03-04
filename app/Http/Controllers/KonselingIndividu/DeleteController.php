<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;

class DeleteController extends Controller
{
    public function deleteSiswa($id){
        $data = Konseling::find($id);
        $data->delete();
        return redirect()->back();
    }
}
