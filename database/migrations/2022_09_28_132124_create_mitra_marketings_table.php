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
        Schema::create('mitra_marketings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('nama');
            $table->string('hp');
            $table->string('wa');
            $table->string('alamat');
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('foto')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('mitra_marketings');
    }
};
