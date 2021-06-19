<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    protected $guarded = [];
    protected $table = 'chat_rooms';

    // public function messages(){
    //     return $this->hasMany(ChatMessage::class, 'chat_room_id', 'id');
    // }
}
