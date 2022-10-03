<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GaleriModel extends Model
{
    use HasFactory;

    public function allData(){
        return DB::table('galeri')->get();
    }

    public function dataFoto(){
        return DB::table('galeri')->where('kategori_galeri', 'foto')->get();
    }

    public function dataVideo(){
        return DB::table('galeri')->where('kategori_galeri', 'video')->get();
    }
}
