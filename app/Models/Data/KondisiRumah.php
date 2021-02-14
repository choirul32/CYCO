<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class KondisiRumah extends Model
{
    protected $table = 'users';

    public function getKepemilikanRumahAttribute(){
        switch ($this->kepemilikan_rumah) {
            case 1:
                return "Sendiri";
            case 2:
                return "Sewa Tahunan";
            case 3:
                return "Sewa Bulanan";
            case 4:
                return "Menumpang";
            case 5:
                return "Tidak memiliki";
            case 6:
                return "Menumpang tanpa izin";
            default:
                return "Lainnya";
        }
    }
    public function getSumberListrikAttribute(){
        switch ($this->sumber_listrik) {
            case 1:
                return "PLN";
            case 2:
                return "GENSET/MANDIRI";
            case 3:
                return "TENAGA SURYA";
            case 4:
                return "PLN DAN GENSET";
            default:
                return "Lainnya";
        }
    }
    public function getDayaListrikAttribute(){
        switch ($this->daya_listrik) {
            case 1:
                return "450";
            case 2:
                return "900";
            case 3:
                return "1300";
            case 4:
                return "2200";
            case 5:
                return "3500";
            case 6:
                return "5500";
            case 7:
                return ">5500";
            default:
                return "Lainnya";
        }
    }
    public function getLuasTanahAttribute(){
        switch ($this->luas_tanah) {
            case 1:
                return ">200";
            case 2:
                return "100-200";
            case 3:
                return "50-99";
            case 4:
                return "25-50";
            case 5:
                return "<25";
            default:
                return "Lainnya";
        }
    }
    public function getLuasBangunanAttribute(){
        switch ($this->luas_bangunan) {
            case 1:
                return ">200";
            case 2:
                return "100-200";
            case 3:
                return "50-99";
            case 4:
                return "25-50";
            case 5:
                return "<25";
            default:
                return "Lainnya";
        }
    }
    public function getJenisAtapAttribute(){
        switch ($this->jenis_atap) {
            case 1:
                return "Genting";
            case 2:
                return "Cor-coran";
            case 3:
                return "Asbes/Seng";
            case 4:
                return "Kayu";
            case 5:
                return "Rumbai/Tanaman";
            case 6:
                return "Tanpa Atap";
            default:
                return "Lainnya";
        }
    }
    public function getBahanLantaiAttribute(){
        switch ($this->bahan_lantai) {
            case 1:
                return "Tanah";
            case 2:
                return "Kayu";
            case 3:
                return "Semen Plester";
            case 4:
                return "Ubin";
            case 5:
                return "Keramik";
            default:
                return "Lainnya";
        }
    }
    public function getKamarMandiAttribute(){
        switch ($this->kamar_mandi) {
            case 1:
                return "Kepemilikan sendiri di dalam";
            case 2:
                return "kepemilikan sendiri di luar";
            case 3:
                return "Berbagi pakai dengan tetangga";
            case 4:
                return "Kamar mandi umum";
            default:
                return "Lainnya";
        }
    }
    public function getSumberAirAttribute(){
        switch ($this->sumber_air) {
            case 1:
                return "Kemasan";
            case 2:
                return "PDAM";
            case 3:
                return "Sumur";
            case 4:
                return "Sungai/Mata Air";
            default:
                return "Lainnya";
        }
    }
}
