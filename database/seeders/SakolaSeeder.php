<?php

namespace Database\Seeders;

use App\Models\Sakola;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SakolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sakola::insert(
            [
                'nama' => 'SmkAssalaam',
                'alamat' => 'JL.Cibaduyut',
                'email' => 'Smkassalaam@gmail.com',
                'tlp' => '082188567',
                'status' => 'aktif'
            ]
        );
        Sakola::insert(
            [
                'nama' => 'SmaAssalaam',
                'alamat' => 'JL.Cibaduyut',
                'email' => 'SmaAssalaam@gmail.com',
                'tlp' => '084275557',
                'status' => 'aktif',
            ]       
        );
        Sakola::insert(
            [
                'nama' => 'Mahaputra',
                'alamat' => 'JL.katapang',
                'email' => 'Mahaputra@gmail.com',
                'tlp' => '082178756',
                'status' => 'aktif',
            ]
        );

        Sakola::insert(
            [
                'nama' => 'SmpNurulIaman',
                'alamat' => 'JL.Cibaduyut',
                'email' => 'Smpnuruliman@gmail.com',
                'tlp' => '082345656',
                'status' => 'aktif',
            ]
        );  
        Sakola::insert(
            [
                'nama' => 'SmaNurilIman',
                'alamat' => 'JL.Cibaduyut',
                'email' => 'Smanuruliman@gmail.com',
                'tlp' => '082167778',
                'status' => 'aktif',
            ]
        );
        Sakola::insert(
            [
                'nama' => 'SdNurulIman',
                'alamat' => 'JL.Cibaduyut',
                'email' => 'Sdnuruliaman@gmail.com',
                'tlp' => '08288762',
                'status' => 'aktif',
            ]
        );
        Sakola::insert(
            [
                'nama' => 'SdKalamKudus',
                'alamat' => 'JL.Cibaduyut',
                'email' => 'Sdkalamkudus@gmail.com',
                'tlp' => '08212166',
                'status' => 'aktif',
            ]
        );
        Sakola::insert(
            [
                'nama' => 'SmpKalamKudus',
                'alamat' => 'JL.katapang',
                'email' => 'Smpkalamkudus@gmail.com',
                'tlp' => '0821987288',
                'status' => 'aktif',
            ]
        );

        Sakola::insert(
            [
                'nama' => 'Smp38',
                'alamat' => 'JL Cibaduyut',
                'email' => 'Smp38@gmail.com',
                'tlp' => '08234678',
                'status' => 'aktif',
            ]
        );
        Sakola::insert(
            [
                'nama' => 'SmpSinarMiskin',
                'alamat' => 'JL Cibaduyut',
                'email' => 'Smanuruliman@gmail.com',
                'tlp' => '082156778',
                'status' => 'aktif',
            ]
        );


    }
}
