<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  User::create([
            'name' => 'safari admin',
            'email' => 'safariglobalperkasa.pt@gmail.com',
            'password' => Hash::make('adminSafari'),
        ]);
        $admin->assignRole('admin');

        $mitra = User::create([
            'name' => 'safari mitra',
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('mitraSafari'),
        ]);
        $mitra->assignRole('mitra');


    }
}
