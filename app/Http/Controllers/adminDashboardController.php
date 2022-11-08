<?php

namespace App\Http\Controllers;
use App\Models\DataJamaah;
use App\Models\Peminat;
use App\Models\MitraMarketing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminDashboardController extends Controller
{
    public function index(){
        $Mitra = MitraMarketing::all();
        $Jamaah = DataJamaah::all();

        $topProvinsi = DB::table('data_jamaahs')
        ->join('provinces', 'data_jamaahs.provinsi', '=', 'provinces.id')
        ->select([DB::raw('count(*) as jumlah'), 
        DB::raw('data_jamaahs.provinsi as provinsi'), 'provinces.name as nama_provinsi'])
        ->groupBy('nama_provinsi')
        ->groupBy('provinsi')
        ->orderBy('jumlah', 'desc')->get();

        $topMitra = DB::table('data_jamaahs')
        ->join('mitra_marketings', 'data_jamaahs.mitra_marketing', '=', 'mitra_marketings.id')
        ->select([DB::raw('count(*) as jumlah'), 
        DB::raw('data_jamaahs.mitra_marketing as mitra'), 'mitra_marketings.nama as nama_mitra'])
        ->groupBy('nama_mitra')
        ->groupBy('mitra')
        ->orderBy('jumlah', 'desc')->get();


        

        // return dd($countProvinsi);

        $data = [
            'newJamaah' => DataJamaah::where('status', '=', 'diterima')->count(),
            'newPeminat' => Peminat::where('status', '=', 'diterima')->count(),
            'allJamaah' => DataJamaah::where('status', '!=', 'diterima')->count(),
            'allPeminat' => Peminat::where('status', '!=', 'diterima')->count(),
            'provinsi' => $topProvinsi,
            'mitra' => $topMitra,
        ];

        return view('admin.dashboard.index', $data, );
    }
}
