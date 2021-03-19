@extends('layouts/UserLayout')

@section('content')
    {{-- HERO PANEL --}}
        @include('layouts/Hero')
    {{-- HERO PANEL End --}}

    {{-- VIDEO PANEL --}}
        @include('layouts/Video')
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
@endsection