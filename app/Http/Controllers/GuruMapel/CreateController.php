<?php

namespace App\Http\Controllers\GuruMapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function storeGuruMapel(Request $request){
        $data = $request->all();
        $data['username'] = $request->email;
        $data['password'] = bcrypt(12345678);
        $data['role_id'] = 3;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        User::create($data);
        return redirect('guru_mapel');
    }
}
