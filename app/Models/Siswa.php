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

    private function getBahasaArray(){
        $bahasa = json_decode($this->attributes['bahasa']);
        $temp = [];
        foreach ($bahasa as $item) {
            switch ($item) {
                case 1:
                    $temp[] = "Bahasa Indonesia";
                    break;
                case 2:
                    $temp[] = "Bahasa Jawa";
                    break;
                case 3:
                    $temp[] = "Bahasa Sunda";
                    break;
                case 4:
                    $temp[] = "Bahasa Melayu";
                    break;
                case 5:
                    $temp[] = "Bahasa Inggris";
                    break;
                default:
                    $temp[] = "Lainnya";
                    break;
            }
        }
        return $temp;
    }

    public function getBahasaNamaAttribute(){
        $result = $this->getBahasaArray();
        $temp = "";
        $i = 0; 
        foreach ($result as $item) {
            if ($i == 0) $temp = $temp. "" .$item;
            else $temp = $temp .", " .$item;
            $i++;
        }
        return $temp;
    }

    public function getGolonganDarahAttribute(){
        $darah = $this->attributes['gol_darah'];
        switch ($darah) {
            case 1:
                return "A";
                break;
            case 2:
                return "B";
                break;
            case 3:
                return "AB";
                break;
            case 4:
                return "O";
                break;
        }
    }

    public function getJenisKelaminNamaAttribute(){
        if($this->attributes['jenis_kelamin'] == 1) return "Laki-Laki"; else return "Perempuan";
    }

    public function getKewarganegaraanNamaAttribute(){
        if($this->attributes['kewarganegaraan'] == 1) return "Warga Negara Indonesia"; else return "Warga Negara Asing";
    }

    public function getAgamaNamaAttribute(){
        $data = $this->attributes['agama'];
        switch ($data) {
            case 1:
                return "Islam";
                break;
            case 2:
                return "Kristen";
                break;
            case 3:
                return "Katolik";
                break;
            case 4:
                return "Hindu";
                break;
            case 5:
                return "Budha";
                break;
        }
    }

    public function getJenisTinggalNamaAttribute(){
        if($this->attributes['jenis_tinggal'] == 1){
            return "Bersama Orang Tua";
        }elseif($this->attributes['jenis_tinggal'] == 2){
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
