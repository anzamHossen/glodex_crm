<!DOCTYPE html>
<html lang="en">

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
    
    @stack('page-css')
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
            @if(Auth::check())
                @if(Auth::user()->user_type == 1)
                    @include('layouts.partials.sidebar-admin')
                @elseif(Auth::user()->user_type == 2)
                    @include('layouts.partials.sidebar-agent')
                @elseif(Auth::user()->user_type == 3)
                    @include('layouts.partials.sidebar-student')
                @endif
            @endif
        </div>
        <!-- Sidenav Menu End -->
        <div class="page-content">
            @yield('content')
            @include('sweetalert::alert')
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
    @stack('page-js')

</body>
</html>