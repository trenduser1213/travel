<?php

namespace App\Http\Controllers;
use App\Models\SyaratModel;
use App\Models\IdentitasPerusahaan;
use Illuminate\Http\Request;
use App\Models\MitraMarketing;



class SyaratController extends Controller
{
    public function __construct()
    {
        $this->SyaratModel = new SyaratModel();
    }
    public function index(MitraMarketing $mitra){
        $data = [
            'syarat' => $this->SyaratModel->viewData(),
            'identitas' => IdentitasPerusahaan::first(),
            'mitra' => $mitra,
        ];

        // dd($data);
        return view('syarat-dan-ketentuan', $data);
    }
}
