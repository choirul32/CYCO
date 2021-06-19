<?php

namespace App\Http\Controllers\KonselingIndividu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konseling;

class ReadController extends Controller
{
    public function getSingleKonseling($id){
        return Konseling::where('id',$id)->with('chat_room')->first();
    }
}
