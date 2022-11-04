<?php

namespace App\Http\Controllers;
use App\Models\DataJamaah;
use App\Models\Peminat;
use App\Models\MitraMarketing;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function index(){
        $Mitra = MitraMarketing::all();
        $Jamaah = DataJamaah::all();

        $data = [
            'newJamaah' => DataJamaah::where('status', '=', 'diterima')->count(),
            'newPeminat' => Peminat::where('status', '=', 'diterima')->count(),
            'allJamaah' => DataJamaah::where('status', '!=', 'diterima')->count(),
            'allPeminat' => Peminat::where('status', '!=', 'diterima')->count(),
        ];

        // dd($data);
        return view('admin.dashboard.index', $data);
    }
}
