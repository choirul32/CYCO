<?php

namespace App\Http\Controllers\Auth\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('auth.guru.register');
    }

    protected function create(Request $data)
    {
        // dd($data);
        if ($data['jenis_guru'] == 'bk') {
            if ($data['pangkat_guru'] == 'pns') {
                $data_nip_nik = $data['nip'] ?? null;
                Guru::create([
                    'username' => $data['nip'],
                    'nama' => $data['nama'],
                    'nip_nik' => $data_nip_nik,
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'role_id' => 2,
                    'no_handphone' => $data['no_handphone'],
                ]);
            }

            if ($data['jenis_guru'] == 'pns') {
                $data_nip_nik = $data['nik'] ?? null;
                Guru::create([
                    'username' => $data['nik'],
                    'nama' => $data['nama'],
                    'nip_nik' => $data_nip_nik,
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'role_id' => 3,
                    'no_handphone' => $data['no_handphone'],
                ]);
            }
        }
        if ($data['jenis_guru'] == 'mapel') {
            if ($data['pangkat_guru'] == 'pns') {
                $data_nip_nik = $data['nip'] ?? null;
                Guru::create([
                    'username' => $data['nip'],
                    'nama' => $data['nama'],
                    'nip_nik' => $data_nip_nik,
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'role_id' => 4,
                    'no_handphone' => $data['no_handphone'],
                ]);
            }

            if ($data['jenis_guru'] == 'gtt') {
                $data_nip_nik = $data['nik'] ?? null;
                Guru::create([
                    'username' => $data['nik'],
                    'nama' => $data['nama'],
                    'nip_nik' => $data_nip_nik,
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'role_id' => 5,
                    'no_handphone' => $data['no_handphone'],
                ]);
            }
        }


        return redirect('guru/login')->with(['success' => 'Guru Berhasil Dibuat']);;
    }

    protected function guard()
    {
        return Auth::guard('guru');
    }
}
