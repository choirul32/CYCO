<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Krisar;
use Auth;

class CreateController extends Controller
{
    public function createKritikSaran(Request $request){
        $data = $request->all();
        $data['user_id'] = 1;
        $data['role_user'] = 1;
        Krisar::create($data);
        return redirect()->back();
    }
}
