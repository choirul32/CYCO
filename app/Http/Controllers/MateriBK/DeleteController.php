<?php

namespace App\Http\Controllers\MateriBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriBK;

class DeleteController extends Controller
{
    public function delete($id){
        $data['materi'] = MateriBK::all();
        $modal = MateriBK::find($id);
        $modal->delete();
        // return view('materi_bk.index')->with($data)->with(['success' => 'Materi berhasil dihapus']);
    }
}
