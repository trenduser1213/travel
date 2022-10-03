<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Produk;
use App\Models\IdentitasPerusahaan;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\MitraMarketing;


class ProdukController extends Controller
{
    public function __construct()
    {
        $this-> Produk = new Produk();
    }
    public function index(MitraMarketing $mitra){

        $data = [
            'produk' => Produk::all(),
            'identitas' => IdentitasPerusahaan::first(),
            'mitra' => $mitra
        ];

        // dd($data);
        return view('produk', $data);
    }

    public function toRegister($username_mitra, $slug_produk){
        $produk = Produk::where('slug', $slug_produk)->first();        
        $mitra = MitraMarketing::where('username', $username_mitra)->first();
        $data = [
            "title" => "Pendaftaran Calon Jamaah | Safari Umrah Haji",
            "mitra" => $mitra,
            "provinsi" => Province::all(),
            "kabupaten" => Regency::all(),
            "kecamatan" => District::all(),
            "identitas" => IdentitasPerusahaan::first(),
            "produk" => $produk,
        ];

        return view('daftar',$data);
    }

    
    public function storeDataJamaah(Request $request, $username_mitra, $slug_produk){
        $produk = Produk::where('slug', $slug_produk)->first();        
        $mitra = MitraMarketing::where('username', $username_mitra)->first();

        $request -> validate([
            'HP' => 'min:10',
            'email' => 'email',
            'NIK' => 'min:16',
            'foto_KTP' => 'image|file|max:1024',
            'foto_vaksin' => 'image|file|max:1024',
        ], [
            'HP' => 'Masukkan nomor HP yang valid',
            'email' => 'Masukkan e-mail yang valid',
            'NIK' => 'Masukkan NIK yang valid. Min.16 angka',
            'foto_KTP' => 'Masukkan foto KTP dalam bentuk JPG/JPEG max. 1 MB',
            'foto_vaksin' => 'Masukkan foto vaksin dalam bentuk JPG/JPEGmax. 1 MB',
        ]);

        // return dd($validatedData);

        $data =[
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'HP' => $request->HP,
            'email' => $request->email,
            'NIK' => Request()->NIK,
            'no_paspor' => Request()->no_paspor,
            'foto_KTP' => Request()->foto_KTP,
            'foto_vaksin' => Request()->foto_vaksin,
            'provinsi' => Request()->provinsi,
            'kabupaten' => Request()->kabupaten,
            'kecamatan' => Request()->kecamatan,
            'alamat' => Request()->alamat,
            'slug_produk' => $produk ->slug,
            'pembiayaan' => Request()->pembiayaan,
            'setoran_awal' => Request()->setoran_awal,
            'mitra_marketing' => $mitra->username,
        ];

        // return dd($data);

        $this->Produk->addDataPendaftaranJamaah($data);
        return redirect('/beranda')->with('success', 'Pendaftaran anda berhasil!');
    }
}
