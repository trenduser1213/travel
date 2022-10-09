<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriArtikel extends Model
{
    use HasFactory;

    protected $table = 'kategori_artikels';
    protected $primaryKey = 'id_kategori';
    protected $guarded = [];
}
