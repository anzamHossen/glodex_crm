<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/osen/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Sep 2025 04:49:07 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Glodex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{asset('back-end/assets/js/config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{asset('back-end/assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('back-end/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('back-end/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <!-- Topbar Start -->
        <header class="app-topbar">
            @include('layouts.partials.navbar')
        </header>
        <!-- Topbar End -->

        <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">
            @include('layouts.partials.sidebar')
        </div>
        <!-- Sidenav Menu End -->
        <div class="page-content">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>
    <!-- Vendor js -->
    <script src="{{asset('back-end/assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('back-end/assets/js/app.js')}}"></script>

    <!-- Apex Chart js -->
    <script src="{{asset('back-end/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="{{asset('back-end/assets/js/pages/dashboard-sales.js')}}"></script>

</body>
</html>