<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gejala::create([
           
            'nama_gejala' =>'merokok',
            'kd_gejala' =>'G01',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'memiliki keluarga yang riwayat kolestrolnya tinggi (faktor genetik)',
            'kd_gejala' =>'G02',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'memiliki berat badan berlebih',
            'kd_gejala' =>'G03',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'memiliki riwayat diabetes',
            'kd_gejala' =>'G04',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'sering mengonsumsi makanan yang berlemak',
            'kd_gejala' =>'G05',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'memiliki pola makan yang tidak teratur',
            'kd_gejala' =>'G06',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'mengalami sesak dibagian dada seperti tertindih',
            'kd_gejala' =>'G07',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'mengalami nyeri hebat dibagian perut(bukan karena sedang haid)',
            'kd_gejala' =>'G08',
        ]);
        Gejala::create([
           
            'nama_gejala' =>'merasakan nyeri atau pegal dibagian tengkuk leher, pundak dan punggung',
            'kd_gejala' =>'G09',
        ]);
        Gejala::create([
           
            'nama_gejala' =>'sering merasakan kesemutan dibagian tangan dan kaki',
            'kd_gejala' =>'G10',
        ]);
        Gejala::create([
           
            'nama_gejala' =>'merasakan mudah lelah pada aktifitas sehari-hari',
            'kd_gejala' =>'G011',
        ]);

        Gejala::create([
           
            'nama_gejala' =>'memiliki tumpukanlemak kuning pada area kelopak mata',
            'kd_gejala' =>'G012',
        ]);
        Gejala::create([
           
            'nama_gejala' =>'merasakan mual atau muntah disertai jantung berdebar',
            'kd_gejala' =>'G013',
        ]);
        Gejala::create([
           
            'nama_gejala' =>'sering mengalami keringat dingin secara tiba-tiba',
            'kd_gejala' =>'G014',
        ]);
       
    }
}
