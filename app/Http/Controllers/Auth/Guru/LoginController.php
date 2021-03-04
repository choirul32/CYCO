<?php

namespace App\Http\Controllers\Auth\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.guru.login');
    }

    public function login(Request $request){
        $auth = $request->only('email', 'password');
        $auth['status'] = 1;

        if (auth()->guard('admin')->attempt($auth)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->with(['error' => 'Email / Password Salah']);
    }
}
