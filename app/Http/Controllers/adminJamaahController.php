<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataJamaah;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Produk;
use App\Models\MitraMarketing;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class adminJamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        // $jamaah = DataJamaah::all() ;
        $jamaah = DB::table('data_jamaahs')
        ->join('provinces', 'data_jamaahs.provinsi', '=', 'provinces.id')
        ->join('regencies', 'data_jamaahs.kabupaten', '=', 'regencies.id')
        ->join('mitra_marketings', 'data_jamaahs.mitra_marketing', '=', 'mitra_marketings.id')
        ->select('data_jamaahs.*', 'provinces.name as nama_provinsi', 'regencies.name as nama_kabupaten', 'mitra_marketings.nama as nama_mitra')
        ->get();
        // dd($jamaah);
        $data = [
            'Jamaah' => $jamaah,
            // 'Provinsi' => Province::all(),
        ];

    // dd($data);
        return view('admin.Jamaah.index', $data);
    }

    public function create(){


        $data = [
            "provinsi" => Province::all(),
            "kabupaten" => Regency::all(),
            "produk" => Produk::all(),
            'Mitra' => MitraMarketing::all(),
        ];
        return view('admin.Jamaah.add', $data);
    }

    public function edit($id){

        $data = [
            'Jamaah' => DataJamaah::where('id', $id)->first(),
            "provinsi" => Province::all(),
            "kabupaten" => Regency::all(),
            "produk" => Produk::all(),
            'Mitra' => MitraMarketing::all(),
        ];
        // dd($data);
        return view('admin.Jamaah.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $input = DataJamaah::find($id);
        if (isset($request->nama)) {
            $input->nama = $request->nama;
        }
        if (isset($request->jeniskelamin)) {
            $input->jeniskelamin = $request->jeniskelamin ;
        }
        if (isset($request->HP)) {
            $input->HP= $request->HP ;
        }
        if (isset($request->email)) {
            $input->email = $request->email ;
        }
        if (isset($request->NIK)) {
            $input->NIK= $request->NIK ;
        }
        if (isset($request->no_paspor)) {
            $input->no_paspor= $request->no_paspor ;
        }
        if (isset($request->provinsi)) {
            $input->provinsi = $request->provinsi ;
        }
        if (isset($request->kabupaten)) {
            $input->kabupaten= $request->kabupaten ;
        }
        if (isset($request->alamat)) {
            $input->alamat= $request->alamat ;
        }
        if (isset($request->produk)) {
            $input->slug_produk= $request->produk ;
        }
        if (isset($request->pembiayaan)) {
            $input->pembiayaan= $request->pembiayaan ;
        }
        if (isset( $request->setoran_awal)) {
            $input->setoran_awal = $request->setoran_awal ;
        }
        if (isset( $request->Mitra)) {
            $input->mitra_marketing = $request->Mitra ;
        }
        if (isset( $request->status)) {
            $input->status = $request->status ;
        }
        if ($request->file('foto_KTP')) {
            $image = $request->file('foto_KTP');
            $destinationPath = 'assets/images/DataJamaah/foto_KTP';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath_foto_KTP=$image->move($destinationPath, $profileImage);
            $input->foto_KTP = $namePath_foto_KTP ;
        }
        if ($request->file('gambar')) {
            $image = $request->file('foto_vaksin');
            $destinationPath = 'assets/images/DataJamaah/foto_vaksin';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath_foto_vaksin=$image->move($destinationPath, $profileImage);
            $input->foto_vaksin = $namePath_foto_vaksin ;
        }
        $input->update();
        // dd($input);
        Alert::success('Success', 'Sukses edit');
        return redirect()->route('adminJamaah.index');
    }

    public function store(Request $request){

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
            'Mitra'=> 'required',
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
        $input->mitra_marketing = $request->Mitra ;
        $input->save();

        
        Alert::success('Success', 'Sukses Menambahkan');
        return redirect()->route('adminJamaah.index');
        // ->with('success','Product created successfully.');
    }
     // $request->gambar1 = $namePath;

        // DataJamaah::create([
        //     'nama' => $request->nama ,
        //     'slug' => $request->slug ,
        //     'harga'=> $request->harga ,
        //     'date' => $request->date ,
        //     'durasi'=> $request->durasi , 
        //     'total_seat'=> $request->total_seat ,
        //     'berangkat_dari' => $request->berangkat_dari ,
        //     'hotel'=> $request->hotel ,
        //     'maskapai'=> $request->maskapai ,
        //     'kategori_paket'=> $request->kategori ,
        //     'is_tampil_di_beranda'=> $request->is_tampil_di_beranda ,
        //     'is_tampil_di_halaman_DataJamaah' => $request->is_tampil_di_halaman_DataJamaah ,
        //     'gambar' => $namePath  
        // ]);
    
    public function destroy($id)
    {
        $DataJamaah = DataJamaah::find($id);
        $DataJamaah->delete();
        // Alert::success('Success', 'Sukses Menghapus Data ');
        return redirect()->route('adminJamaah.index');
    }
}