<?php

namespace App\Http\Controllers\Home\Orangtua;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:orangtua');
    }

    public function orangtuaHome(){
        $data['ortu'] = OrangTua::where("id", Auth::user()->id)->first();
        return view('home.index_orangtua')->with($data);
    }
}
