<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonis')->insert([
            'nama' => 'Suratmi Rahman',
            'jabatan' => '',
            'gambar' => 'assets/images/testimoni/Suratmi Rahman.png',
            'testimoni' => 'Alhamdulillah travel Safari Umroh aman & amanah, pelayanan dan fasilitas yang diberikan sangat memuaskan. Para pembimbingnya sangat sabar & ramah. Barokallahu fiikum
            Semoga dipertemukan lg dilain kesempatan. Smoga Safari umroh kedepannya smakin jaya & sukses',
            'is_tampil' => 'ya',
        ]);

        
        DB::table('testimonis')->insert([
            'nama' => 'Endang Kusumawati',
            'jabatan' => '',
            'gambar' => 'assets/images/testimoni/Endang Kusumawati.png',
            'testimoni' => 'Selama mengikuti safari pelayanannya amat bagus dan para pendamping serta muntawif nya sangat ramah',
            'is_tampil' => 'ya',
        ]);

        
        DB::table('testimonis')->insert([
            'nama' => 'Hardika Putri',
            'jabatan' => '',
            'gambar' => 'assets/images/testimoni/Hardika Putri.png',
            'testimoni' => 'Pertama kali ikut jamaah umroh safari travel & tour banyak ilmu, pengalaman yang didapat selama ditanah suci,,, sya sangat puas pelayanan safari trhadap para jamaah,,,
            Semoga PT.SAFARI semakin maju, jaya & sukses',
            'is_tampil' => 'ya',
        ]);
    }
}
