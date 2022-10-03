@extends('layout.template')

@section('title')
    Galeri | Safari Umrah dan Haji
@endsection

@section('content')
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Umrah Haji Dambaan Ummat</h2>
                        <ul>
                            <li><span>Umrah dan Haji dengan Aman dan Nyaman</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->

    <!-- gallery-area start -->
    <div class="wpo-about-area-2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-aligncenter">
                    <h2 style="text-decoration-line: underline;">Video</h2>

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
                    </div>
                    <h2 style="text-decoration-line: underline;">Foto</h2>
                    <div class="service-wrap">
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

    </div>
@endsection
