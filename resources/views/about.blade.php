@extends('layout.template')

@section('title')
    Tentang Kami | Safari Umrah dan Haji
@endsection

@section('content')
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $about->judul }}</h2>
                        <ul>
                            <li><span>{{ $about->subjudul }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->

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
                                            {!! $about->link_video !!}
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
                            {!! $about->teks_sejajar_video !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        {!! $about->teks_di_bawah_video !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
