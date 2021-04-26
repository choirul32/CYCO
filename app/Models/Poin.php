<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    protected $table = 'poin';
    protected $guarded = ['id'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
