@extends('layout.template')

@section('title')
    Syarat dan Ketentuan | Safari Umrah dan Haji
@endsection

@section('content')
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>{{ $syarat->judul }}</h2>
                        <ul>
                            <li><span>{{ $syarat->subjudul }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->

    <!-- terms-and-cond-area start -->
    <div class="terms-and-cond section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-aligncenter">
                    <div class="service-wrap">
                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                                <div class="post post-text-wrap">
                                    <div class="service-single-img">
                                        <img src="{{ asset('assets/') }}../../{{ $syarat->gambar1 }}"
                                            style="height:auto;"alt="">
                                    </div>
                                    <div class="service-text">
                                        <h2>{{ $syarat->judul1 }}</h2>
                                        <br>
                                        <div id="Persyaratan" class="tab-pane active">
                                            {!! $syarat->isi1 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                                <div class="post post-text-wrap">
                                    <div class="service-single-img">
                                        <img src="{{ asset('assets/') }}../../{{ $syarat->gambar2 }}"
                                            style="height:auto;"alt="">
                                    </div>
                                    <div class="service-text">
                                        <h2>{{ $syarat->judul2 }}</h2>
                                        <br>
                                        <div id="Biaya">
                                            {!! $syarat->isi2 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                                <div class="post post-text-wrap">
                                    <div class="service-single-img">
                                        <img src="{{ asset('assets/') }}../../{{ $syarat->gambar2 }}"
                                            style="height:auto;"alt="">
                                    </div>
                                    <div class="service-text">
                                        <h2>{{ $syarat->judul3 }}</h2>
                                        <br>
                                        <div id="Pembatalan">
                                            {!! $syarat->isi3 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- terms-and-conds-area end -->
@endsection
