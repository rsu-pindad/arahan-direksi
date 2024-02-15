<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @once
        @include('components.layouts.head')
        @endonce

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

        @once
        @include('components.layouts.scriptset')
        @endonce
    </body>
</html>
