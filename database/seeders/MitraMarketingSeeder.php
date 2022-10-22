<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Stringable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class MitraMarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mitra_marketings')->insert([
            'nama' => 'Safari',
            'username' => 'safari',
            'hp' => '123456789090', 
            'wa' => '123456789090',
            'alamat' => 'qwertyuiop',
            'kota' => 'qwertyuiop',
            'provinsi' => '1234567890',
            'jabatan' => 'qwert',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Muhammad Asyhar',
            'username' => Str::random('5'),
            'hp' => '081252397285', 
            'wa' => '6281252397285',
            'alamat' => 'Jl Karah 83 RT 1RW 06 Karah Jambangan',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Muhamad Arifin',
            'username' => Str::random('5'),
            'hp' => '081234044195', 
            'wa' => '6281234044195',
            'alamat' => 'Jl Saidani Tambak Sumur Waru',
            'kota' => 'Sidoarjo',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Novia Eka Agustin',
            'username' => Str::random('5'),
            'hp' => '081259424480', 
            'wa' => '6281259424480',
            'alamat' => 'Perum Bumi Cabean Asri E32 Candi',
            'kota' => 'Sidoarjo',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'Erna Siswati',
            'username' => Str::random('5'),
            'hp' => '081295741965', 
            'wa' => '6281295741965',
            'alamat' => 'Ngeni Permai Gang 212, Waru',
            'kota' => 'Sidoarjo',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'ABDUL HADI',
            'username' => Str::random('5'),
            'hp' => '082244556209', 
            'wa' => '6282244556209',
            'alamat' => 'JL Anyelir No 42 Tulungrejo',
            'kota' => 'Kediri',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);

        DB::table('mitra_marketings')->insert([
            'nama' => 'ABDULLAH WAHIB',
            'username' => Str::random('5'),
            'hp' => '081232324112', 
            'wa' => '6281232324112',
            'alamat' => 'Jl Ngeni Permai 212',
            'kota' => 'Sidoarjo',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);
    }
}
