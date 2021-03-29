<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function getAPIOrangtua(){
        $guru = User::where('role_id', 2)->get();
        return response()->json($guru);
    }

    public function getAPIOrangtuaById($id){
        $guru = User::find($id);
        return response()->json($guru);
    }
}
