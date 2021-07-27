<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;

class DeleteController extends Controller
{
    public function deleteSiswa($id){
        try {
            $modal = Konseling::find($id);
            $modal->delete();
            $data['success'] = true;
            return $data;
        } catch (\Throwable $th) {
            $data['success'] = false;
            return $data;
        }
    }
}
