<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\adminGaleriController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakJamaahController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DataJamaah;
use App\Http\Controllers\beranda;
use App\Http\Controllers\IdentitasPerusahaanController;
use App\Http\Controllers\KategoriArtikelController;
use App\Http\Controllers\SyaratKetentuansController;
use App\Http\Controllers\adminProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\adminGaleriVideoController;
use App\Http\Controllers\adminGaleriFotoController;
use App\Http\Controllers\adminTestimoniController;
use App\Http\Controllers\adminAsosiasiController;
use App\Http\Controllers\adminFAQController;  
use App\Http\Controllers\adminSliderController;
use App\Http\Controllers\adminMengapaKamiController;

use App\Models\CategoryPost;
use App\Models\KontakJamaah;
use App\Models\Post;
use App\Models\Produk;
use App\Models\MitraMarketing;
use App\Models\kategoriArtikel;

use App\Http\Controllers\adminIdentitasPerusahaanController;
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

//Mengakses beranda 
Route::get('/{mitra:username}/beranda', [Beranda::class, 'index']);

//Mengakses halaman tentang kami
Route::get('/{mitra:username}/about', [AboutController::class, 'index']);

// Route::get('/admin/about-edit', [AboutController::class, 'edit']);   

// Route::get('/about-edit', [AboutController::class, 'edit']);

//mengakses halaman syarat dan ketentuan
Route::get('/{mitra:username}/syarat-dan-ketentuan', [SyaratController::class, 'index']);

//mengakses index produk
Route::get('/{mitra:username}/produk', [ProdukController::class, 'index']);

//mengakses halaman galeri
Route::get('/{mitra:username}/galeri', [GaleriController::class, 'index']);

//mengakses halaman artikel
Route::get('/{mitra:username}/artikel', [PostController::class, 'index']);

//mengakses sebuah artikel
Route::get('/artikel/{post}/{mitra}', [PostController::class, 'show'])->name('tes.nama');

//mengakses halaman yang menampilkan seluruh artikel dari sebuah kategori
Route::get('/kategori/{category:slug}', function(CategoryPost $category){
    return view('artikel-per-kategori', [
        'title' => $category->nama,
        'posts' => $category->posts,
        'posts2' => Post::all(),
        'category' => CategoryPost::all(),
    ]);
});

//menyimpan kontak calon jamaah
Route::resource('/kontak_jamaah', KontakJamaahController::class);

//mendaftar ke sebuah produk tertentu
Route::get('/{mitra:username}/daftar/{produk:slug}', [ProdukController::class, 'toRegister']);

//menyimpan data pendaftaran
Route::post('/{mitra:username}/daftar/{produk:slug}/store', [ProdukController::class, 'storeDataJamaah']);


Route::post('/getkabupaten', [DataJamaah::class, 'getkabupaten'])->name('getkabupaten');

//Routing Admin
Route::get('admin', [AdminDashboard::class, 'index']);
//Routing admin Artikel

// Auth::routes();
Route::get('/login', [LoginController::class,'show'])->name('show');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('/CategoryPost',KategoriArtikelController::class);
    
    //Routing admin Syarat & Ketentuan
    Route::resource('/adminKetentuan',SyaratKetentuansController::class);
    
    //Routing Admin Identitas Perusahaan 
    Route::resource('/adminIdentitasPerusahaan', adminIdentitasPerusahaanController::class);
    
    //Routing Admin Gallery
    Route::resource('/adminGaleri', adminGaleriController::class);
    
    //Routing Admin Gallery untuk Foto
    Route::resource('/adminGaleriFoto', adminGaleriFotoController::class);
    
    //Routing Admin Gallery untuk Video
    Route::resource('/adminGaleriVideo', adminGaleriVideoController::class);
    
    //Routing Admin Produk
    Route::resource('/adminProduk', adminProdukController::class);
    
    //Routing Admin Testimoni
    Route::resource('/adminTestimoni', adminTestimoniController::class);
    
    //Routing Admin Asosiasi
    Route::resource('/adminAsosiasi', adminAsosiasiController::class);
    
    //Routing Admin FAQ
    Route::resource('/adminFAQ', adminFAQController::class);
    


    //Routing Admin Slider
    Route::resource('/adminSlider', adminSliderController::class);

    //Routing Admin MengapaKami
    Route::resource('/adminMengapaKami', adminMengapaKamiController::class);
    // Route::get('/adminMengapaKami/icon', [adminMengapaKamiController::class,'icon'])->name('adminMengapaKami.icon');
    Route::get('/adminMengapaKami/icon', [adminMengapaKamiController::class,'icon'])->name('adminMengapaKami.icon');
    Route::get('icon/icons', function (){
        return view('admin.MengapaKami.icons');
     });
    //All the routes that belongs to the group goes here
    // Route::get('dashboard', function() {} );
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
