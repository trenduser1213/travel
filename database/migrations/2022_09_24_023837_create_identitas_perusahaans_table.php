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
        Schema::create('identitas_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_gedung_kantor');
            $table->string('alamat');
            $table->text('gmaps');
            $table->string('no_hp_1');
            $table->string('no_hp_2')->nullable();
            $table->string('no_telepon_1');
            $table->string('no_telepon_2')->nullable();
            $table->string('email');
            $table->string('nama_pada_rekening');
            $table->string('no_rekening_1');
            $table->string('no_rekening_2')->nullable();
            $table->string('no_rekening_3')->nullable();
            $table->string('no_rekening_4')->nullable();
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
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
        Schema::dropIfExists('identitas_perusahaans');
    }
};
