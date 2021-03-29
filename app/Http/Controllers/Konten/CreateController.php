<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function createForm(){
        return view('konten.create');
    }
}
