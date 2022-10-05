<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraMarketing;
use App\Models\IdentitasPerusahaan;
use App\Models\Slider;
use App\Models\About;
use App\Models\MengapaKami;
use App\Models\Asosiasi;
use App\Models\FAQ;

class beranda extends Controller
{
    public function index($username_mitra){
        $mitra = MitraMarketing::where('username', $username_mitra)->first();
        $slider = Slider::where('is_tampil', 'ya')->get();
        $about = About::where('id', 1)->first();
        $mengapa_kami = MengapaKami::where('is_tampil', 'ya')->get();
        $asosiasi = Asosiasi::where('is_tampil', 'ya')->get();
        $faq = FAQ::where('is_tampil', 'ya')->get();

        $data = [
            'identitas' => IdentitasPerusahaan::first(),
            'slider'=> $slider,
            'mitra' => $mitra,
            'about' => $about,
            'why_us' => $mengapa_kami,
            'asosiasi' => $asosiasi,
            'faq' => $faq,
        ];
        // dd($data);
        return view('beranda', $data);
    }
}
