<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Data\Keluarga;
use App\Models\Data\Akademik;
use App\Models\Data\KondisiRumah;
use Auth;

class EditController extends Controller
{
    public function dataSiswa(){
        $data['siswa'] = Siswa::find(Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_siswa')->with($data);
    }

    public function dataKeluarga(){
        $data['siswa'] = Keluarga::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_keluarga')->with($data);
    }

    public function dataAkademik(){
        $data['siswa'] = Akademik::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_akademik')->with($data);
    }

    public function dataRumah(){
        $data['siswa'] = KondisiRumah::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_rumah')->with($data);
    }

    public function dataSiswaUpdate(Request $request){
        dd($request);
        $data['siswa'] = Keluarga::where('siswa_id',Auth::user()->id)->first();
        return view('data_master_user.siswa.form_data_keluarga')->with($data);
    }
}
