<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Other\Kelas;

class Siswa extends Model
{
    protected $table = 'siswa';

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id')->nama;
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id')->nama;
    }

    public function agama(){
        return $this->belongsTo(Agama::class, 'agama_id', 'id')->nama;
    }

    public function bahasa(){
        return $this->belongsTo(Bahasa::class, 'bahasa_id', 'id')->nama;
    }

    public function getJenisKelaminAttribute(){
        if($this->jenis_kelamin == 0) return "Laki-Laki"; else return "Perempuan";
    }

    public function getKewarganegaraanAttribute(){
        if($this->kewarganegaraan == 0) return "Warga Negara Indonesia"; else return "Warga Negara Asing";
    }

    public function getJenisTinggalAttribute(){
        if($this->jenis_tinggal == 0){
            return "Bersama Orang Tua";
        }elseif($this->jenis_tinggal == 1){
            return "Bersama Wali/Sanak Keluarga";
        }else{
            return "Kost";
        }
    }

    public function getTransportasiAttribute(){
        switch ($this->alat_transportasi_sekolah) {
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
