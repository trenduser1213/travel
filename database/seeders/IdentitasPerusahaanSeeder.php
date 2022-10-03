<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentitasPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('identitas_perusahaans')->insert([ 
            'nama' => 'PT. Safari Global Perkasa',
            'nama_gedung_kantor' => 'Trillium Office and Residence',
            'alamat' => 'Jl. Pemuda 108 - 116 Lt. 1 No. 07, Surabaya',
            'no_hp_1' => '081232324112',
            'no_telepon_1' => '+6231 51169000',
            'no_telepon_2' => '+6231 51168921',
            'email' => 'safariglobalperkasa.pt@gmail.com',
            'nama_pada_rekening' => 'PT. Safari Global Perkasa',
            'no_rekening_1' => 'BCA : 152 039 523 3 (IDR/RUPIAH)',
            'no_rekening_2' => 'MANDIRI :
            142 00 22 33 44 51 (IDR/RUPIAH)
            142 002 22 33 455 (USD/DOLLAR)
            ',
            'no_rekening_3' => 'BSM : 716 117 161 6',
            'facebook' => 'https://www.facebook.com/safari.umrahhaji.9',
            'instagram' => 'https://www.instagram.com/safariumrahhaji/?hl=id',
            'youtube' => 'https://www.youtube.com/channel/UCXBQZ6LwqpGEOBggGBFpLqg',
        ]);
    }
}
