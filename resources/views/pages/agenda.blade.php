@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">All Events</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
                @foreach($agendas as $agenda)
                <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                    <a href="#" class="link-light text-decoration-none ">
                    <img src="{{$agenda->thumbnail}}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3">
                        <a href="#" class="btn btn-sm btn-danger p-1 text-uppercase my-1"><small>{{$agenda->kategori->kategori_eng}}</small></a>
                        <p class="card-text h5 fw-bold mt-3"><a href="{{ route("Detail Agenda", ['language'=>app()->getLocale(), 'title_slug' => $agenda->title_slug]) }}" class="text-decoration-none link-light link-hover">{{$agenda->title_eng}}</a></p>
                    </div>
                    </a>
                    <div class="card-footer p-3 text-end border-0">
                    <small class="text-muted">Posted on {{ date('d M Y', strtotime($agenda->created_at)) }}</small>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            <ul class="pagination bg-dark justify-content-center mt-5">
                <li class="page-item">
                <a class="page-link pagination bg-black link-light border-light" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">1</a></li>
                <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">2</a></li>
                <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link pagination bg-black link-light" href="#">Next</a>
                </li>
            </ul>
        </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Daftar Agenda</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
                @foreach($agendas as $agenda)
                <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                    <a href="#" class="link-light text-decoration-none ">
                    <img src="{{$agenda->thumbnail}}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3">
                        <a href="#" class="btn btn-sm btn-danger p-1 text-uppercase my-1"><small>{{$agenda->kategori->kategori_eng}}</small></a>
                        <p class="card-text h5 fw-bold mt-3"><a href="{{ route("Detail Agenda", ['language'=>app()->getLocale(), 'title_slug' => $agenda->title_slug]) }}" class="text-decoration-none link-light link-hover">{{$agenda->title_eng}}</a></p>
                    </div>
                    </a>
                    <div class="card-footer p-3 text-end border-0">
                    <small class="text-muted">Posted on {{ date('d M Y', strtotime($agenda->created_at)) }}</small>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            <ul class="pagination bg-dark justify-content-center mt-5">
                <li class="page-item">
                <a class="page-link pagination bg-black link-light border-light" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">1</a></li>
                <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">2</a></li>
                <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link pagination bg-black link-light" href="#">Next</a>
                </li>
            </ul>
        </div>
    @endif
@endsection