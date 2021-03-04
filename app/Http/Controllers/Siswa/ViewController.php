<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Data\Keluarga;
use App\Models\Data\Akademik;
use App\Models\Data\KondisiRumah;
use Auth;

class ViewController extends Controller
{
    public function index(){
        $data['siswa'] = Siswa::all();
        return view('data_master_user.siswa.index')->with($data);
    }
    public function dataSiswa(){
        $data['siswa'] = Siswa::find(Auth::guard('siswa')->user()->id)->first();
        return view('data_master_user.siswa.data_siswa')->with($data);
    }
    public function dataKeluarga(){
        $data['siswa'] = Keluarga::where('siswa_id',Auth::guard('siswa')->user()->id)->first();
        return view('data_master_user.siswa.data_keluarga')->with($data);
    }
    public function dataAkademik(){
        $data['siswa'] = Akademik::where('siswa_id',Auth::guard('siswa')->user()->id)->first();
        return view('data_master_user.siswa.data_akademik')->with($data);
    }
    public function dataRumah(){
        $data['siswa'] = KondisiRumah::where('siswa_id',Auth::guard('siswa')->user()->id)->first();
        return view('data_master_user.siswa.data_rumah')->with($data);
    }
}
