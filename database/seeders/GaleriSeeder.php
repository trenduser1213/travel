<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri')->insert([
            'judul' => 'Manasik',
            'link' => 'assets/images/gallery/Manasik-Safari-Tour.jpg',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'tidak',
            'kategori_galeri' => 'foto',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Pembekalan',
            'link' => 'assets/images/gallery/Pembekalan-Sebelum-Keberang.jpg',
            'kategori_galeri' => 'foto',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Proses Bagasi',
            'link' => 'assets/images/gallery/Proses-Bagasi.jpg',
            'kategori_galeri' => 'foto',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Belanja di Kebun Kurma',
            'link' => '<iframe src="https://www.youtube.com/embed/RX5ypX1TigY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'kategori_galeri' => 'video',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Makam Baqeeq',
            'link' => '<iframe src="https://www.youtube.com/embed/kPgRkIXSFJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'kategori_galeri' => 'video',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_galeri' => 'ya',
        ]);

        DB::table('galeri')->insert([
            'judul' => 'Halal Bi Halal',
            'link' => '<iframe src="https://www.youtube.com/embed/HDASx9ovpC8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'kategori_galeri' => 'video',
            'is_tampil_di_beranda' => 'tidak',
            'is_tampil_di_galeri' => 'ya',
            
        ]);
    }
}
