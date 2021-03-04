<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $email = $faker->unique()->safeEmail;
    return [
        'username' => $email,
        'password' => bcrypt("12345678"),
        'role_id' => 2,
        'nama' => $faker->unique()->name,
        'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'tempat_lahir' => $faker->city,
        'nip_nik' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'jenis_kelamin' => $faker->boolean,
        'alamat' => $faker->address,
        'no_handphone' => $faker->phoneNumber,
        'bidang_studi' => 'guru bk',
        'email' => $email,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
