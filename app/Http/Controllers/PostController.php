<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\CategoryPost;
use App\Models\IdentitasPerusahaan;
use App\Models\MitraMarketing;

class PostController extends Controller
{

    public function __construct()
    {
        $this->Post = new Post();
        $this->CategoryPost = new CategoryPost();
    }

    public function index(MitraMarketing $mitra){
        $post = Post::where('is_tampil_di_halaman_artikel', 'ya')->orderBy('published_at', 'desc')->get();
        // dd($post);

        if(request('search')){
            $post->where('judul', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%')
            ->orWhere('excerpt', 'like', '%' . request('search') . '%');
        } 
        
        $result = $post;

        return view('artikel', [
            "title" => "Semua Artikel",
            "active" => 'artikel',
            "kategori" => CategoryPost::all(),
            "artikel" => $result,
            "artikel_terbaru" => $result,
            "identitas" => IdentitasPerusahaan::first(),
            "mitra" => $mitra,
        ]);
    }

    public function show($slug_post, $username_mitra){
        $post = Post::where('slug', $slug_post)->first();
        $mitra = MitraMarketing::where('username', $username_mitra)->first();

        $allpost = Post::where('is_tampil_di_halaman_artikel', 'ya')->latest();
        $result = $allpost->get();
        // dd($post);
        return view('artikel_single',[
            "title" => "Single Post",
            "post"  => $post,
            "kategori" => CategoryPost::all(),
            "category" => CategoryPost::class,
            "identitas" => IdentitasPerusahaan::first(),
            "artikel" => $result,
            "mitra" => $mitra,
        ]);   
    }

    public function indexWithKategori(MitraMarketing $mitra, $idCategory){
        $post = Post::where('category_post_id', '=', $idCategory)->where('is_tampil_di_halaman_artikel', '=', 'ya')->get();

        // dd($post);
        if(request('search')){
            $post->where('judul', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%')
            ->orWhere('excerpt', 'like', '%' . request('search') . '%');
        } 
        
        $result = $post;

        return view('artikel', [
            "title" => "Semua Artikel",
            "active" => 'artikel',
            "kategori" => CategoryPost::all(),
            "nama_kategori" => CategoryPost::find($idCategory)->nama,
            "artikel" => $result,
            "artikel_terbaru" => $result,
            "identitas" => IdentitasPerusahaan::first(),
            "mitra" => $mitra,
        ]);


    }
}
