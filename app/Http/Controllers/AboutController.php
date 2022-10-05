<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\IdentitasPerusahaan;
use App\Models\MitraMarketing;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->About = new About();
    }

    public function index(MitraMarketing $mitra)
    {
        $data = [
            'about' => About::where('id',1)->first(),
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
