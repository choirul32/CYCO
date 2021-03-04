<?php

namespace App\Http\Controllers\Auth\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('auth.orangtua.register');
    }
}
