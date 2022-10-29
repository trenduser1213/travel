<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminPeminatController extends Controller
{
    public function index()
    {   
        // $jamaah = DataJamaah::all() ;
        $Peminat =DB::table('peminats')
        ->join('mitra_marketings', 'peminats.mitra_marketing', '=', 'mitra_marketings.username')
        ->select('peminats.*', 'mitra_marketings.nama as nama_mitra')
        ->get();

        $data = [
            'Peminat' => $Peminat,
        ];
        // dd($data);
        return view('admin.Peminat.index', $data);
}
}