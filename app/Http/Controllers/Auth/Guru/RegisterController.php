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
        $validated = $data->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_handphone' => ['required', 'string', 'max:255', 'unique:users'],
        ]);
        // try {
            $role_id = null;
            if ($data['jenis_guru'] == 'bk') {
                if ($data['pangkat_guru'] == 'pns') {
                    $role_id = 2;
                }

                if ($data['pangkat_guru'] == 'gtt') {
                    $role_id = 3;
                }
            }
            if ($data['jenis_guru'] == 'mapel') {
                if ($data['pangkat_guru'] == 'pns') {
                    $role_id = 4;
                }

                if ($data['pangkat_guru'] == 'gtt') {
                    $role_id = 5;
                }
            }
            Guru::create([
                'username' => $data['nip_nik'],
                'nama' => $data['nama'],
                'nip_nik' => $data['nip_nik'],
                'email' => $validated['email'],
                'password' => $data['password'],
                'role_id' => $role_id,
                'no_handphone' => $validated['no_handphone'],
            ]);
            return redirect('guru/login')->with(['success-register' => 'Akun Guru Berhasil Dibuat Silahkan login untuk melanjutkan']);
        // } catch (\Throwable $th) {
        //     return redirect('guru/login')->with(['error' => 'Guru Gagal Dibuat']);
        // }
    }

    protected function guard()
    {
        return Auth::guard('guru');
    }
}
