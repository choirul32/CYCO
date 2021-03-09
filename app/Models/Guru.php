<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Konseling;

class Guru extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];
    protected $table = 'users';

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // public function konseling(){
    //     return $this->hasMany(Konseling::class, 'konselor_id', 'id');
    // }
}
