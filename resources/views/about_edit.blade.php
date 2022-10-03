<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Ummah - Islamic Center HTML5 Template</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/social-share.css">

    <link rel="stylesheet" type="text/css" href="assets/css/trix.css">
    <script type="text/javascript" src="assets/js/trix.js"></script>

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
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo-safari.png" alt=""
                            style="height: 70px;"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder"
                    style="padding-top: 10px;">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
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
        <!-- .wpo-breadcumb-area start -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Edit Tentang Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wpo-breadcumb-area end -->

        <!-- form-area-start -->
        <div class="wpo-donation-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-aligncenter">
                        <div class="row">
                            <div class="col-lg-8">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <label for="judul">Judul Halaman</label>
                                        <input type="text" class="form-control" id="judul"
                                            placeholder="Masukkan Judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="subjudul">Sub-judul Halaman</label>
                                        <input type="text" class="form-control" id="subjudul"
                                            placeholder="Masukkan Sub-judul">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="thumbnail">Thumbnail Video</label> <br>
                                                <small style="color:darkred"><i class="fa fa-warning"></i> Masukkan
                                                    gambar
                                                    dengan
                                                    resolusi 800x600</small>

                                                <div class="file-drop-area">
                                                    <input type="file" class="file-input"
                                                        accept=".jfif,.jpg,.jpeg,.png,.gif"
                                                        style="border: none; font-size: small; margin-left: -25px;margin-top:-25px; margin-bottom:20px;"
                                                        id="thumbnail">
                                                </div>

                                                <div id="divImageMediaPreview"
                                                    style="margin-left: -10px; margin-top:-50px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="subjudul">Link Video Youtube</label>
                                                <input type="text" class="form-control" id="subjudul"
                                                    placeholder="Masukkan Link Iframe Video Youtube">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="teks1">Teks Sejajar Video</label>
                                        <input id="teks1" type="hidden" name="teks1">
                                        <trix-editor input="teks1"></trix-editor>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- form-area-end -->

        <ul class="ct-socials">
            <li>
                <a href="/" target="_blank"><i class="fa fa-whatsapp"></i></a>
            </li>
            <li>
                <a href="/" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a href="/" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="/" target="_blank" style="background-color: white; border-style: solid #242f6c;"><i
                        class="fa fa-share" disabled style="color: #242f6c;"></i></a>
            </li>
        </ul>

        <!-- footer-area start -->
        <div class="wpo-ne-footer">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>
