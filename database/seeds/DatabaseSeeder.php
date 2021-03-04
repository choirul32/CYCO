<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(OtherFactory::class);
        // $users = factory(\App\Models\Siswa::class, 10)->create();
        // $guru_bk = factory(\App\Models\User::class, 1)->create();
        $siswa = factory(\App\Models\Siswa::class, 1)->create();
    }
}
