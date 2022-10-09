<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class syaratKetentuans extends Model
{
    use HasFactory;

    // public function viewData(){
    //     return DB::table('syarat_dan_ketentuan')->first();
    // }
    protected $table = 'syarat_dan_ketentuan';
    protected $primaryKey = 'id';
    protected $guarded = [];
    // protected $fillable = ['judul','subjudul','judul1','gambar1','isi1','judul2','gambar2','isi2','judul3','gambar3','isi3'];
}
