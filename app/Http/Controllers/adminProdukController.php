<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class adminProdukController extends Controller
{
    public function index(){
        $data = ['produk' => Produk::all(),];

        return view('admin.produk.index', $data);
    }

    public function create(){
        return view('admin.produk.add');
    }

    public function edit($id){

        $data = [
            'produk' => Produk::where('id', $id)->first()
        ];
        
        return view('admin.produk.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $input = produk::find($id);
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
        if (isset($request->is_tampil_di_halaman_produk)) {
            $input->is_tampil_di_halaman_produk = $request->is_tampil_di_halaman_produk ;
        }
        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'assets/images/produk';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->gambar = $namePath ;
        }
        $input->update();
        // dd($input);
        Alert::success('Success', 'Sukses mengedit produk!');
        return redirect()->route('adminProduk.index');
        
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
            'is_tampil_di_halaman_produk' =>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);
        // dd($request->date)
        $image = $request->file('gambar');
        $destinationPath = 'assets/images/produk';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);
        // $request->gambar1 = $namePath;

        $input = new produk();
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
        $input->is_tampil_di_halaman_produk = $request->is_tampil_di_halaman_produk ;
        $input->gambar = $namePath ;
        $input->save();

        Alert::success('Success', 'Sukses mengedit produk ');
        return redirect()->route('adminProduk.index');
    }
    
    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();
        Alert::success('Success', 'Sukses menghapus produk ');
        return redirect()->route('adminProduk.index');
    }
}
