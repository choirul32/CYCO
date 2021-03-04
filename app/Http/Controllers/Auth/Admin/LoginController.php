<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LoginController extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function showLoginForm(){
        return view('auth.admin.login');
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
