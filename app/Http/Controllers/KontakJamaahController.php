<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontakJamaah;

class KontakJamaahController extends Controller
{
    public function store(Request $request){
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

        $jamaah = new KontakJamaah;
        $jamaah->nama = $request->nama;
        $jamaah->nomor_hp = $request->nomor_hp;
        $jamaah->email = $request->email;

        $jamaah->save();

        return redirect('/produk')->with('success', 'Kontak anda telah tersimpan!');
    }
}
