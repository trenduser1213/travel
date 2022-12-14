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
use RealRashid\SweetAlert\Facades\Alert;


class ProdukController extends Controller
{
    public function __construct()
    {
        $this-> Produk = new Produk();
    }
    public function index(MitraMarketing $mitra){

        $data = [
            'produk' => Produk::where('is_tampil_di_halaman_produk', 'ya')->get(),
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
        
        $image = $request->file('foto_KTP');
        $destinationPath = 'assets/images/jamaah/'.$request->nama;;
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);

        $image2 = $request->file('foto_vaksin');
        $destinationPath2 = 'assets/images/jamaah/'.$request->nama;;
        $profileImage2 = date('YmdHis') . uniqid()."." . $image2->getClientOriginalExtension();
        $namePath2=$image2->move($destinationPath2, $profileImage2);
        
        $data =[
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'HP' => $request->HP,
            'email' => $request->email,
            'NIK' => Request()->NIK,
            'no_paspor' => Request()->no_paspor,
            'foto_KTP' => $namePath,
            'foto_vaksin' => $namePath2,
            'provinsi' => Request()->provinsi,
            'kabupaten' => Request()->kabupaten,
            'kecamatan' => Request()->kecamatan,
            'alamat' => Request()->alamat,
            'slug_produk' => $produk ->slug,
            'pembiayaan' => Request()->pembiayaan,
            'setoran_awal' => Request()->setoran_awal,
            'status' => 'diterima',
            'mitra_marketing' => $mitra->id,
        ];

        // return dd($data);

        $this->Produk->addDataPendaftaranJamaah($data);
        Alert::success('Success', 'Data anda telah di simpan!');
        return redirect()->back()->with('success', 'Pendaftaran anda berhasil!');
    }
}
