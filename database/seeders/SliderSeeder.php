<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'gambar' => 'assets/images/slider/slide1.jpeg',
            'teks1' => '“Mengerjakan haji adalah kewajiban manusia terhadap Allah, yaitu (bagi) orang yang sanggup mengadakan perjalanan ke Baitullah, Barangsiapa mengingkari (kewajiban haji), maka sesungguhnya Allah Maha Kaya (tidak memerlukan sesuatu) dari semesta alam”',
            'teks2' => '~ QS. Ali Imran: 97 ~',
            'is_tampil' => 'ya',
        ],
    );

        DB::table('sliders')->insert([
            'gambar' => 'assets/images/slider/slide2.jpg',
            'teks1' => 'Rasulullah SAW bersabda : “Naungan bagi seorang mukmin pada hari kiamat adalah shodaqohnya.”',
            'teks2' => '~ HR. Ahmad ~',
            'is_tampil' => 'ya',
        ],
    );

        DB::table('sliders')->insert([
            'gambar' => 'assets/images/slider/slide3.jpg',
            'teks1' => '“Umrah satu ke Umrah lainnya adalah penebus dosa antara keduanya, dan haji yang mabrur tidak ada pahala baginya selain surga.”',
            'teks2' => '~ HR. Ahmad ~',
            'is_tampil' => 'ya',
        ],
);
    }
}
