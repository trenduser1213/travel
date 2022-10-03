<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraMarketing;
use App\Models\IdentitasPerusahaan;

class beranda extends Controller
{
    public function index($username_mitra){
        $mitra = MitraMarketing::where('username', $username_mitra)->first();

        $data = [
            'identitas' => IdentitasPerusahaan::first(),
            'mitra' => $mitra,
        ];

        return view('beranda', $data);
    }
}
