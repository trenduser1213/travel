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
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7789928603006!2d112.74673651487565!3d-7.265973673408765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9e1b0c6985f%3A0xf5f2248793d3a63d!2sPT.%20Safari%20Global%20Perkasa!5e0!3m2!1sid!2sid!4v1595151888643!5m2!1sid!2sid',
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
