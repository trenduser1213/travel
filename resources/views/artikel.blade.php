@extends('layout.template')

@section('title')
    Artikel | Safari Umrah dan Haji
@endsection

@section('content')
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->

    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-aligncenter">
                    <div class="row">
                        <div class="col col-md-8">
                            <div class="wpo-blog-content">
                                @if ($artikel->count())
                                    @foreach ($artikel as $artikel)
                                        <div class="post format-standard-image">
                                            <div class="entry-media">
                                                <img src="{{ asset('assets/') }}../../{{ $artikel->gambar }}"
                                                    alt="{{ $artikel->slug }}">
                                            </div>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-user"></i> Oleh {{ $artikel->written_by }}</li>
                                                <li><i class="fa fa-calendar"></i> {{ $artikel->published_at }}</li>
                                            </ul>
                                            <h3><a
                                                    href="{{ $mitra->username }}/artikel/{{ $artikel->slug }}">{{ $artikel->judul }}</a>
                                            </h3>
                                            <p>{{ $artikel->excerpt }} ...</p>
                                            <div class="entry-bottom">
                                                <a href="{{ route('detailArtikel', ['post' => $artikel, 'mitra' => $mitra->username]) }}"
                                                    class="read-more">Baca
                                                    Selengkapnya...</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h2>Artikel tidak di temukan!</h2>
                                @endif
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="wpo-blog-sidebar">
                                <div class="widget search-widget">
                                    <form action="/artikel">
                                        <div>
                                            <input type="text" class="form-control" placeholder="Masukkan keyword..."
                                                name="search" value="{{ request('search') }}">
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="widget category-widget">
                                    <h3>Kategori</h3>
                                    <ul>
                                        @foreach ($kategori as $kategori)
                                            <li><a href="#">{{ $kategori->nama }}<span>(8)</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="widget recent-post-widget">
                                    <h3>Artikel Terbaru</h3>
                                    <div class="posts">
                                        @foreach ($artikel_terbaru as $artikel)
                                            <div class="post">
                                                <div class="img-holder">
                                                    <img src="{{ asset('assets/') }}../../{{ $artikel->gambar }}"
                                                        alt="{{ $artikel->slug }}">

                                                </div>
                                                <div class="details">
                                                    <h4><a href="#">{{ $artikel->judul }}</a></h4>
                                                    <span class="date">{{ $artikel->published_at }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->
@endsection
