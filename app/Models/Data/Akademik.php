<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $table = 'data_akademik';
    protected $guarded = ['id'];

    public function getEkstrakulikulerNamaAttribute(){
        $data = json_decode($this->attributes['ekskul']);
        $temp = [];
        // dd($data);
        foreach ($data as $item) {
            switch ($item) {
                case 1:
                    $temp[] = "Pramuka";
                    break;
                case 2:
                    $temp[] = "Paskibraka";
                    break;
                case 3:
                    $temp[] = "PMR";
                    break;
                case 4:
                    $temp[] = "Ekstra Keterampilan Kejuruan";
                    break;
                case 5:
                    $temp[] = "Tenis";
                    break;
                case 6:
                    $temp[] = "Volly";
                    break;
                case 7:
                    $temp[] = "Bela Diri";
                    break;
                case 8:
                    $temp[] = "Seni Musik/Band";
                    break;
                case 9:
                    $temp[] = "Patroli Keamanan Sekolah";
                    break;
                case 10:
                    $temp[] = "Multimedia";
                    break;
                case 11:
                    $temp[] = "Pecinta Alam";
                    break;
                case 12:
                    $temp[] = "Basket";
                    break;
                case 13:
                    $temp[] = "Pecinta Alam";
                    break;
                case 14:
                    $temp[] = "Basket";
                    break;
                case 15:
                    $temp[] = "Futsal";
                    break;
                case 16:
                    $temp[] = "Karya Ilmiah";
                    break;
            }
        }
        return implode(", ",$temp);
    }

    public function getMapelNamaAttribute(){
        $data = json_decode($this->attributes['mapel_senangi']);
        $temp = [];
        foreach ($data as $item) {
            switch ($item) {
                case 1:
                    $temp[] = "Matematika";
                    break;
                case 2:
                    $temp[] = "Ekonomi";
                    break;
                case 3:
                    $temp[] = "Geografi";
                    break;
                case 4:
                    $temp[] = "Sejarah";
                    break;
                case 5:
                    $temp[] = "Sosiologi";
                    break;
                case 6:
                    $temp[] = "Fisika";
                    break;
                case 7:
                    $temp[] = "Kimia";
                    break;
                case 8:
                    $temp[] = "Biologi";
                    break;
                case 9:
                    $temp[] = "Bahasa Inggris";
                    break;
                case 10:
                    $temp[] = "Bahasa Indonesia";
                    break;
            }
        }
        return implode(", ",$temp);
    }

    public function getRencanaLulusNamaAttribute(){
        $data = $this->attributes['rencana_lulus'];
        switch ($data) {
            case 1:
                return "Mencari Pekerjaan";
            case 2:
                return "Melanjutkan ke Perguruan Tinggi";
            case 3:
                return "Mengikuti Kursus";
            case 4:
                return "Berwisata";
            case 5:
                return "Berumah Tangga";
            case 6:
                return "Belum ada rencana";
        }
    }
}
