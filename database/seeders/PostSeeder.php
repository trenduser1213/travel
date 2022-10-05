<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_post_id' => 1,
            'gambar' => 'assets/images/produk/2021-Milad-safari-tour.jpg',
            'judul' => 'Paket Milad',
            'slug' => 'paket-milad',
            'excerpt' => 'awkwkwkwkwkkw',
            'kategori' => 'saudi',
            'written_by' => 'M.Arifin',
            'body' => 'akwkwdksndakansdknksadnksnksndknaskdnksndkasnd',
            'is_tampil_di_beranda' => 'tidak',
            'is_tampil_di_halaman_artikel' => 'ya'
        ],
    );

    DB::table('posts')->insert([
            'category_post_id' => 2,
            'gambar' => 'assets/images/produk/2021-Milad-safari-tour.jpg',
            'judul' => 'Paket Milad2',
            'slug' => 'paket-milad2',
            'excerpt' => 'awkwkwkwkwkkw',
            'kategori' => 'saudi',
            'written_by' => 'M.Arifin',
            'body' => 'akwkwdksndakansdknksadnksnksndknaskdnksndkasnd',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_halaman_artikel' => 'ya'
        ],
    );

    DB::table('posts')->insert([
            'category_post_id' => 3,
            'gambar' => 'assets/images/produk/2021-Milad-safari-tour.jpg',
            'judul' => 'Paket Milad3',
            'slug' => 'paket-milad3',
            'excerpt' => 'awkwkwkwkwkkw',
            'kategori' => 'saudi',
            'written_by' => 'M.Arifin',
            'body' => 'akwkwdksndakansdknksadnksnksndknaskdnksndkasnd',
            'is_tampil_di_beranda' => 'ya',
            'is_tampil_di_halaman_artikel' => 'tidak'
        ],
    );
    }
}
