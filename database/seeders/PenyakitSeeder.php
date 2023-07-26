<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\data_penyakit;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        data_penyakit::create([
            'kd_penyakit' =>'P1',
            'nama_penyakit' =>'Hiperkolestrollemia(Kadar kolestrol tinggi)',
            'deskripsi' =>'-',
            'solusi' =>'-'
        ]);

        data_penyakit::create([
            'kd_penyakit' =>'P2',
            'nama_penyakit' =>'Hipertrigliserida',
            'deskripsi' =>'-',
            'solusi' =>'-'
        ]);
        data_penyakit::create([
            'kd_penyakit' =>'P3',
            'nama_penyakit' =>'Aestrokleosis',
            'deskripsi' =>'-',
            'solusi' =>'-'
        ]);

           
    }
}
