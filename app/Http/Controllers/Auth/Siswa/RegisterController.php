<?php

namespace App\Http\Controllers\Auth\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Siswa;
use App\Models\Absensi;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'siswa/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        $validated = $data->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:siswa'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $siswa = Siswa::create([
            'username' => str_replace(' ', '_', $data['nama']),
            'email' => $validated['email'],
            'password' => $data['password'],
            'role_id' => 6,
            'kelas_id' => $data['kelas'],
            'no_handphone' => $data['no_handphone'],
        ]);
        $absensi = new Absensi();
        $absensi->siswa_id = $siswa->id;

        return redirect('siswa/login')->with(['success-register' => 'Akun Siswa Berhasil Dibuat Silahkan login untuk melanjutkan']);
    }


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm(){
        return view('auth.siswa.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('siswa');
    }
}
