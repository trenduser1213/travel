<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link href="{{ asset('assets/') }}../../assets/css/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/flaticon.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/owl.theme.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/slick.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/slick-theme.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/nice-select.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}../../assets/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/') }}../../assets/css/social-share.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": [, "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('assets/') }}../../admin-assets/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

</head>

<body>
    @include('sweetalert::alert')

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <!-- <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div> -->
        <!-- end preloader -->

        <header id="header" class="wpo-site-header wpo-header-style-3">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-sm-7 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi flaticon-envelope"></i> {{ $identitas->email }}
                                    </li>
                                    <li><i class="fi ti-mobile"></i> {{ $identitas->no_hp_1 }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-5 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a href="{{ $identitas->youtube }}"><i class="fi ti-youtube"></i></a></li>
                                    <li><a href="{{ $identitas->facebook }}"><i class="ti-facebook"></i></a></li>
                                    <li><a href="{{ $identitas->instagram }}"><i class="ti-instagram"></i></a></li>
                                    <li><a href="mailto:{{ $identitas->email }}"><i class="ti-google"></i></a>
                                    </li>
                                    <li> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <nav class="navigation navbar">

                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img
                            src="{{ asset('assets/') }}../../assets/images/logo-safari.png" alt=""
                            style="height: 70px;"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder"
                    style="padding-top: 10px;">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="/{{ $mitra->username }}/beranda">Home</a></li>
                        <li><a href="/{{ $mitra->username }}/about">Tentang Kami</a></li>
                        <li><a href="/{{ $mitra->username }}/syarat-dan-ketentuan">Syarat dan Ketentuan</a></li>
                        <li><a href="/{{ $mitra->username }}/produk">Produk</a></li>
                        <li><a href="https://haji.kemenag.go.id/v4/index.php/">Cek Porsi Haji</a></li>
                        <li><a href="/{{ $mitra->username }}/galeri">Gallery</a></li>
                        <li><a href="/{{ $mitra->username }}/artikel">Artikel</a></li>

                    </ul>
                </div>
                <!-- end of nav-collapse -->

                <!-- end of container -->
            </nav>
        </header>

        {{-- Start All Content --}}
        @yield('content')

        <!-- start wpo-site-footer -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="widget-title">
                                    <h3>{{ $identitas->nama }}</h3>
                                </div>
                                <p><i class="fi ti-location-pin"></i> {{ $identitas->nama_gedung_kantor }}</p>
                                <p>{{ $identitas->alamat }}</p>
                                <ul>
                                    <li><a href="{{ $identitas->youtube }}"><i class="ti-youtube"></i></a></li>
                                    <li><a href="{{ $identitas->facebook }}"><i class="ti-facebook"></i></a></li>
                                    <li><a href="{{ $identitas->instagram }}"><i class="ti-instagram"></i></a></li>
                                    <li><a href="mailto:{{ $identitas->email }}"><i class="ti-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget market-widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Kontak</h3>
                                </div>

                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="ti ti-mobile"></i> HP : {{ $identitas->no_hp_1 }}</li>
                                        <li><i class="fa fa-phone-square"></i> Phone : {{ $identitas->no_telepon_1 }}
                                        </li>
                                        <li><i class="fa fa-phone-square"></i> {{ $identitas->no_telepon_2 }}</li>
                                        <li><i class="fa fa-envelope-o"></i> Email :
                                            {{ $identitas->email }}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col col-lg-4 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Bank</h3>
                                </div>
                                <ul>
                                    <li>
                                        <h4>{{ $identitas->nama_pada_rekening }}</h4>
                                    </li>
                                    <li>{{ $identitas->no_rekening_1 }}</li>
                                    <li>{{ $identitas->no_rekening_2 }}</li>
                                    <li>{{ $identitas->no_rekening_3 }}</li>
                                    <li>{{ $identitas->no_rekening_4 }}</li>
                                    <li>Pembayaran dan Transaksi dianggap sah, hanya jika melalui rekening
                                        perusahaan</li>
                                </ul>
                            </div>

                        </div>
                        <div class="col col-lg-2 col-md-3 col-sm-6">

                            <div class="widget market-widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Marketing</h3>
                                </div>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi ti-user"></i>{{ $mitra->nama }}</li>
                                        <li><i class="fi ti-location-pin"></i>{{ $mitra->kota }}</li>
                                        <li><i class="fi ti-mobile"></i>{{ $mitra->wa }}</li>
                                        <li><i class="fi flaticon-call"></i>{{ $mitra->hp }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright">&copy; 2022 PT. Safari Global Perkasa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end wpo-site-footer -->
    </div>
    <ul class="ct-socials">
        <li>
            <a href="https://wa.me/?text={{ Request::url() }}" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </li>
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank"><i
                    class="fa fa-facebook"></i></a>
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ Request::url() }}"
                target="_blank"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a style="background-color: white; border-style: solid #242f6c;"><i class="fa fa-share" disabled
                    style="color: #242f6c;"></i></a>
        </li>
    </ul>

    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->
    <script src="https://kit.fontawesome.com/9a9fb1d908.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/') }}../../assets/js/jquery.min.js"></script>
    <script src="{{ asset('assets/') }}../../assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/') }}../../assets/js/circle-progress.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('assets/') }}../../assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('assets/') }}../../assets/js/script.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/') }}../../assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets/') }}../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/') }}../../assets/vendor/glightbox/js/glightbox.min.js"></script>

</body>

</html>
