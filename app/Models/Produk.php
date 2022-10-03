<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function allData(){
        return DB::table('produks')->get();
    }

    public function addDataPendaftaranJamaah($data){
        DB::table('data_jamaahs')->insert($data);
    }

    public function thisProduk($slug){
        return DB::table('produks')->where('slug', $slug)->get();
    }
}
