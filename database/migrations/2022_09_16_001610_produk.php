<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('gambar');
            $table->string('harga');
            $table->string('tgl_berangkat');
            $table->string('durasi');
            $table->string('total_seat');
            $table->string('berangkat_dari');
            $table->string('hotel');
            $table->string('maskapai');
            $table->timestamps();
            $table->string('kategori_paket');
            $table->string('is_tampil_di_beranda');
            $table->string('is_tampil_di_halaman_produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
