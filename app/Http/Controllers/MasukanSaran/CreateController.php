<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Krisar;
use Auth;

class CreateController extends Controller
{
    public function createKritikSaran(Request $request){
        try {
            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['role_user'] = Auth::user()->role_id;
            Krisar::create($data);
            return redirect()->back()->with(['success' => 'Kritik dan saran berhasil ditambah']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'Kritik dan saran gagal ditambah']);
        }

    }
}
