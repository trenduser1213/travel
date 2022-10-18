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

    public function allDataFoto(){
        return DB::table('galeri')->where('kategori_galeri', 'foto')->get();
    }

    public function allDataVideo(){
        return DB::table('galeri')->where('kategori_galeri', 'video')->get();
    }

    public function dataFoto(){
        return DB::table('galeri')->where('kategori_galeri', 'foto')->where('is_tampil_di_galeri', 'ya')->get();
    }

    public function dataVideo(){
        return DB::table('galeri')->where('kategori_galeri', 'video')->where('is_tampil_di_galeri', 'ya')->get();
    }

    public function dataFotoBeranda(){
        return DB::table('galeri')->where('kategori_galeri', 'foto')->where('is_tampil_di_beranda', 'ya')->get();
    }

    public function dataVideoBeranda(){
        return DB::table('galeri')->where('kategori_galeri', 'video')->where('is_tampil_di_beranda', 'ya')->get();
    }

    public function thisFoto($id){
        return DB::table('galeri')->where('id', $id)->first();
    }

    public function thisVideo($id){
        return DB::table('galeri')->where('id', $id)->first();
    }
}
