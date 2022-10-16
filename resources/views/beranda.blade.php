@extends('layout.template')

@section('title')
    Beranda | Safari Umrah dan Haji
@endsection

@section('content')
    <!-- start of hero -->

    <section class="hero hero-style-1">
        <div class="hero-slider">
            @foreach ($slider as $slider)
                <div class="slide">
                    <div class="container">
                        <img src="{{ asset('assets/') }}../../{{ $slider->gambar }}" alt="{{ $slider->gambar }}"
                            class="slider-bg">
                        <div class="row">
                            <div class="col col-md-8 col-md-offset-2 slide-caption">
                                <div class="slide-top">
                                    <span>{!! $slider->teks1 !!}</span>
                                </div>
                                <div class="slide-title">
                                    <h2>{!! $slider->teks2 !!}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- end of hero slider -->

    <!-- about-area start -->

    <div class="wpo-about-area-3 section-padding">
        <div class="container">
            <div class="wpo-about-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="wpo-blog-content">
                            <div class="post format-video" style="margin-bottom: 20px;">
                                <!-- <center><img src="assets/images/logo-safari-ka'bah.png" alt="" style="height: 400px;"></center> -->
                                <center>
                                    <div class="entry-media video-holder">
                                        {{-- <img src="{{ $about->thumbnail }}" alt> --}}
                                        {{-- <a href="https://www.youtube.com/embed/HDASx9ovpC8" class="video-btn"
                                                        data-type="iframe">
                                                        <i class="fi flaticon-play-button-2"></i> </a> --}}
                                        <div class="h_iframe" style="height: 360px">
                                            {!! $about->link_video_iframe !!}
                                        </div>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6 col-md-6 colsm-12">
                        <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                <span>{{ $about->submotto }}</span>
                                <h2>{{ $about->motto }}</h2>
                            </div>
                            {!! $about->teks_sejajar_video_di_beranda !!}
                            <div class="btns">
                                <a href="/{{ $mitra->username }}/about" class="theme-btn" tabindex="0">Baca
                                    Selengkapnya</a>
                                <ul>
                                    <li class="video-holder">
                                        <a href="{!! $about->link_video_embed !!}" class="video-btn" data-type="iframe"
                                            tabindex="0"></a>
                                    </li>
                                    <li class="video-text">
                                        <a href="{!! $about->link_video_embed !!}" class="video-btn" data-type="iframe"
                                            tabindex="0">
                                            Lihat Video Kami
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->

    <!-- mengapa kami-area start -->
    <div class="payment-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <h2>Mengapa Memilih Kami?</h2>
                        <span>Penyedia Layanan Umrah & Haji yang Amanah dan Profesional</span>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($why_us as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-event-item">
                            <div class="wpo-event-text" style="height: 320px;">
                                <center><i class="{{ $item->icon }}" style="color: #062265; font-size: 50px;"></i>
                                    <br><br>
                                    <h2>{{ $item->judul }}</h2>
                                    <p>{{ $item->deskripsi }}</p>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- courses-area start -->

    <!-- produk-area-start -->
    <div class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <h2>Produk Kami</h2>
                        <span>Mudah | Nyaman | Pasti
                        </span>

                    </div>
                </div>
            </div>
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
    <!-- produk-area-end -->


    <!-- ======= Testimonials Section ======= -->
    <section class="payment-section section-padding">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <h2>Apa Kata Mereka?</h2>
                        <span>Melayani dengan sepenuh hati adalah moto kami</span>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($testimoni as $testimoni)
                    <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                        <div class="widget profile-widget">

                            <div class="profile-img">
                                <div class="post-bloquote">
                                </div>
                                <img src="{{ asset('assets/') }}../../{{ $testimoni->gambar }}" alt="">
                                <p>{{ $testimoni->testimoni }}</p>
                            </div>
                            <div class="pro-social">
                                <ul>
                                    <li>
                                        <h3>{{ $testimoni->nama }}</h3>
                                    </li>
                                    @if ($testimoni->jabatan != null)
                                        <li>
                                            <p>{{ $testimoni->jabatan }}</p>
                                        </li>
                                    @else
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- gallery-area start -->
    <div class="wpo-about-area-2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <h2>Umrah Haji Dambaan Ummat</h2>
                        <span>Umrah dan Haji dengan Aman dan Nyaman
                        </span>

                    </div>
                </div>
            </div>
            <div class="wpo-about-wrap">
                <div class="service-wrap">
                    <div class="row">
                        @foreach ($video as $video)
                            <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                                <div class="service-single-item">
                                    <div class="service-single-img">
                                        <div class="h_iframe">
                                            {!! $video->link !!}
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h2>{{ $video->judul }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach ($foto as $foto)
                            <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                                <div class="service-single-item">
                                    <div class="service-single-img">
                                        <img src="{{ asset('assets/') }}../../{{ $foto->link }}"
                                            alt="{{ $foto->judul }}">
                                    </div>
                                    <div class="service-text">
                                        <h2>{{ $foto->judul }}</h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->

    <!-- wpo-event-area start -->
    <div class="payment-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <h2>Umroh Haji Sesuai Sunnah</h2>
                        <span>Penyelenggara Haji Khusus dan Umrah dengan pelayanan berkualitas</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($artikel as $artikel)
                    <div class="col-md-4 col-sm-12 col-12 custom-grid">
                        <div class="wpo-event-item">
                            <div class="wpo-event-text">
                                <center><img src="{{ asset('assets/') }}../../{{ $artikel->gambar }}"></center> <br>
                                <h2 style="display:block">{{ $artikel->judul }}</h2>
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ $artikel->published_at }}
                                    </li>
                                    <li><i class="fa fa-user"></i>{{ $artikel->written_by }}</li>
                                </ul>
                                <p>{!! $artikel->excerpt !!}</p>
                                <a
                                    href="{{ route('tes.nama', ['post' => $artikel->slug, 'mitra' => $mitra->username]) }}">Baca
                                    Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->

    <!-- ======= Sponsor Section ======= -->
    <section id="sponsors" class="sponsors">
        <div class="wpo-about-area-3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <h2>Asosiasi</h2>
                            <span>Didukung oleh pihak-pihak terkait</span>
                        </div>
                    </div>
                </div>
                <div class="sponsors">
                    @foreach ($asosiasi as $asosiasi)
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="sponsor-logo" data-aos="zoom-in">
                                <img src="{{ asset('assets/') }}../../{{ $asosiasi->logo }}"
                                    alt="{{ $asosiasi->nama }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>
    <!-- End Sponsors Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="wpo-about-area3 section-padding">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <h2>Frequently Asked Questions</h2>
                            <span>Pertanyaan Yang Sering Ditanyakan</span>
                        </div>
                    </div>
                </div>

                <ul class="faq-list" data-aos="fade-up">
                    <ul class="faq-list">

                        @foreach ($faq as $faq)
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question"
                                    href="#faq{{ $faq->id }}">
                                    {{ $faq->pertanyaan }}<i class="ti ti-angle-down icon-show"></i><i
                                        class="ti ti-angle-up icon-close"></i>
                                </div>
                                <div id="faq{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        {{ $faq->jawaban }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>

            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- blog-area start -->
    <div class="blog-area section-padding">
        <div class="container">
            <div class="col-l2">
                <div class="wpo-section-title">
                    <h2>Komunikasi Optimal dan Pelayanan Maksimal</h2>
                    <span>Kunjungi kami</span>
                </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9"
                style="box-shadow: 0px 5px 9.8px 0.2px rgba(85, 85, 85, 0.07);">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7789928603006!2d112.74673651487565!3d-7.265973673408765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9e1b0c6985f%3A0xf5f2248793d3a63d!2sPT.%20Safari%20Global%20Perkasa!5e0!3m2!1sid!2sid!4v1595151888643!5m2!1sid!2sid"
                    width="1600" height="600" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </div>
    <!-- blog-area start -->

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
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone-number" class="col-form-label">No.HP/WhatsApp</label>
                            <input type="text" class="form-control" id="phone-number" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal WhatsApp -->
@endsection
