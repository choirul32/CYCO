<?php

namespace App\Http\Controllers\Auth\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:guru')->except('logout');
    }

    public function showLoginForm(){
        if (Auth::guard('orangtua')->user() != null) {
            return redirect('orangtua/home');
        }else{
            return view('auth.orangtua.login');
        }
    }

    protected function guard()
    {
        return Auth::guard('orangtua');
    }

    public function login(Request $request){
        // dd($request);
        $auth = $request->only('username', 'password');

        if (auth()->guard('orangtua')->attempt($auth)) {
            Auth::shouldUse('orangtua');
            return redirect()->intended(url('orangtua/home'));
        }

        return redirect()->back()->with(['error' => 'Username / Password Salah', '']);
    }

    public function logout(){
        auth()->guard('orangtua')->logout();
        return redirect('orangtua/login');
    }
}
