<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\UnggahanSiswa;
use File;

class DeleteController extends Controller
{
    public function destroySiswa($id){
        $siswa = Siswa::where('id',$id)->first();
        $siswa->delete();
        return redirect('siswa');
    }

    public function deleteUnggahanSiswa($id){
        try {
            $data = UnggahanSiswa::where('id',$id)->first();
            $destinationPath = 'unggahan-siswa';
            File::delete($destinationPath.'/'.$data->file);
            $data->delete();
            return redirect()->back()->with(['success' => 'Unggahan Siswa Berhasil Dihapus']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['success' => 'Unggahan Siswa Gagal Dihapus']);
        }
    }
}
