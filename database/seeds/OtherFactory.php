<?php

use Illuminate\Database\Seeder;

class OtherFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $kelas = ['X', 'XI', 'XII', 'XIII'];
        $jurusan = ['BKP',
                    'DPIB A',
                    'DPIB B',
                    'MESIN A',
                    'MESIN B',
                    'MESIN C',
                    'MESIN D',
                    'RPL A',
                    'RPL B',
                    'RPL C / AXIOO',
                    'TITL A',
                    'TITL B',
                    'TITL C',
                    'TOI A',
                    'TOI B',
                    'TEI A',
                    'TEI B',
                    'TEI C',
                    'TKRO A',
                    'TKRO B',
                    'TKRO C',
                    'TBSM'
                ];
        $agama = ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha'];
        $bahasa = ['Indonesia', 'Jawa', 'Sunda', 'Melayu', 'Inggris'];
        DB::table('role')->insert([
            [
                'name' => "admin",
            ],
            [
                'name' => "guru bk pns",
            ],
            [
                'name' => "guru bk gtt",
            ],
            [
                'name' => "guru mapel pns",
            ],
            [
                'name' => "guru mapel gtt",
            ],
        ]);
        DB::table('kelas')->insert([
            foreach ($kelas as $value) {
                [
                    'name' => $value,
                ],
            }
        ]);
        DB::table('jurusan')->insert([
            foreach ($jurusan as $value) {
                [
                    'name' => $value,
                ],
            }
        ]);
        DB::table('agama')->insert([
            foreach ($agama as $value) {
                [
                    'name' => $value,
                ],
            }
        ]);
        DB::table('bahasa')->insert([
            foreach ($bahasa as $value) {
                [
                    'name' => $value,
                ],
            }
        ]);
    }
}
