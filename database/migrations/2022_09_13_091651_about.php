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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('subjudul');
            $table->text('link_video');
            $table->string('motto');
            $table->string('submotto');
            $table->text('teks_sejajar_video');
            $table->text('teks_di_bawah_video');
            $table->text('teks_di_beranda');
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
        //
    }
};
