<?php

namespace App\Http\Controllers\Auth\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'siswa/home';

    public function showLoginForm(){
        return view('auth.siswa.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:siswa')->except('logout');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('siswa');
    }

    public function login(Request $request){

        $auth = $request->only('username', 'password');

        if (auth()->guard('siswa')->attempt($auth)) {
            Auth::shouldUse('siswa');
            return redirect()->intended(url('siswa/home'));
        }

        return redirect()->back()->with(['error' => 'Username / Password Salah', '']);
    }

    public function logout(){
        auth()->guard('siswa')->logout();
        return redirect('siswa/login');
    }
}
