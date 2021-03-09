<?php

namespace App\Http\Controllers\MasukanSaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Krisar;

class DeleteController extends Controller
{
    public function destroyKrisar($id){
        $modal = Krisar::find($id);
        $modal->delete();
        return redirect()->back();
    }
}
