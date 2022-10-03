<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'gambar' => 'assets/images/produk/2021-Milad-safari-tour.jpg',
            'nama' => 'Paket Milad',
            'harga' => '30.000.000',
            'slug' => 'paket-milad',
            'tgl_berangkat' => '16 Sept 2022',
            'durasi' => '14 Hari',
            'total_seat' => '75 Pax',
            'berangkat_dari' => 'Jakarta',
            'hotel' => 'Setaraf',
            'maskapai' => 'Saudi Airlines',
            'kategori_paket' => 'Umrah',
        ],
    );

    DB::table('produks')->insert([
        'gambar' => 'assets/images/produk/2021-Milad-safari-tour.jpg',
        'nama' => 'Paket Milad2',
        'harga' => '30.000.000',
        'slug' => 'paket-milad-2',
        'tgl_berangkat' => '16 Sept 2022',
        'durasi' => '14 Hari',
        'total_seat' => '75 Pax',
        'berangkat_dari' => 'Jakarta',
        'hotel' => 'Setaraf',
        'maskapai' => 'Saudi Airlines',
        'kategori_paket' => 'Umrah',
    ],
);

DB::table('produks')->insert([
    'gambar' => 'assets/images/produk/2021-Milad-safari-tour.jpg',
    'nama' => 'Paket Milad3',
    'harga' => '30.000.000',
    'slug' => 'paket-milad-3',
    'tgl_berangkat' => '16 Sept 2022',
    'durasi' => '14 Hari',
    'total_seat' => '75 Pax',
    'berangkat_dari' => 'Jakarta',
    'hotel' => 'Setaraf',
    'maskapai' => 'Saudi Airlines',
    'kategori_paket' => 'Haji',
],
);
    }
}
