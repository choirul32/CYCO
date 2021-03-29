<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'data_keluarga';
    protected $guarded = ['id'];

    public function getStatusAyahNamaAttribute(){
        $data = $this->attributes['status_ayah'];
        switch ($data) {
            case 1:
                return "Masih Hidup";
                break;
            case 2:
                return "Meninggal";
                break;
            case 3:
                return "Bercerai";
                break;
            case 4:
                return "Lainnya";
                break;
        }
    }

    public function getStatusIbuNamaAttribute(){
        $data = $this->attributes['status_ibu'];
        switch ($data) {
            case 1:
                return "Masih Hidup";
                break;
            case 2:
                return "Meninggal";
                break;
            case 3:
                return "Bercerai";
                break;
            case 4:
                return "Lainnya";
                break;
        }
    }

    public function getHubunganAyahNamaAttribute(){
        $data = $this->attributes['hubungan_ayah'];
        switch ($data) {
            case 1:
                return "Ayah Kandung";
                break;
            case 2:
                return "Ayah Tiri";
                break;
            case 3:
                return "Ayah Angkat";
                break;
        }
    }

    public function getHubunganIbuNamaAttribute(){
        $data = $this->attributes['hubungan_ibu'];
        switch ($data) {
            case 1:
                return "Ibu Kandung";
                break;
            case 2:
                return "Ibu Tiri";
                break;
            case 3:
                return "Ibu Angkat";
                break;
        }
    }

    public function getAgamaAyahNamaAttribute(){
        $data = $this->attributes['agama_ayah'];
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

    public function getAgamaIbuNamaAttribute(){
        $data = $this->attributes['agama_ibu'];
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

    public function getPendidikanAyahNamaAttribute(){
        $data = $this->attributes['pendidikan_ayah'];
        switch ($data) {
            case 1:
                return "SD";
                break;
            case 2:
                return "SMP";
                break;
            case 3:
                return "SMA";
                break;
            case 4:
                return "D1";
                break;
            case 5:
                return "D3";
                break;
            case 6:
                return "S1";
                break;
            case 7:
                return "S2";
                break;
            case 8:
                return "S3";
                break;
        }
    }

    public function getPendidikanIbuNamaAttribute(){
        $data = $this->attributes['pendidikan_ibu'];
        switch ($data) {
            case 1:
                return "SD";
                break;
            case 2:
                return "SMP";
                break;
            case 3:
                return "SMA";
                break;
            case 4:
                return "D1";
                break;
            case 5:
                return "D3";
                break;
            case 6:
                return "S1";
                break;
            case 7:
                return "S2";
                break;
            case 8:
                return "S3";
                break;
        }
    }

    public function getPekerjaanAyahNamaAttribute(){
        $data = $this->attributes['pekerjaan_ayah'];
        switch ($data) {
            case 1:
                return "PNS/TNI/POLRI";
                break;
            case 2:
                return "Wirausaha";
                break;
            case 3:
                return "Petani";
                break;
            case 4:
                return "Pedagang";
                break;
            case 5:
                return "Karyawan Swasta";
                break;
            case 6:
                return "Buruh";
                break;
            case 7:
                return "Lainnya";
                break;
            case 8:
                return "Tidak Bekerja";
                break;
        }
    }

    public function getPekerjaanIbuNamaAttribute(){
        $data = $this->attributes['pekerjaan_ibu'];
        switch ($data) {
            case 1:
                return "PNS/TNI/POLRI";
                break;
            case 2:
                return "Wirausaha";
                break;
            case 3:
                return "Petani";
                break;
            case 4:
                return "Pedagang";
                break;
            case 5:
                return "Karyawan Swasta";
                break;
            case 6:
                return "Buruh";
                break;
            case 7:
                return "Lainnya";
                break;
            case 8:
                return "Tidak Bekerja";
                break;
        }
    }
    public function getPenghasilanAyahNamaAttribute(){
        $data = $this->attributes['penghasilan_ayah'];
        switch ($data) {
            case 1:
                return "Tidak Berpenghasilan";
                break;
            case 2:
                return "Rp. 500.000 - Rp. 999.999";
                break;
            case 3:
                return "Rp. 1000.000 - Rp. 1.999.999";
                break;
            case 4:
                return "Rp. 2000.000 - Rp. 4.999.999";
                break;
            case 5:
                return "Rp. 5.000.000 - Rp. 20.000.000";
                break;
            case 6:
                return "Lebih dari Rp. 20.000.000";
                break;
        }
    }

    public function getPenghasilanIbuNamaAttribute(){
        $data = $this->attributes['penghasilan_ibu'];
        switch ($data) {
            case 1:
                return "Tidak Berpenghasilan";
                break;
            case 2:
                return "Rp. 500.000 - Rp. 999.999";
                break;
            case 3:
                return "Rp. 1000.000 - Rp. 1.999.999";
                break;
            case 4:
                return "Rp. 2000.000 - Rp. 4.999.999";
                break;
            case 5:
                return "Rp. 5.000.000 - Rp. 20.000.000";
                break;
            case 6:
                return "Lebih dari Rp. 20.000.000";
                break;
        }
    }
}
