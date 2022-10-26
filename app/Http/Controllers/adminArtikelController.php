<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\CategoryPost;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class adminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'Artikel' => Post::all(),
            'kategori' => CategoryPost::all(),
        ];
        return view('admin.artikel.artikel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'kategori' => CategoryPost::all()
        ];

        return view('admin.artikel.artikel.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek =$request->validate([
            'judul' => 'required',
            'written_by' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'kategori' => 'required',
            'descSummernote' => 'required',
            'is_tampil_di_beranda'=> 'required',
            'is_tampil_di_halaman_artikel' =>'required',
        ]);

        $image = $request->file('gambar');
        $destinationPath = 'assets/images/artikel';
        $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
        $namePath=$image->move($destinationPath, $profileImage);

        $input = new Post();
        $input->judul = $request->judul;
        $input->written_by = $request->written_by;
        $input->body = $request->descSummernote;
        $input->excerpt = Str::limit(strip_tags($request->descSummernote),100);
        $input->slug = Str::slug($request->judul, '-');
        $input->category_post_id = $request->kategori ;
        $input->is_tampil_di_beranda= $request->is_tampil_di_beranda ;
        $input->is_tampil_di_halaman_artikel = $request->is_tampil_di_halaman_artikel ;
        $input->gambar = $namePath ;
        $input->save();
        // $cek['descSummernote'] = Str::limit(strip_tags($request->descSummernote),300);
        // Post::create($cek);
        Alert::success('Success', 'Sukses menambahkan artikel ');
        return redirect()->route('adminArtikel.index');

    }
    
    //'slug' => menggunakan slugable, referensi : https://www.wahyunanangwidodo.com/2021/06/cara-membuat-slug-di-laravel.html
    //'excerpt'=> menggunaka excerpt otomatis mengambil teks dari body. gunakan Str::limit. referensi : menit : 10:56 https://www.youtube.com/watch?v=WLejN_riW_8&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=19
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $category_id = Post::find($id)->category_post_id;

        $data = [
        'Artikel' => Post::find($id),
        'kategori' => CategoryPost::find($category_id),
    ];
        return view('admin.artikel.artikel.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
        {   

            $data = [
            'Artikel' => Post::find($id),
            'kategori' => CategoryPost::all(),
        ];

    
        return view('admin.artikel.artikel.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Post::find($id);
        if(isset($request->judul)){
            $input->judul = $request->judul;
            $input->slug = Str::slug($request->judul, '-');
        }       
        if(isset($request->written_by)){
            $input->written_by = $request->written_by;
        }        
        if(isset($request->kategori)){
            $input->category_post_id = $request->kategori ;
        }        
        if(isset($request->descSummernote)){
            $input->body = $request->descSummernote;
            $input->excerpt = Str::limit(strip_tags($request->descSummernote),100);
        }          
        if(isset($request->is_tampil_di_beranda)){
            $input->is_tampil_di_beranda =$request->is_tampil_di_beranda;
        }        
        if(isset($request->is_tampil_di_halaman_artikel)){
            $input->is_tampil_di_halaman_artikel=$request->is_tampil_di_halaman_artikel;
        }
        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'assets/images/artikel';
            $profileImage = date('YmdHis') . uniqid()."." . $image->getClientOriginalExtension();
            $namePath=$image->move($destinationPath, $profileImage);
            $input->gambar = $namePath ;
        }
        $input->update();
        Alert::success('Success', 'Sukses edit Artikel ');
        return redirect()->route('adminArtikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input = Post::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses hapus Artikel');
        return redirect()->route('adminArtikel.index');
    }
}