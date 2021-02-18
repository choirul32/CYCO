<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    $nip = $faker->randomNumber($nbDigits = 15, $strict = false),
    return [
        'username' => $nip,
        'password' => "12345678",
        'role_id' => $faker->numberBetween($min=4, $max=5),
        'nama_lengkap' => $nama,
        'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),s
        'tempat_lahir' => $faker->city,
        'nip_nik' => $nip,
        'jenis_kelamin' => $faker->boolean;
        'alamat' => $faker->address,
        'email' => $faker->email,
        'no_handphone' => $faker->phoneNumber,
    ];
});
