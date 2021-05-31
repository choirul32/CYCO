<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\ChatRoom;

class Konseling extends Model
{
    protected $table = 'konseling';
    protected $guarded = ['id'];

    public function konselor(){
        return $this->belongsTo(Guru::class, 'konselor_id', 'id');
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }

    public function room(){
        return $this->belongsTo(ChatRoom::class, 'room_id', 'id');
    }
}
