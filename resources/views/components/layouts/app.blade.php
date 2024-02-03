<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
        <!-- <script src="{{asset("vendor\popper\popper.min.js")}}"></script> -->
        @livewireStyles

        <title>{{ $title ?? 'RSU Pindad' }}</title>
    </head>
    @if(Route::is('login') or Route::is('register'))
    <body class="login-page">
    @elseif(Route::is('beranda'))
    <body class="sidebar-mini">
    @else
    <body>
    @endif
    
        <!-- Wrapper -->
        @auth
        <div class="wrapper">
            <!-- Navbar  -->
            @include('components.layouts.navbar')
            <!-- End Navbar  -->

            <!-- Sidebar -->
            @include('components.layouts.sidebar')
            <!-- End Sidebar -->

            <!-- Content -->
            {{ $slot }}
            <!-- End Content -->

            <!-- Footer -->         
            @include('components.layouts.footer')
            <!-- End Footer -->

        </div>
        <!-- End Wrapper -->
        @else
        {{$slot}}
        @endauth
        @livewireScripts

    </body>
</html>
