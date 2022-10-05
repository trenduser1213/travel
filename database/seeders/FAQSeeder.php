<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('f_a_q_s')->insert([
            'pertanyaan' => 'Mengapa memilih kami?',
            'jawaban' => 'Penyedia Layanan Umrah & Haji yang Amanah dan Profesional.',
            'is_tampil' => 'ya',
        ]);
    }
}
