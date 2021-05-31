<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\ChatMessage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJenisKelaminNamaAttribute(){
        $kelas = $this->attributes['jenis_kelamin'];
        switch ($kelas) {
            case 1:
                return "Laki-Laki";
                break;
            case 2:
                return "Perempuan";
                break;
            default:
                return "-";
                break;
        }
    }

    public function chat(){
        return $this->hasMany(ChatMessage::class, 'user_id', 'id')->whereIn('role_id', [2,3,4,5]);
    }
}
