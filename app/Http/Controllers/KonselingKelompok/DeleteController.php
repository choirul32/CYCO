<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;

class DeleteController extends Controller
{
    public function deleteSiswa($id){
        try {
            $data = Konseling::find($id);
            $data->delete();
            return redirect()->back()->with(['success' => 'Konseling Individu Berhasil Dihapus']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['success' => 'Konseling Individu Gagal Dihapus']);
        }
    }
}
