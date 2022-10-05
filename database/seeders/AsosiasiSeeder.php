<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AsosiasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/mandiri_syariah.png',
            'nama' => '“Mandiri Syariah',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/asita.png',
            'nama' => 'Asita',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/kemenag.png',
            'nama' => 'Kemenag',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/pesona_indonesia.png',
            'nama' => 'Mandiri Syariah',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/5pasti.png',
            'nama' => '5pasti',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/amphuri.png',
            'nama' => 'amphuri',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/kan.png',
            'nama' => 'kan',
            'is_tampil' => 'ya',
        ]);

        DB::table('asosiasis')->insert([
            'logo' => 'assets/images/use-asosiasi/sisko_patuh.png',
            'nama' => 'sisko_patuh',
            'is_tampil' => 'ya',
        ]);


    }
}
