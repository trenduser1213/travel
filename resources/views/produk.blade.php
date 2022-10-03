 @extends('layout.template')

 @section('title')
     Produk | Safari Umrah dan Haji
 @endsection

 @section('content')
     <!-- .wpo-breadcumb-area start -->
     <div class="wpo-breadcumb-area">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="col-md-6">
                         @if (session()->has('success'))
                             <div class="alert alert-success" role="alert">
                                 Kontak anda telah tersimpan!
                             </div>
                         @endif
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="wpo-breadcumb-wrap">
                         <h2>Produk Kami</h2>
                         <ul>
                             <li><span>Mudah | Nyaman | Pasti</span></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- .wpo-breadcumb-area end -->

     <!-- produk-area-start -->
     <div class="wpo-blog-pg-section section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-10 col-aligncenter">
                     <div class="service-wrap">
                         <div class="row">

                             @foreach ($produk as $produk)
                                 <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                                     <div class="post post-text-wrap">
                                         <div class="service-single-img">
                                             <img src="{{ asset('assets/') }}../../{{ $produk->gambar }}"
                                                 style="height:auto;"alt="{{ $produk->slug }}">
                                         </div>
                                         <div class="service-text">
                                             <div class="product-badge">
                                                 @if ($produk->kategori_paket == 'Haji')
                                                     <div class="text-haji">
                                                         <span>{{ $produk->kategori_paket }}</span>
                                                     </div>
                                                 @else
                                                     <div class="text-umrah">
                                                         <span>{{ $produk->kategori_paket }}</span>
                                                     </div>
                                                 @endif

                                             </div>
                                             <h2><a href="service-single.html">{{ $produk->nama }}</a></h2>
                                             <br>
                                             <div class="entry-bottom">
                                                 <p style="font-size: small"><i class="fa fa-calendar fa-sm"></i> Berangkat
                                                 </p>
                                                 <p style="font-size: small;" class="text-right">
                                                     {{ $produk->tgl_berangkat }}</p>
                                             </div>
                                             <div class="entry-bottom">
                                                 <p style="font-size: small"><i class="fa fa-clock-o fa-sm"></i> Durasi</p>
                                                 <p style="font-size: small;" class="text-right">{{ $produk->durasi }}
                                                 </p>
                                             </div>
                                             <div class="entry-bottom">
                                                 <p style="font-size: small"><i class="fa fa-user fa-sm"></i> Total Seat</p>
                                                 <p style="font-size: small;" class="text-right">{{ $produk->total_seat }}
                                                 </p>
                                             </div>
                                             <div class="entry-bottom">
                                                 <p style="font-size: small"><i class="fa fa-map-marker fa-sm"></i>
                                                     Berangkat Dari
                                                 </p>
                                                 <p style="font-size: small;" class="text-right">
                                                     {{ $produk->berangkat_dari }}
                                                 </p>
                                             </div>
                                             <div class="entry-bottom">
                                                 <p style="font-size: small"><i class="fa fa-hotel fa-sm"></i> Hotel</p>
                                                 <p style="font-size: small;" class="text-right">{{ $produk->hotel }}
                                                 </p>
                                             </div>
                                             <div class="entry-bottom">
                                                 <p style="font-size: small"><i class="fa fa-plane fa-sm"></i> Maskapai</p>
                                                 <p style="font-size: small;" class="text-right">{{ $produk->maskapai }}
                                                 </p>
                                             </div>
                                         </div>
                                         <div class="container">
                                             <div class="entry-bottom">
                                                 {{-- <a href="#" class="read-more">Detail..</a> --}}
                                                 <div class="blog-thumb-text" style="margin: auto;">
                                                     <a
                                                         href="/{{ $mitra->username }}/daftar/{{ $produk->slug }}"><span>Daftar</span></a>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                             @endforeach

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- produk-area-end -->

     <!-- footer-area start -->
     <div class="wpo-ne-footer">
         <!-- start wpo-news-letter-section -->
         <section class="wpo-news-letter-section">
             <div class="container">
                 <div class="wpo-news-letter-wrap">
                     <div class="row">
                         <div class="col col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">

                             <div class="wpo-newsletter">
                                 <h3>Ingin mengetahui lebih lanjut?</h3>
                                 <p>Tinggalkan kontak anda agar nantinya kami akan memberikan informasi lebih
                                     lanjut kepada anda.</p>
                             </div>
                         </div>
                         <button type="button" data-toggle="modal" data-target="#ModalWA">Saya
                             Mau!</button>
                     </div>
                 </div>
             </div> <!-- end container -->
         </section>
         <!-- end wpo-news-letter-section -->
     </div>

     <!-- Start Modal WhatsApp -->
     <div class="modal fade" id="ModalWA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Masukkan Kontak Anda</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form method="POST" action="/kontak_jamaah">
                         @csrf
                         <div class="form-group">
                             <label for="nama" class="col-form-label">Nama</label>
                             <input type="text" class="form-control" id="nama" name="nama"
                                 placeholder="Masukkan nama anda" required>
                         </div>
                         <div class="form-group">
                             <label for="nomor_hp" class="col-form-label">No.HP/WhatsApp</label>
                             <input type="number" class="form-control" id="no_hp" name="nomor_hp"
                                 placeholder="Masukkan nomor HP/WA" required>
                         </div>
                         <div class="form-group">
                             <label for="email" class="col-form-label">Email</label>
                             <input type="email" class="form-control" id="email" name="email"
                                 placeholder="Masukkan e-mail anda (tidak wajib)">
                         </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                     <button type="submit" class="btn btn-primary">Kirim</button>
                 </div>
                 </form>
             </div>
         </div>
     </div>
 @endsection
