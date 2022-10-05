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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_post_id');
            $table->string('gambar');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('kategori');
            $table->string('written_by');
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at');
            $table->string('is_tampil_di_beranda');
            $table->string('is_tampil_di_halaman_artikel');
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
        Schema::dropIfExists('posts');
    }
};
