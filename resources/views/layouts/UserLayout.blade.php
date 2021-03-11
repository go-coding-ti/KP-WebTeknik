<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fakultas Teknik - Universitas Udayana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- BOOTSTRAP CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

        <!-- Styles -->

        <link rel="stylesheet" href="{{ url('css/style.css')}}">
        <link rel="stylesheet" href="{{ url('assets/user/style.css') }}">

    </head>
    <body>

        {{-- NAVBAR --}}
            @include('layouts/Navbar')
        {{-- NAVBAR End --}}

        {{-- HERO PANEL --}}
            @include('layouts/Hero')
        {{-- HERO PANEL End --}}

        {{-- VIDEO PANEL --}}
            {{-- @include('layouts/Video') --}}
        {{-- VIDEO PANEL End --}}

        {{-- TRENDING --}}
            @include('layouts/Trending')
        {{-- TRENDING End --}}

        {{-- HIGHLIGHTS --}}
            @include('layouts/Highlight')
        {{-- HIGHLIGHTS End --}}

        {{-- NEWS --}}
            @include('layouts/News')
        {{-- NEWS End --}}

        {{-- FOOTER --}}
            @include('layouts/Footer')
        {{-- FOOTER End --}}

            <!-- jQuery-2.2.4 js -->
            <script src="{{ url('assets/user/js/jquery/jquery-2.2.4.min.js') }}"></script>
            <!-- Popper js -->
            <script src="{{ url('assets/user/js/bootstrap/popper.min.js') }}"></script>
            <!-- Bootstrap js -->
            <script src="{{ url('assets/user/js/bootstrap/bootstrap.min.js') }}"></script>
            <!-- All Plugins js -->
            <script src="{{ url('assets/user/js/plugins/plugins.js') }}"></script>
            <!-- Active js -->
            <script src="{{ url('assets/user/js/active.js') }}"></script>

        {{-- BOOTSTRAP JC CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
</html>
