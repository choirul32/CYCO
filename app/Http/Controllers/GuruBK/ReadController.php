<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ReadController extends Controller
{
    public function getAPIGuruBK(){
        $guru_bk = User::where('role_id', 2)->get();
        return Response()->json($guru_bk);
    }

    public function getAPIGuruBKById($id){
        $guru = User::where('id',$id)->first();
        return response()->json($guru);
    }
}
