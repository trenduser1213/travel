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
use App\Models\GaleriModel;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Testimoni;

class beranda extends Controller
{
    public function __construct()
    {
        $this->GaleriModel = new GaleriModel();
    }

    public function index($username_mitra){
        $mitra = MitraMarketing::where('username', $username_mitra)->first();
        $slider = Slider::where('is_tampil', 'ya')->get();
        $about = About::where('id', 1)->first();
        $mengapa_kami = MengapaKami::where('is_tampil', 'ya')->get();
        $asosiasi = Asosiasi::where('is_tampil', 'ya')->get();
        $faq = FAQ::where('is_tampil', 'ya')->get();
        $produk = Produk::where('is_tampil_di_beranda', 'ya')->get();
        $artikel = Post::where('is_tampil_di_beranda', 'ya')->get();
        $testimoni = Testimoni::where('is_tampil', 'ya')->get();
        $foto = $this->GaleriModel->dataFotoBeranda();
        $video = $this->GaleriModel->dataVideoBeranda();


        $data = [
            'identitas' => IdentitasPerusahaan::first(),
            'slider'=> $slider,
            'mitra' => $mitra,
            'about' => $about,
            'why_us' => $mengapa_kami,
            'asosiasi' => $asosiasi,
            'faq' => $faq,
            'produk' => $produk,
            'artikel' => $artikel,
            'testimoni' => $testimoni,
            'foto' =>$foto,
            'video' => $video,
        ];
        // dd($data);
        return view('beranda', $data);
    }
}
