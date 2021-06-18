<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Data\Keluarga;
use App\Models\Data\Akademik;
use App\Models\Data\KondisiRumah;
use App\Models\Data\UnggahBerkas;
use App\Models\UnggahanSiswa;
use Auth;

class ViewController extends Controller
{
    public function index(){
        $data['siswa'] = Siswa::all();
        return view('data_master_user.siswa.index')->with($data);
    }

    public function dataSiswa(){
        $data['siswa'] = Siswa::where("id", Auth::user()->id)->first();
        return view('data_master_user.siswa.data_siswa')->with($data);
    }

    public function dataKeluarga(){
        $data['siswa'] = Keluarga::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.data_keluarga')->with($data);
    }

    public function dataAkademik(){
        $data['siswa'] = Akademik::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.data_akademik')->with($data);
    }

    public function dataRumah(){
        $data['siswa'] = KondisiRumah::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.data_rumah')->with($data);
    }

    public function unggahBerkas(){
        $data['siswa'] = UnggahBerkas::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.unggah_berkas')->with($data);
    }

    public function unggahanSiswa(){
        $data['unggahan'] = UnggahanSiswa::where('siswa_id',Auth::user()->id)->get();
        return view('data_master_user.siswa.unggahan-siswa.index')->with($data);
    }

    public function createUnggahanSiswa(){
        return view('data_master_user.siswa.unggahan-siswa.create');
    }

    public function editUnggahanSiswa($id){
        $data['unggahan'] = UnggahanSiswa::where('siswa_id',Auth::user()->id)->where('id', $id)->first();
        return view('data_master_user.siswa.unggahan-siswa.edit')->with($data);
    }
}
