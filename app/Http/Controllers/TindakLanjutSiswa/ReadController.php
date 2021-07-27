<?php

namespace App\Http\Controllers\TindakLanjutSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TindakLanjutSiswa;

class ReadController extends Controller
{
    public function getTanggapan($id){
        return TindakLanjutSiswa::find($id);
    }
}
