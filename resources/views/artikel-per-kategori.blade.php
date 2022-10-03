<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Kategori Artikel : {{ $title }}</title>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/flaticon.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/slick-theme.css" rel="stylesheet">
    <link href="../assets/css/swiper.min.css" rel="stylesheet">
    <link href="../assets/css/owl.transitions.css" rel="stylesheet">
    <link href="../assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="../assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="../assets/css/nice-select.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="wpo-site-header wpo-header-style-3">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-sm-7 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi flaticon-envelope"></i> safariglobalperkasa.pt@gmail.com</li>
                                    <li><i class="fi ti-mobile"></i> 0888-8888-888</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-5 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a href="#"><i class="fi ti-youtube"></i></a></li>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
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
                    <a class="navbar-brand" href="index.html"><img src="../assets/images/logo-safari.png" alt=""
                            style="height: 70px;"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder"
                    style="padding-top: 10px;">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="beranda.html">Home</a></li>
                        <li><a href="about.html">Tentang Kami</a></li>
                        <li><a href="syarat-dan-ketentuan.html">Syarat dan Ketentuan</a></li>
                        <li><a href="produk.html">Produk</a></li>
                        <li><a href="https://haji.kemenag.go.id/v4/index.php/">Cek Porsi Haji</a></li>
                        <li><a href="galeri.html">Gallery</a></li>
                        <li><a href="artikel.html">Artikel</a></li>

                    </ul>
                </div>
                <!-- end of nav-collapse -->

                <!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

        <!-- .wpo-breadcumb-area start -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Artikel (Kategori {{ $title }})</h2>
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
                                    @foreach ($posts as $posts)
                                        <div class="post format-standard-image">
                                            <div class="entry-media">
                                                <img src="../{{ $posts->gambar }}" alt="asas">
                                            </div>
                                            <ul class="entry-meta">
                                                <li><a href="#"> Oleh {{ $posts->written_by }}</a></li>
                                                <li><a href="#"> {{ $posts->published_at }}</a></li>
                                            </ul>
                                            <h3><a href="#">{{ $posts->judul }}</a></h3>
                                            <p>{{ $posts->excerpt }} ...</p>
                                            <div class="entry-bottom">
                                                <a href="/artikel/{{ $posts->slug }}" class="read-more">Baca
                                                    Selengkapnya...</a>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <div class="pagination-wrapper pagination-wrapper-left">
                                        <ul class="pg-pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <i class="fi ti-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <i class="fi ti-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="wpo-blog-sidebar">
                                    <div class="widget search-widget">
                                        <form>
                                            <div>
                                                <input type="text" class="form-control"
                                                    placeholder="Masukkan keyword...">
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="widget category-widget">
                                        <h3>Kategori</h3>
                                        <ul>
                                            @foreach ($category as $category)
                                                <li><a href="#">{{ $category->nama }}<span>(8)</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="widget recent-post-widget">
                                        <h3>Recent posts</h3>
                                        <div class="posts">
                                            @foreach ($posts2 as $posts)
                                                <div class="post">
                                                    <div class="img-holder">
                                                        <img src="../{{ $posts->gambar }}" alt>
                                                    </div>
                                                    <div class="details">
                                                        <h4><a href="#">{{ $posts->judul }}</a></h4>
                                                        <span class="date">{{ $posts->published_at }}</span>
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

        <!-- footer-area start -->
        <div class="wpo-ne-footer-2">
            <!-- start wpo-site-footer -->
            <footer class="wpo-site-footer">
                <div class="wpo-upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget about-widget">
                                    <div class="widget-title">
                                        <h3>PT. Safari Global Perkasa</h3>
                                    </div>
                                    <p><i class="fi ti-location-pin"></i> Trillium Office and Residence</p>
                                    <p>Jl. Pemuda 108 - 116 Lt. 1 No. 07, Surabaya</p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-google"></i></a></li>
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
                                            <li><i class="ti ti-mobile"></i> HP : 0888-8888-888</li>
                                            <li><i class="fa fa-phone-square"></i> Phone : +6231 51169000</li>
                                            <li><i class="fa fa-phone-square"></i> Phone : +6231 51169000</li>
                                            <li><i class="fa fa-envelope-o"></i> Email :
                                                safariglobalperkasa.pt@gmail.com</li>
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
                                            <h4>PT. Safari Global Perkasa</h4>
                                        </li>
                                        <li>BCA : 152 039 523 3 (IDR/RUPIAH)</li>
                                        <li>MANDIRI :
                                            142 00 22 33 44 51 (IDR/RUPIAH) <br>
                                            142 00 22 33 44 51 (IDR/RUPIAH)</li>
                                        <li>BSM : 716 117 161 6</li>
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
                                            <li><i class="fi ti-user"></i>Erna Siswati</li>
                                            <li><i class="fi ti-location-pin"></i>Sidoarjo</li>
                                            <li><i class="fi ti-mobile"></i>0888-8888-888</li>
                                            <li><i class="fi flaticon-call"></i>0888-8888-888</li>
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
    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="../assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="../assets/js/script.js"></script>
</body>

</html>
