<?php

namespace App\Http\Controllers\GuruMapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ReadController extends Controller
{
    public function getAPIGuruMapel(){
        $guru = User::where('role_id', 2)->get();
        return response()->json($guru);
    }

    public function getAPIGuruMapelById($id){
        $guru = User::find($id);
        return response()->json($guru);
    }
}
