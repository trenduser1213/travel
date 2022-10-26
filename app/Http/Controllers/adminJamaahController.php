<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataJamaah;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Produk;
use App\Models\MitraMarketing;
use Illuminate\Support\Facades\DB;

class adminJamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   $jamaah = DB::table('data_jamaahs')
        ->join('provinces', 'data_jamaahs.provinsi', '=', 'provinces.id')
        ->join('regencies', 'data_jamaahs.kabupaten', '=', 'regencies.id')
        ->join('mitra_marketings', 'data_jamaahs.mitra_marketing', '=', 'mitra_marketings.username')
        ->select('data_jamaahs.*', 'provinces.name as nama_provinsi', 'regencies.name as nama_kabupaten', 'mitra_marketings.nama as nama_mitra')
        ->get();
        
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
        if (isset($request->slug)) {
            $input->slug = $request->slug ;
        }
        if (isset($request->harga)) {
            $input->harga= $request->harga ;
        }
        if (isset($request->tgl_berangkat)) {
            $input->tgl_berangkat = $request->tgl_berangkat ;
        }
        if (isset($request->durasi)) {
            $input->durasi= $request->durasi ;
        }
        if (isset($request->total_seat)) {
            $input->total_seat= $request->total_seat ;
        }
        if (isset($request->berangkat_dari)) {
            $input->berangkat_dari = $request->berangkat_dari ;
        }
        if (isset($request->hotel)) {
            $input->hotel= $request->hotel ;
        }
        if (isset($request->maskapai)) {
            $input->maskapai= $request->maskapai ;
        }
        if (isset($request->kategori_paket)) {
            $input->kategori_paket= $request->kategori_paket ;
        }
        if (isset($request->is_tampil_di_beranda)) {
            $input->is_tampil_di_beranda= $request->is_tampil_di_beranda ;
        }
        if (isset($request->is_tampil_di_halaman_DataJamaah)) {
            $input->is_tampil_di_halaman_DataJamaah = $request->is_tampil_di_halaman_DataJamaah ;
        }
        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'assets/images/DataJamaah';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->gambar = $namePath ;
        }
        $input->update();
        // dd($input);
        return redirect()->route('adminDataJamaah.index');
        
    }

    public function store(Request $request){

        //validasi inputan
        $this->validate($request,[
            'nama' => 'required',
            'slug' => 'required|unique:posts',
            'harga'=> 'required',
            'tgl_berangkat' => 'required',
            'durasi'=> 'required',
            'total_seat'=> 'required',
            'berangkat_dari' => 'required',
            'hotel'=> 'required',
            'maskapai'=> 'required',
            'kategori_paket'=> 'required',
            'is_tampil_di_beranda'=> 'required',
            'is_tampil_di_halaman_DataJamaah' =>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);
        // dd($request->date)
        $image = $request->file('gambar');
        $destinationPath = 'assets/images/DataJamaah';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);
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
        $input = new DataJamaah();
        $input->nama = $request->nama;
        $input->slug = $request->slug ;
        $input->harga= $request->harga ;
        $input->tgl_berangkat = $request->tgl_berangkat ;
        $input->durasi= $request->durasi ; 
        $input->total_seat= $request->total_seat ;
        $input->berangkat_dari = $request->berangkat_dari ;
        $input->hotel= $request->hotel ;
        $input->maskapai= $request->maskapai ;
        $input->kategori_paket= $request->kategori_paket ;
        $input->is_tampil_di_beranda= $request->is_tampil_di_beranda ;
        $input->is_tampil_di_halaman_DataJamaah = $request->is_tampil_di_halaman_DataJamaah ;
        $input->gambar = $namePath ;
        $input->save();

        return redirect()->route('adminDataJamaah.index');
        // ->with('success','Product created successfully.');
    }
    
    public function destroy($id)
    {
        $DataJamaah = DataJamaah::find($id);
        $DataJamaah->delete();

        return redirect()->route('adminDataJamaah.index');
    }
}