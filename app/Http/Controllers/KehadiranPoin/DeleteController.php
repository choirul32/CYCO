<?php

namespace App\Http\Controllers\KehadiranPoin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poin;
use App\Models\Kehadiran;

class DeleteController extends Controller
{
    public function deletePoin($id){
        try {
            $modal = Poin::find($id);
            $modal->delete();
            $data['success'] = true;
            return $data;
        } catch (\Throwable $th) {
            $data['success'] = false;
            return $data;
        }
    }

    public function deleteKehadiran($id){
        try {
            $modal = Kehadiran::find($id);
            $modal->delete();
            $data['success'] = true;
            return $data;
        } catch (\Throwable $th) {
            $data['success'] = false;
            return $data;
        }
    }
}
