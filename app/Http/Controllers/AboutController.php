<?php

namespace App\Http\Controllers;
use App\Models\AboutModel;
use App\Models\IdentitasPerusahaan;
use App\Models\MitraMarketing;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->AboutModel = new AboutModel();
    }

    public function index(MitraMarketing $mitra)
    {
        $data = [
            'about' => $this->AboutModel->viewData(),
            'identitas' => IdentitasPerusahaan::first(),
            'mitra' => $mitra,
        ];

        // dd($data);
        return view('about', $data);
    }

    public function edit()
    {
        return view('about_edit');
    }
    
}
