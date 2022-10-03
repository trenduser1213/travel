<?php

namespace App\Http\Controllers;
use App\Models\IdentitasPerusahaan;
use Illuminate\Http\Request;
use App\Models\GaleriModel;
use App\Models\MitraMarketing;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->GaleriModel = new GaleriModel();
    }
    public function index(MitraMarketing $mitra){

        $data = [
            'foto' => $this->GaleriModel->dataFoto(),
            'video' => $this->GaleriModel->dataVideo(),
            'identitas' => IdentitasPerusahaan::first(),
            'mitra' => $mitra,

        ];
        // dd($data);
        return view('galeri', $data);
    }
}
