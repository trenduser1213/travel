<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/') }}../../admin-assets/assets/img/icon.ico" type="image/x-icon" />

    {{-- DATA TABLES --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <script src="{{ asset('admin-assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('assets/') }}../../admin-assets/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/') }}../../admin-assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/') }}../../admin-assets/assets/css/atlantis.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/') }}../../admin-assets/assets/css/demo.css">
</head>

<body>
    @include('sweetalert::alert')
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/') }}../../admin-assets/assets/img/logo.svg" alt="navbar brand"
                        class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-info ml-auto"><i class="fa fa-sign-out"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="{{ asset('assets/') }}../../admin-assets/assets/img/profile.jpg" alt="..."
                                class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>Article</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ route('CategoryPost.index') }}">
                                            <span class="sub-item">Kategori Article</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formvalidation.html">
                                            <span class="sub-item">Form Validation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formwidget.html">
                                            <span class="sub-item">Form Widget</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formwizard.html">
                                            <span class="sub-item">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formupload.html">
                                            <span class="sub-item">Multiple Upload</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formwysiwyg.html">
                                            <span class="sub-item">WYSIWYG Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminGaleri.index') }}">
                                <i class="fas fa-file-signature"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminTestimoni.index') }}">
                                <i class="fas fa-file-signature"></i>
                                <p>Testimoni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminKetentuan.index') }}">
                                <i class="fas fa-file-signature"></i>
                                <p>Syarat dan ketentuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminProduk.index') }}">
                                <i class="fas fa fa-box"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminAsosiasi.index') }}">
                                <i class="fas fa fa-box"></i>
                                <p>Asosiasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('adminFAQ.index') }}">
                                <i class="fas fa fa-box"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../demo1/index.html">
                                            <span class="sub-item">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo2/index.html">
                                            <span class="sub-item">Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo3/index.html">
                                            <span class="sub-item">Dashboard 3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo4/index.html">
                                            <span class="sub-item">Dashboard 4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo5/index.html">
                                            <span class="sub-item">Dashboard 5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo6/index.html">
                                            <span class="sub-item">Dashboard 6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo7/index.html">
                                            <span class="sub-item">Dashboard 7</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo8/index.html">
                                            <span class="sub-item">Dashboard 8</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo9/index.html">
                                            <span class="sub-item">Dashboard 9</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Base</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="components/avatars.html">
                                            <span class="sub-item">Avatars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/buttons.html">
                                            <span class="sub-item">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/gridsystem.html">
                                            <span class="sub-item">Grid System</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/panels.html">
                                            <span class="sub-item">Panels</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/notifications.html">
                                            <span class="sub-item">Notifications</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/sweetalert.html">
                                            <span class="sub-item">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/lists.html">
                                            <span class="sub-item">Lists</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/owl-carousel.html">
                                            <span class="sub-item">Owl Carousel</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/magnific-popup.html">
                                            <span class="sub-item">Magnific Popup</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/font-awesome-icons.html">
                                            <span class="sub-item">Font Awesome Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/simple-line-icons.html">
                                            <span class="sub-item">Simple Line Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/flaticons.html">
                                            <span class="sub-item">Flaticons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/typography.html">
                                            <span class="sub-item">Typography</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas fa-th-list"></i>
                                <p>Sidebar Layouts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="sidebar-style-1.html">
                                            <span class="sub-item">Sidebar Style 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="overlay-sidebar.html">
                                            <span class="sub-item">Overlay Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compact-sidebar.html">
                                            <span class="sub-item">Compact Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="static-sidebar.html">
                                            <span class="sub-item">Static Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="icon-menu.html">
                                            <span class="sub-item">Icon Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>Forms</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="forms/forms.html">
                                            <span class="sub-item">Basic Form</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formvalidation.html">
                                            <span class="sub-item">Form Validation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formwidget.html">
                                            <span class="sub-item">Form Widget</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formwizard.html">
                                            <span class="sub-item">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formupload.html">
                                            <span class="sub-item">Multiple Upload</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/formwysiwyg.html">
                                            <span class="sub-item">WYSIWYG Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#tables">
                                <i class="fas fa-table"></i>
                                <p>Tables</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="tables/tables.html">
                                            <span class="sub-item">Basic Table</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables/datatables.html">
                                            <span class="sub-item">Datatables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#maps">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Maps</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="maps/googlemaps.html">
                                            <span class="sub-item">Google Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps/fullscreenmaps.html">
                                            <span class="sub-item">Full Screen Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps/jqvmap.html">
                                            <span class="sub-item">JQVMap</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#charts">
                                <i class="far fa-chart-bar"></i>
                                <p>Charts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="charts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="charts/charts.html">
                                            <span class="sub-item">Chart Js</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="charts/sparkline.html">
                                            <span class="sub-item">Sparkline</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="calendar.html">
                                <i class="far fa-calendar-alt"></i>
                                <p>Calendar</p>
                                <span class="badge badge-info">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="widgets.html">
                                <i class="fas fa-desktop"></i>
                                <p>Widgets</p>
                                <span class="badge badge-success">4</span>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Snippets</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#email-nav">
                                <i class="far fa-envelope"></i>
                                <p>Email</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="email-nav">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="email-inbox.html">
                                            <span class="sub-item">Inbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-compose.html">
                                            <span class="sub-item">Email Compose</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-detail.html">
                                            <span class="sub-item">Email Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#messages-app-nav">
                                <i class="far fa-paper-plane"></i>
                                <p>Messages App</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="messages-app-nav">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="messages.html">
                                            <span class="sub-item">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="conversations.html">
                                            <span class="sub-item">Conversations</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="projects.html">
                                <i class="fas fa-file-signature"></i>
                                <p>Projects</p>
                                <span class="badge badge-count">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="boards.html">
                                <i class="fas fa-th-list"></i>
                                <p>Boards</p>
                                <span class="badge badge-count">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="invoice.html">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <p>Invoices</p>
                                <span class="badge badge-count">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.html">
                                <i class="fas fa-tag"></i>
                                <p>Pricing</p>
                                <span class="badge badge-count">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="faqs.html">
                                <i class="far fa-question-circle"></i>
                                <p>Faqs</p>
                                <span class="badge badge-count">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#custompages">
                                <i class="fas fa-paint-roller"></i>
                                <p>Custom Pages</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="custompages">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="login.html">
                                            <span class="sub-item">Login & Register 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login2.html">
                                            <span class="sub-item">Login & Register 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login3.html">
                                            <span class="sub-item">Login & Register 3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="userprofile.html">
                                            <span class="sub-item">User Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <span class="sub-item">404</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#submenu">
                                <i class="fas fa-bars"></i>
                                <p>Menu Levels</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="submenu">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#subnav1">
                                            <span class="sub-item">Level 1</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav1">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#subnav2">
                                            <span class="sub-item">Level 1</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav2">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Level 1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="container">
                {{-- <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                                <h5 class="text-white op-7 mb-2">Ini adalah halaman dashboard</h5>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                                <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="page-inner">
                    @yield('body')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                            href="http://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>

        <div class="quick-sidebar">
            <a href="#" class="close-quick-sidebar">
                <i class="flaticon-cross"></i>
            </a>
            <div class="quick-sidebar-wrapper">
                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages"
                            role="tab" aria-selected="true">Messages</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab"
                            aria-selected="false">Tasks</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab"
                            aria-selected="false">Settings</a> </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
                        <div class="messages-contact">
                            <div class="quick-wrapper">
                                <div class="quick-scroll scrollbar-outer">
                                    <div class="quick-content contact-content">
                                        <span class="category-title mt-0">Contacts</span>
                                        <div class="avatar-group">
                                            <div class="avatar">
                                                <img src="../assets/img/jm_denis.jpg" alt="..."
                                                    class="avatar-img rounded-circle border border-white">
                                            </div>
                                            <div class="avatar">
                                                <img src="../assets/img/chadengle.jpg" alt="..."
                                                    class="avatar-img rounded-circle border border-white">
                                            </div>
                                            <div class="avatar">
                                                <img src="../assets/img/mlane.jpg" alt="..."
                                                    class="avatar-img rounded-circle border border-white">
                                            </div>
                                            <div class="avatar">
                                                <img src="../assets/img/talha.jpg" alt="..."
                                                    class="avatar-img rounded-circle border border-white">
                                            </div>
                                            <div class="avatar">
                                                <span class="avatar-title rounded-circle border border-white">+</span>
                                            </div>
                                        </div>
                                        <span class="category-title">Recent</span>
                                        <div class="contact-list contact-list-recent">
                                            <div class="user">
                                                <a href="#">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/jm_denis.jpg" alt="..."
                                                            class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="user-data">
                                                        <span class="name">Jimmy Denis</span>
                                                        <span class="message">How are you ?</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#">
                                                    <div class="avatar avatar-offline">
                                                        <img src="../assets/img/chadengle.jpg" alt="..."
                                                            class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="user-data">
                                                        <span class="name">Chad</span>
                                                        <span class="message">Ok, Thanks !</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#">
                                                    <div class="avatar avatar-offline">
                                                        <img src="../assets/img/mlane.jpg" alt="..."
                                                            class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="user-data">
                                                        <span class="name">John Doe</span>
                                                        <span class="message">Ready for the meeting today
                                                            with...</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="category-title">Other Contacts</span>
                                        <div class="contact-list">
                                            <div class="user">
                                                <a href="#">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/jm_denis.jpg" alt="..."
                                                            class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="user-data2">
                                                        <span class="name">Jimmy Denis</span>
                                                        <span class="status">Online</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#">
                                                    <div class="avatar avatar-offline">
                                                        <img src="../assets/img/chadengle.jpg" alt="..."
                                                            class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="user-data2">
                                                        <span class="name">Chad</span>
                                                        <span class="status">Active 2h ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#">
                                                    <div class="avatar avatar-away">
                                                        <img src="../assets/img/talha.jpg" alt="..."
                                                            class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="user-data2">
                                                        <span class="name">Talha</span>
                                                        <span class="status">Away</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="messages-wrapper">
                            <div class="messages-title">
                                <div class="user">
                                    <div class="avatar avatar-offline float-right ml-2">
                                        <img src="../assets/img/chadengle.jpg" alt="..."
                                            class="avatar-img rounded-circle border border-white">
                                    </div>
                                    <span class="name">Chad</span>
                                    <span class="last-active">Active 2h ago</span>
                                </div>
                                <button class="return">
                                    <i class="flaticon-left-arrow-3"></i>
                                </button>
                            </div>
                            <div class="messages-body messages-scroll scrollbar-outer">
                                <div class="message-content-wrapper">
                                    <div class="message message-in">
                                        <div class="avatar avatar-sm">
                                            <img src="../assets/img/chadengle.jpg" alt="..."
                                                class="avatar-img rounded-circle border border-white">
                                        </div>
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="name">Chad</div>
                                                <div class="content">Hello, Rian</div>
                                            </div>
                                            <div class="date">12.31</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="message-content-wrapper">
                                    <div class="message message-out">
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="content">
                                                    Hello, Chad
                                                </div>
                                            </div>
                                            <div class="message-content">
                                                <div class="content">
                                                    What's up?
                                                </div>
                                            </div>
                                            <div class="date">12.35</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="message-content-wrapper">
                                    <div class="message message-in">
                                        <div class="avatar avatar-sm">
                                            <img src="../assets/img/chadengle.jpg" alt="..."
                                                class="avatar-img rounded-circle border border-white">
                                        </div>
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="name">Chad</div>
                                                <div class="content">
                                                    Thanks
                                                </div>
                                            </div>
                                            <div class="message-content">
                                                <div class="content">
                                                    When is the deadline of the project we are working on ?
                                                </div>
                                            </div>
                                            <div class="date">13.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="message-content-wrapper">
                                    <div class="message message-out">
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="content">
                                                    The deadline is about 2 months away
                                                </div>
                                            </div>
                                            <div class="date">13.10</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="message-content-wrapper">
                                    <div class="message message-in">
                                        <div class="avatar avatar-sm">
                                            <img src="../assets/img/chadengle.jpg" alt="..."
                                                class="avatar-img rounded-circle border border-white">
                                        </div>
                                        <div class="message-body">
                                            <div class="message-content">
                                                <div class="name">Chad</div>
                                                <div class="content">
                                                    Ok, Thanks !
                                                </div>
                                            </div>
                                            <div class="date">13.15</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="messages-form">
                                <div class="messages-form-control">
                                    <input type="text" placeholder="Type here"
                                        class="form-control input-pill input-solid message-input">
                                </div>
                                <div class="messages-form-tool">
                                    <a href="#" class="attachment">
                                        <i class="flaticon-file"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tasks" role="tabpanel">
                        <div class="quick-wrapper tasks-wrapper">
                            <div class="tasks-scroll scrollbar-outer">
                                <div class="tasks-content">
                                    <span class="category-title mt-0">Today</span>
                                    <ul class="tasks-list">
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" checked=""
                                                    class="custom-control-input"><span
                                                    class="custom-control-label">Planning new project structure</span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Create the main structure </span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Add new Post</span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Finalise the design proposal</span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                    </ul>

                                    <span class="category-title">Tomorrow</span>
                                    <ul class="tasks-list">
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Initialize the project </span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Create the main structure </span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    class="custom-control-label">Updates changes to GitHub </span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="custom-checkbox custom-control checkbox-secondary">
                                                <input type="checkbox" class="custom-control-input"><span
                                                    title="This task is too long to be displayed in a normal space!"
                                                    class="custom-control-label">This task is too long to be displayed
                                                    in a normal space! </span>
                                                <span class="task-action">
                                                    <a href="#" class="link text-danger">
                                                        <i class="flaticon-interface-5"></i>
                                                    </a>
                                                </span>
                                            </label>
                                        </li>
                                    </ul>

                                    <div class="mt-3">
                                        <div class="btn btn-primary btn-rounded btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                            Add Task
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel">
                        <div class="quick-wrapper settings-wrapper">
                            <div class="quick-scroll scrollbar-outer">
                                <div class="quick-content settings-content">

                                    <span class="category-title mt-0">General Settings</span>
                                    <ul class="settings-list">
                                        <li>
                                            <span class="item-label">Enable Notifications</span>
                                            <div class="item-control">
                                                <input type="checkbox" checked data-toggle="toggle"
                                                    data-onstyle="primary" data-style="btn-round" data-size>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">Signin with social media</span>
                                            <div class="item-control">
                                                <input type="checkbox" data-toggle="toggle" data-onstyle="primary"
                                                    data-style="btn-round">
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">Backup storage</span>
                                            <div class="item-control">
                                                <input type="checkbox" data-toggle="toggle" data-onstyle="primary"
                                                    data-style="btn-round">
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">SMS Alert</span>
                                            <div class="item-control">
                                                <input type="checkbox" checked data-toggle="toggle"
                                                    data-onstyle="primary" data-style="btn-round">
                                            </div>
                                        </li>
                                    </ul>

                                    <span class="category-title mt-0">Notifications</span>
                                    <ul class="settings-list">
                                        <li>
                                            <span class="item-label">Email Notifications</span>
                                            <div class="item-control">
                                                <input type="checkbox" checked data-toggle="toggle"
                                                    data-onstyle="primary" data-style="btn-round">
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">New Comments</span>
                                            <div class="item-control">
                                                <input type="checkbox" checked data-toggle="toggle"
                                                    data-onstyle="primary" data-style="btn-round">
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">Chat Messages</span>
                                            <div class="item-control">
                                                <input type="checkbox" checked data-toggle="toggle"
                                                    data-onstyle="primary" data-style="btn-round">
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">Project Updates</span>
                                            <div class="item-control">
                                                <input type="checkbox" data-toggle="toggle" data-onstyle="primary"
                                                    data-style="btn-round">
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-label">New Tasks</span>
                                            <div class="item-control">
                                                <input type="checkbox" checked data-toggle="toggle"
                                                    data-onstyle="primary" data-style="btn-round">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js">
    </script>
    <script
        src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js">
    </script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js">
    </script>

    <!-- Moment JS -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js">
    </script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    {{-- <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js">
    </script> --}}

    <!-- Bootstrap Toggle -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js">
    </script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js">
    </script>

    <!-- Bootstrap Tagsinput -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js">
    </script>

    <!-- Bootstrap Wizard -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jquery.validate/jquery.validate.min.js">
    </script>

    <!-- Summernote -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script
        src="{{ asset('assets/') }}../../admin-assets/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js">
    </script>

    <!-- Atlantis JS -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/atlantis.min.js"></script>

    {{-- Summernote --}}

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/setting-demo.js"></script>
    <script src="{{ asset('assets/') }}../../admin-assets/assets/js/demo.js"></script>
    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
    </script>
    <script src="https://kit.fontawesome.com/9a9fb1d908.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
</body>

</html>
