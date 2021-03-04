<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Other\Kelas;
use App\Models\Other\Jurusan;
use App\Models\Other\Agama;
use App\Models\Other\Bahasa;

class Siswa extends Authenticatable
{
    use Notifiable;
    protected $guard = 'siswa';
    protected $table = 'siswa';
    protected $guarded = ['id'];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }

    public function agama(){
        return $this->belongsTo(Agama::class, 'agama_id', 'id');
    }

    public function bahasa(){
        return $this->belongsTo(Bahasa::class, 'bahasa_id', 'id');
    }

    public function getJenisKelaminNamaAttribute(){
        if($this->attributes['jenis_kelamin'] == 0) return "Laki-Laki"; else return "Perempuan";
    }

    public function getKewarganegaraanNamaAttribute(){
        if($this->attributes['kewarganegaraan'] == 0) return "Warga Negara Indonesia"; else return "Warga Negara Asing";
    }

    public function getJenisTinggalNamaAttribute(){
        if($this->attributes['jenis_tinggal'] == 0){
            return "Bersama Orang Tua";
        }elseif($this->attributes['jenis_tinggal'] == 1){
            return "Bersama Wali/Sanak Keluarga";
        }else{
            return "Kost";
        }
    }

    public function getTransportasiNamaAttribute(){
        switch ($this->attributes['alat_transportasi_sekolah']) {
            case 1:
                return "Jalan Kaki";
            case 2:
                return "Sepeda";
            case 3:
                return "Sepeda Motor";
            case 4:
                return "Angkutan Umum";
            case 5:
                return "Ojek";
            case 6:
                return "Antar Jemput";
            default:
                return "Lainnya";
        }
    }
    
}
