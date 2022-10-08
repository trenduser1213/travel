<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SyaratModel extends Model
{
    use HasFactory;
    protected $table = 'syarat_dan_ketentuan';
    public function viewData(){
        return DB::table('syarat_dan_ketentuan')->first();
    }
}
