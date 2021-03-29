<?php

namespace App\Http\Controllers\Auth\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrangTua;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('auth.orangtua.register');
    }

    public function create(Request $request){
        // dd($request);
        OrangTua::create([
            'username' => str_replace(' ', '_', $request->nama),
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1,
            'nama' => $request->nama,
            'nama_siswa' => $request->nama,
            'alamat' => $request->alamat,
            'no_handphone' => $request->no_handphone,
        ]);
        return redirect('orangtua/login')->with(['success' => 'Akun Orang Tua Berhasil Dibuat']);
    }
}
