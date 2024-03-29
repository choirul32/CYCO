<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    $nama = $faker->unique()->name;
    $nisn = $faker->randomNumber($nbDigits = 9, $strict = false);
    return [
        'username' => $nisn,
        'password' => bcrypt(12345678),
        'nama_lengkap' => $nama,
        'role_id' => 6,
        'nisn' => $nisn,
        'nama_panggilan' => $nama,
        'kelas_id' => $faker->numberBetween($min=1, $max=4),
        'jurusan_id' => $faker->numberBetween($min=1, $max=22),
        'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tempat_lahir' => $faker->city,
        'nik' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'jenis_kelamin' => $faker->boolean,
        'agama_id' => $faker->numberBetween($min=1, $max=5),
        'kewarganegaraan' => $faker->numberBetween($min=1, $max=2),
        'bahasa_id' => [1,2,3,4],
        'anak_ke' => $faker->numberBetween($min=1, $max=10),
        'jumlah_saudara' => $faker->numberBetween($min=1, $max=10),
        'no_handphone' => $faker->phoneNumber,
        'email' => $faker->email,
        'alamat' => $faker->address,
        'jenis_tinggal' => $faker->numberBetween($min=1, $max=3),
        'alat_transportasi_sekolah' => $faker->numberBetween($min=1, $max=6),
        'gol_darah' => $faker->numberBetween($min=1, $max=4),
        'berat_badan' => $faker->numberBetween($min=50, $max=80),
        'tinggi_badan' => $faker->numberBetween($min=155, $max=185),
        'remember_token' => Str::random(10),
    ];
});

