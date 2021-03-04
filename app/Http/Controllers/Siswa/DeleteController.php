<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class DeleteController extends Controller
{
    public function destroySiswa($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
