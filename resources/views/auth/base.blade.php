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
<body class="login">
    @yield('body')

    <script src="{{ asset('assets/') }}../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ asset('assets/') }}../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{ asset('assets/') }}../assets/js/core/popper.min.js"></script>
	<script src="{{ asset('assets/') }}../assets/js/core/bootstrap.min.js"></script>
	<script src="{{ asset('assets/') }}../assets/js/atlantis.min.js"></script>

</body>
</html>