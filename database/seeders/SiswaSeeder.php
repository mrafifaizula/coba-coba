<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert(
            [
                'nama' => 'M Rafi Faizul A',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Fadil',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
            ]
        );

        Siswa::insert(
            [
                'nama' => 'Azmi',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
            ]
        );

    }
}
