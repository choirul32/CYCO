<?php

namespace App\Http\Controllers\Auth\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.orangtua.login');
    }
}
