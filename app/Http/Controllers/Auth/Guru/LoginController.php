<?php

namespace App\Http\Controllers\Auth\Guru;

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
    protected $redirectTo = 'guru/home';

    public function showLoginForm(){
        return view('auth.guru.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:guru')->except('logout');
    }
    
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('guru');
    }

    public function login(Request $request){
        // dd($request);
        $auth = $request->only('username', 'password');

        if (auth()->guard('guru')->attempt($auth)) {
            Auth::shouldUse('guru');
            return redirect()->intended(url('guru/home'));
        }

        return redirect()->back()->with(['error' => 'Username / Password Salah', '']);
    }

    public function logout(){
        auth()->guard('guru')->logout();
        return redirect('guru/login');
    }
}
