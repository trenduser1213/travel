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
        $admin_nama ='safari admin';
        $admin_email ='safariglobalperkasa.pt@gmail.com';
        $admin_pass = Hash::make('adminSafari');
        $admin_username = 'admin';
        $admin =  User::create([
            'name' => $admin_nama,
            'email' => $admin_email,
            'password' => $admin_pass,
            'username' => $admin_username
        ]);
        $admin->assignRole('admin');
        DB::table('mitra_marketings')->insert([
            'nama' => $admin_nama,
            'username' => $admin_username,
            'hp' => '123456789090', 
            'wa' => '123456789090',
            'alamat' => 'qwertyuiop',
            'kota' => 'qwertyuiop',
            'provinsi' => '1234567890',
            'jabatan' => 'qwert',
            'status' => '1', 
        ]);

        $mitra1_nama = 'safari mitra';
        $mitra1_username = Str::random('5');
        $mitra = User::create([
            'name' => $mitra1_nama,
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('mitraSafari'),
            'username' => $mitra1_username
        ]);
        $mitra->assignRole('mitra');
        DB::table('mitra_marketings')->insert([
            'nama' => $mitra1_nama,
            'username' => $mitra1_username,
            'hp' => '081252397285', 
            'wa' => '6281252397285',
            'alamat' => 'Jl Karah 83 RT 1RW 06 Karah Jambangan',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'jabatan' => '',
            'status' => '1', 
        ]);


    }
}
