<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\MitraMarketing;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mitra1_nama = 'Safari Mitra';
        $mitra1_username = 'Safari';
        $mitra1 = User::create([
            'name' => $mitra1_nama,
            'email' => 'mitrasafari@gmail.com',
            'password' => Hash::make('mitraSafari'),
            'username' => $mitra1_username
        ]);
        $mitra1->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra1_nama,
            'username' => $mitra1_username,
            'hp' => '081232324112', 
            'wa' => '6281232324112',
            'alamat' => 'Jl. Pemuda 108 - 116 Lt. 1 No. 07',
            'kota' => '3578',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $mitra2_nama = 'Muhammad Asyhar';
        $mitra2_username = Str::random('5');
        $mitra2 = User::create([
            'name' => $mitra2_nama,
            'email' => 'asyhar@gmail.com',
            'password' => Hash::make('password'),
            'username' => $mitra2_username
        ]);
        $mitra2->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra2_nama,
            'username' => $mitra2_username,
            'hp' => '081252397285', 
            'wa' => '6281252397285',
            'alamat' => 'Jl Karah 83 RT 1RW 06 Karah Jambangan',
            'kota' => '3578',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $mitra3_nama = 'Muhammad Arifin';
        $mitra3_username = Str::random('5');
        $mitra3 = User::create([
            'name' => $mitra3_nama,
            'email' => 'arifin@gmail.com',
            'password' => Hash::make('password'),
            'username' => $mitra3_username
        ]);
        $mitra3->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra3_nama,
            'username' => $mitra3_username,
            'hp' => '081234044195', 
            'wa' => '6281234044195',
            'alamat' => 'Jl Saidani Tambak Sumur Waru',
            'kota' => '3515',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $mitra4_nama = 'Novia Eka Agustin';
        $mitra4_username = Str::random('5');
        $mitra4 = User::create([
            'name' => $mitra4_nama,
            'email' => 'novia@gmail.com',
            'password' => Hash::make('password'),
            'username' => $mitra4_username
        ]);
        $mitra4->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra4_nama,
            'username' => $mitra4_username,
            'hp' => '081259424480', 
            'wa' => '6281259424480',
            'alamat' => 'Perum Bumi Cabean Asri E32 Candi',
            'kota' => '3515',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $mitra5_nama = 'Erna Siswati';
        $mitra5_username = Str::random('5');
        $mitra5 = User::create([
            'name' => $mitra5_nama,
            'email' => 'Erna@gmail.com',
            'password' => Hash::make('password'),
            'username' => $mitra5_username
        ]);
        $mitra5->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra5_nama,
            'username' => $mitra5_username,
            'hp' => '081295741965', 
            'wa' => '6281295741965',
            'alamat' => 'Ngeni Permai Gang 212, Waru',
            'kota' => '3515',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $mitra6_nama = 'Abdul Hadi';
        $mitra6_username = Str::random('5');
        $mitra6 = User::create([
            'name' => $mitra6_nama,
            'email' => 'hadi@gmail.com',
            'password' => Hash::make('password'),
            'username' => $mitra6_username
        ]);
        $mitra6->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra6_nama,
            'username' => $mitra6_username,
            'hp' => '082244556209', 
            'wa' => '6282244556209',
            'alamat' => 'JL Anyelir No 42 Tulungrejo',
            'kota' => '3515',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $mitra7_nama = 'Abdullah Wahib';
        $mitra7_username = Str::random('5');
        $mitra7 = User::create([
            'name' => $mitra7_nama,
            'email' => 'abdullah@gmail.com',
            'password' => Hash::make('password'),
            'username' => $mitra7_username
        ]);
        $mitra7->assignRole('mitra');

        DB::table('mitra_marketings')->insert([
            'nama' => $mitra7_nama,
            'username' => $mitra7_username,
            'hp' => '081232324112', 
            'wa' => '6281232324112',
            'alamat' => 'Jl Ngeni Permai 212',
            'kota' => '3515',
            'provinsi' => '35',
            'jabatan' => 'Marketing',
            'status' => '1', 
        ]);

        $admin_nama ='Safari Admin';
        $admin_email ='safariglobalperkasa.pt@gmail.com';
        $admin_pass = Hash::make('adminSafari');
        $admin_username = 'Safari';
        $admin =  User::create([
            'id' => 999,
            'name' => $admin_nama,
            'email' => $admin_email,
            'password' => $admin_pass,
            'username' => $admin_username
        ]);
        $admin->assignRole('admin');

    }
}
