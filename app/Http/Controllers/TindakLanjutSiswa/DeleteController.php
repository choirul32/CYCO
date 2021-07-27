<?php

namespace App\Http\Controllers\TindakLanjutSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TindakLanjutSiswa;

class DeleteController extends Controller
{
    public function delete($id){
        try {
            $modal = TindakLanjutSiswa::find($id);
            $modal->delete();
            $data['success'] = true;
            return $data;
        } catch (\Throwable $th) {
            $data['success'] = false;
            return $data;
        }
    }
}
