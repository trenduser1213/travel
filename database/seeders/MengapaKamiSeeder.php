<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MengapaKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('mengapa_kamis')->insert([
            'icon' => 'fi flaticon-business-and-finance',
            'judul' => 'Insya Allah Berkah',
            'deskripsi' => 'InsyaAllah Umrah & Haji anda semakin berkah karena secara tidak langsung
            berinfaq kepada yatim piatu dan fakir miskin di Pondok Pesantren',
            'is_tampil' => 'ya',
        ],
        );

        DB::table('mengapa_kamis')->insert([
            'icon' => 'ti-medall',
            'judul' => 'Berizin Resmi',
            'deskripsi' => 'Kami telah memiliki izin resmi sebagai travel haji dan umrah dari
            Kementerian Agama Republik Indonesia',
            'is_tampil' => 'ya',
        ],
        );

        DB::table('mengapa_kamis')->insert([
            'icon' => 'ti-user',
            'judul' => 'Amanah dan Profesional',
            'deskripsi' => 'Kami memiliki pembimbing calon jamaah yang amanah serta profesional pada
            bidangnya.',
            'is_tampil' => 'ya',
        ],
        );

        DB::table('mengapa_kamis')->insert([
            'icon' => 'ti-thumb-up',
            'judul' => 'Komplit',
            'deskripsi' => 'Pembekalan tata cara ibadah yang komplit baik teori maupun praktek untuk
            memastikan jamaah umrah melaksanakan ibadah dengan sempurna',
            'is_tampil' => 'ya',
        ],
        );

        DB::table('mengapa_kamis')->insert([
            'icon' => 'ti-wallet',
            'judul' => 'Kepastian Harga',
            'deskripsi' => 'Kami memastikan tidak ada tambahan biaya lagi selain yang sudah tercantum
            di daftar harga brosur/pamflet.',
            'is_tampil' => 'ya',
        ],
        );

        DB::table('mengapa_kamis')->insert([
            'icon' => 'ti-heart',
            'judul' => 'Sepenuh Hati',
            'deskripsi' => 'Kami melayani dengan sepenuh hati, dengan motto : “ Melayani Tamu Allah
            adalah Pengabdian Kepada Allah”.',
            'is_tampil' => 'ya',
        ],
        );



    }
}
