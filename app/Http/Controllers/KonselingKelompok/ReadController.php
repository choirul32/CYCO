<?php

namespace App\Http\Controllers\KonselingKelompok;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;

class ReadController extends Controller
{
    public function getSingleKonseling($id){
        return Konseling::find($id);
    }
}
