<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { DB::table('syarat_dan_ketentuan')->insert([
        'judul' => 'Syarat dan Ketentuan',
        'subjudul' => 'Langkah Pasti Menuju Baitullah',
        'gambar1' => 'assets/images/syarat-dan-ketentuan/img-7.jpg',
        'judul1' => 'Persyaratan Umrah dan Haji',
        'isi1' => '<p>Persyaratan yang harus di siapkan oleh calon jama ah antara lain adalah :</p>
                    <ul>
                        <li>Mengisi formulir pendaftaran</li>
                        <li>Paspor yang masih berlaku 7 bulan saat keberangkatan (nama minimal 2 suku kata)</li>
                        <li>Vaksin meningitis dan atau sesuai ketentuan yang berlaku</li>
                        <li>Surat mahram bagi perempuan <45 tahun, umrah sendiri tanpa suami/ saudara laki-laki/ bapak kandung </li>
                    </ul>',
        'gambar2' => 'assets/images/syarat-dan-ketentuan/img-7.jpg',
        'judul2' => 'Ketentuan Biaya',
        'isi2' => '<p>Untuk biaya yang sudah tercantum dalam website dan pamflet belum termasuk :</p>
                    <ul>
                        <li>Pengurusan paspor dan tambah nama.</li>
                        <li>Dokumen tambahan untuk perempuan <45 tahun umroh sendiri tanpa suami/saudara laki-laki/bapak kandung atau jamaah yang tidak lengkap dokumennya.</li>
                        <li>Pengeluaran pribadi : laundry, telepon hotel, kelebihan bagasi, dsb.</li>
                        <li>Vaksin meningitis dan atau biaya kesehatan lainnya</li>
                    </ul>',
        'gambar3' => 'assets/images/syarat-dan-ketentuan/img-7.jpg',
        'judul3' => 'Ketentuan Pembatalan',
        'isi3' => '<p>Apabila terjadi pembatalan maka ketentuan yang berlaku adalah :</p>
                    <ul>
                        <li>Pembatalan 45 hari sebelum keberangkatan atau setelah issued ticket dibebankan biaya 75% dari harga paket</li>
                        <li>Pembatalan 14 hari sebelum keberangkatan dibebankan biaya 100% dari harga paket</li>
                    </ul>'
        ],
    );
    }
}
