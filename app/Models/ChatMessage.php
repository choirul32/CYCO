<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Siswa;
use Carbon\Carbon;

class ChatMessage extends Model
{
    protected $guarded = [];
    protected $table = 'chat_messages';

    public function guru(){
        return $this->belongsTo(User::class, 'user_id', 'id')->where('role_id', 6);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'user_id', 'id')->whereIn('role_id', [2,3,4,5]);
    }

    public function getDateHumanAttribute(){
        return $this->created_at->format('h:i | M d');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
