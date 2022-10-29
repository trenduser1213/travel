<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJamaah extends Model
{
    use HasFactory;

    protected $table = 'data_jamaahs';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function regency(){
        return $this->belongsTo(Regency::class);
    }
}
