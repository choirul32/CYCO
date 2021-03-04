<?php

namespace App\Http\Controllers\GuruBK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DeleteController extends Controller
{
    public function destroyGuruBK($id){
        $guru_bk = User::find($id);
        $guru_bk->delete();
        return redirect('guru_bk');
    }
}
