<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakJamaahController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DataJamaah;
use App\Http\Controllers\beranda;
use App\Http\Controllers\KategoriArtikelController;
use App\Http\Controllers\SyaratKetentuansController;
use App\Models\CategoryPost;
use App\Models\KontakJamaah;
use App\Models\Post;
use App\Models\Produk;
use App\Models\MitraMarketing;
use App\Models\kategoriArtikel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Beranda::class, 'index']);

Route::get('/{mitra:username}/beranda', [Beranda::class, 'index']);


Route::get('/{mitra:username}/about', [AboutController::class, 'index']);

// Route::get('/admin/about-edit', [AboutController::class, 'edit']);   

// Route::get('/about-edit', [AboutController::class, 'edit']);

Route::get('/{mitra:username}/syarat-dan-ketentuan', [SyaratController::class, 'index']);

Route::get('/{mitra:username}/produk', [ProdukController::class, 'index']);

Route::get('/{mitra:username}/galeri', [GaleriController::class, 'index']);

Route::get('/{mitra:username}/artikel', [PostController::class, 'index']);

Route::get('/artikel/{post}/{mitra}', [PostController::class, 'show'])->name('tes.nama');

Route::get('/kategori/{category:slug}', function(CategoryPost $category){
    return view('artikel-per-kategori', [
        'title' => $category->nama,
        'posts' => $category->posts,
        'posts2' => Post::all(),
        'category' => CategoryPost::all(),
    ]);
});

Route::resource('/kontak_jamaah', KontakJamaahController::class);

Route::get('/{mitra:username}/daftar/{produk:slug}', [ProdukController::class, 'toRegister']);
Route::post('/{mitra:username}/daftar/{produk:slug}/store', [ProdukController::class, 'storeDataJamaah']);

Route::post('/getkabupaten', [DataJamaah::class, 'getkabupaten'])->name('getkabupaten');
Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
Route::get('cities', 'DependentDropdownController@cities')->name('cities');
Route::get('districts', 'DependentDropdownController@districts')->name('districts');
Route::get('villages', 'DependentDropdownController@villages')->name('villages');



//Routing Admin
Route::get('admin', [AdminDashboard::class, 'index']);
//Routing admin Artikel
Route::resource('/CategoryPost',KategoriArtikelController::class);

//Routing admin Syarat & Ketentuan
Route::resource('/adminKetentuan',SyaratKetentuansController::class);
