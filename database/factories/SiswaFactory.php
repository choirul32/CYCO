<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'nis' => $faker->randomNumber($nbDigits = 7, $strict = false),
        'nisn' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'full_name' => $faker->name,
        'gender' => $faker->boolean,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'place_of_birth' => $faker->city,
        'nama_wali' => $faker->name,
        'address' => $faker->address,
        'kota' => $faker->city,
        'kecamatan' => $faker->country,
        'kelurahan' => $faker->streetAddress,
    ];
});
