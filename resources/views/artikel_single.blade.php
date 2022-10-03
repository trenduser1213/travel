@extends('layout.template')

@section('title')
    {{-- Artikel | {{ $post->judul }} --}}
@endsection

@section('content')
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Latest News</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->
    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="wpo-wpo-blog-content clearfix">
                        <div class="post">
                            <div class="post format-standard-image" style="box-shadow: none; margin:-20px;">
                                <div class="entry-media">
                                    <img src="{{ asset('assets/') }}../../{{ $post->gambar }}" alt>
                                </div>
                                <ul class="entry-meta">
                                    <li><i class="fa fa-user"></i> Oleh {{ $post->written_by }}</li>
                                    <li><i class="fa fa-calendar"></i> {{ $post->published_at }}</li>
                                </ul>
                            </div>
                            <h2>{{ $post->judul }}</h2>
                            {{ $post->body }}
                        </div>
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
                            <h3>Recent posts</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/artikel/1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">HALAL BIHALAL RAJUT PERSAUDARAAN</a></h4>
                                        <span class="date">22 Sep 2022</span>
                                    </div>
                                </div>

                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/artikel/1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">HALAL BIHALAL RAJUT PERSAUDARAAN</a></h4>
                                        <span class="date">22 Sep 2022</span>
                                    </div>
                                </div>

                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/artikel/1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">HALAL BIHALAL RAJUT PERSAUDARAAN</a></h4>
                                        <span class="date">22 Sep 2022</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->
@endsection
