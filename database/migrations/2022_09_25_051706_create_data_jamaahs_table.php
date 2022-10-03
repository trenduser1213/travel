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
        Schema::create('data_jamaahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->string('HP');
            $table->string('email')->nullable();
            $table->string('NIK');
            $table->string('no_paspor')->nullable();
            $table->string('foto_KTP');
            $table->string('foto_vaksin');
            $table->string('provinsi');
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('alamat');
            $table->string('slug_produk');
            $table->string('pembiayaan');
            $table->string('setoran_awal');
            $table->string('mitra_marketing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_jamaahs');
    }
};
