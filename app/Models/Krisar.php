<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krisar extends Model
{
    protected $table = 'kritik_saran';
    protected $guarded = ['id'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'user_id', 'id');
    }
}
