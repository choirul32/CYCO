<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProfilGuru extends Model
{
    use Notifiable;
    protected $guarded = [];
    protected $table = 'profil_user_lain';


}
