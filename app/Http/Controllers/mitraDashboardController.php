<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraMarketing;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Produk;

class mitraDashboardController extends Controller
{   
    public function __construct()
    {
        
    }
        
    public function index($username_mitra){
        $jamaah = DB::table('data_jamaahs')
        ->join('provinces', 'data_jamaahs.provinsi', '=', 'provinces.id')
        ->join('regencies', 'data_jamaahs.kabupaten', '=', 'regencies.id')
        ->join('mitra_marketings', 'data_jamaahs.mitra_marketing', '=', 'mitra_marketings.username')
        ->where('mitra_marketing', '=', $username_mitra)
        ->select('data_jamaahs.*', 'provinces.name as nama_provinsi', 'regencies.name as nama_kabupaten', 'mitra_marketings.nama as nama_mitra')
        ->get();
        // dd($jamaah);

        $Peminat = DB::table('peminats')
        ->join('mitra_marketings', 'peminats.mitra_marketing', '=', 'mitra_marketings.username')
        ->where('mitra_marketing', '=', $username_mitra)
        ->select('peminats.*', 'mitra_marketings.nama as nama_mitra')
        ->get();

        $data = [
        'Jamaah' => $jamaah,
        'Peminat' => $Peminat,
        'mitra' => MitraMarketing::where('username', $username_mitra)->first(),
        ];

        // dd($data);
        return view('mitra.dashboard.index', $data);
}

public function create($username_mitra){


    $data = [
        "provinsi" => Province::all(),
        "kabupaten" => Regency::all(),
        "produk" => Produk::all(),
        'Mitra' => MitraMarketing::all(),
        'mitra' => MitraMarketing::where('username', $username_mitra)->first(),
    ];
    return view('mitra.Jamaah.add', $data);
}

public function store(){

}


}