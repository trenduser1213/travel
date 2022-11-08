<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraMarketing;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Produk;
use App\Models\DataJamaah;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class mitraDashboardController extends Controller
{   
    public function __construct()
    {
        
    }
        
    public function index(){
        $id_mitra = MitraMarketing::where('username', Auth::user()->username)->first()->id;
        // $id_mitras = DB::table('Users')->where('id','=',$id)->select('username')->get();
        // dd(Auth::user());
        // foreach($id_mitras as $id_mitra){
        // echo $id_mitra;
        // }
        $jamaah = DB::table('data_jamaahs')
        ->join('provinces', 'data_jamaahs.provinsi', '=', 'provinces.id')
        ->join('regencies', 'data_jamaahs.kabupaten', '=', 'regencies.id')
        ->join('mitra_marketings', 'data_jamaahs.mitra_marketing', '=', 'mitra_marketings.id')
        ->where('mitra_marketing', '=', $id_mitra)
        ->select('data_jamaahs.*', 'provinces.name as nama_provinsi', 'regencies.name as nama_kabupaten', 'mitra_marketings.nama as nama_mitra')
        ->get();
        // dd($jamaah);

        $Peminat = DB::table('peminats')
        ->join('mitra_marketings', 'peminats.mitra_marketing', '=', 'mitra_marketings.id')
        ->where('mitra_marketing', '=', $id_mitra)
        ->select('peminats.*', 'mitra_marketings.nama as nama_mitra')
        ->get();

        $username = Auth::user()->username;

        $data = [
        'Jamaah' => $jamaah,
        'Peminat' => $Peminat,
        'mitra' => MitraMarketing::where('id', $id_mitra)->first(),
        'username' => $username,
        ];

// ;       return dd(Auth::user());
        return view('mitra.dashboard.index', $data);
}

public function create(){


    $data = [
        "provinsi" => Province::all(),
        "kabupaten" => Regency::all(),
        "produk" => Produk::all(),
        'Mitra' => MitraMarketing::all(),
        // 'mitra' => MitraMarketing::where('username', $username_mitra)->first(),
    ];
    return view('mitra.Jamaah.add', $data);
}

public function store(Request $request)
{

    $id_mitra = MitraMarketing::where('username', Auth::user()->username)->first()->id;
// dd($id_mitra);
    //validasi inputan
    $this->validate($request,[
        'nama' => 'required',
        'jeniskelamin' => 'required',
        'HP'=> 'required',
        'email' => 'required',
        'NIK'=> 'required',
        'no_paspor'=> 'required',
        'foto_KTP' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'foto_vaksin' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'provinsi'=> 'required',
        'kabupaten'=> 'required',
        'alamat'=> 'required',
        'produk'=> 'required',
        'pembiayaan'=> 'required',
        'setoran_awal'=> 'required',
        // 'Mitra'=> 'required',
        // 'kecamatan'=> 'required',
        // 'is_tampil_di_beranda'=> 'required',
        // 'is_tampil_di_halaman_DataJamaah' =>'required',
        // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
    ]);
    // dd($request->date)
    $image = $request->file('foto_KTP');
    $destinationPath = 'assets/images/DataJamaah/foto_KTP';
    $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
    $namePath_foto_KTP=$image->move($destinationPath, $profileImage);

    $image = $request->file('foto_vaksin');
    $destinationPath = 'assets/images/DataJamaah/foto_vaksin';
    $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
    $namePath_foto_vaksin=$image->move($destinationPath, $profileImage);

    $input = new DataJamaah();
    $input->nama = $request->nama;
    $input->jeniskelamin = $request->jeniskelamin ;
    $input->HP= $request->HP ;
    $input->email = $request->email ;
    $input->NIK= $request->NIK ; 
    $input->no_paspor= $request->no_paspor ;
    $input->foto_KTP = $namePath_foto_KTP ;
    $input->foto_vaksin = $namePath_foto_vaksin ;
    $input->provinsi = $request->provinsi ;
    $input->kabupaten= $request->kabupaten ;
    $input->alamat= $request->alamat ;
    $input->slug_produk= $request->produk ;
    $input->pembiayaan= $request->pembiayaan ;
    $input->setoran_awal = $request->setoran_awal ;
    $input->mitra_marketing = $id_mitra ;
    $input->save();


    Alert::success('Success', 'Sukses Menambahkan');
    return redirect()->route('mitraDashboard.index');
    

}
}