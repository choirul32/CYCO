<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    public function storeGuruBK(Request $request){
        $data = $request->all();
        $data['username'] = $request->email;
        $data['password'] = bcrypt(12345678);
        $data['role_id'] = 2;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        User::create($data);
        return redirect('guru_bk');
    }
}
