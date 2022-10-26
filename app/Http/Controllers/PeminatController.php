<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminat;
use App\Models\MitraMarketing;
use RealRashid\SweetAlert\Facades\Alert;

class PeminatController extends Controller
{
    public function store(Request $request, MitraMarketing $mitraMarketing ){
        Request()->validate([
            'nama' => 'required',
            'nomor_hp' => 'required|min:10|numeric',
            'email' => 'email|'
        ], [
            'nama.required' => 'Silahkan masukkan nama anda',
            'nomor_HP.required' => 'Silahkan masukkan nomor HP/WA anda',
            'nomor_HP.min:10' => 'Masukkan minimal 10 angka', 
            'email.email' => 'Masukkan email yang valid',
        ]);

        $jamaah = new Peminat;
        $jamaah->nama = $request->nama;
        $jamaah->nomor_hp = $request->hp;
        $jamaah->mitra_marketing = $mitraMarketing;
        $jamaah->email = $request->email;

        dd($jamaah);
        $jamaah->save();


        // Alert::success('Success', 'Data anda telah di simpan!');
        // return redirect('/produk')->with('success', 'Kontak anda telah tersimpan!');
    }
}
