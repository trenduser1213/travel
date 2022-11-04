<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminat;
use App\Models\MitraMarketing;
use RealRashid\SweetAlert\Facades\Alert;

class PeminatController extends Controller
{
    public function store(Request $request,$mitraMarketing ){
        $mitra = MitraMarketing::where('username', $mitraMarketing)->first()->id;
        // dd($mitra);
        // dd($mitraMarketing);
        // $request->validate([
        //     'nama' => 'required',
        //     'nomor_hp' => 'required|min:10|numeric',
        //     'email' => 'email'
        // ], [
        //     'nama.required' => 'Silahkan masukkan nama anda',
        //     'nomor_HP.required' => 'Silahkan masukkan nomor HP/WA anda',
        //     'nomor_HP.min:10' => 'Masukkan minimal 10 angka', 
        //     'email.email' => 'Masukkan email yang valid',
        // ]);
        // dd($mitraMarketing);
        $peminat = new Peminat;
        $peminat->nama = $request->nama;
        $peminat->nomor_hp = $request->hp;
        $peminat->email = $request->email;
        $peminat->status = 'diterima';
        $peminat->mitra_marketing = $mitra; 
        $peminat->save();

        Alert::success('Success', 'Data anda telah di simpan!');
        return redirect()->back()->with('success', 'Kontak anda telah tersimpan!');
    }
}
