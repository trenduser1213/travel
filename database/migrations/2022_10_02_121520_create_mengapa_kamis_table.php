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
        Schema::create('mengapa_kamis', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('is_tampil');
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
        Schema::dropIfExists('mengapa_kamis');
    }
};
