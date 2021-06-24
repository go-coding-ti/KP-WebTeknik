@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light">{{$berita->title_eng}}</h1>
            </div>
            <hr class="border border-light dropdown-divider p-0 mt-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                    <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Berita", app()->getLocale() ) }}">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$berita->title_eng}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <img src="{{$berita->thumbnail}}" class="img-fluid w-100 ratio ratio-16x9 mb-5" alt="...">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="card border-0 bg-grey text-light p-3">
                        <h2 class="fw-bold text-center">{{$berita->title_eng}}</h2>
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <p class="card-text text-start small">
                                    <span class="text-muted">Diposting Oleh Admin A</span>
                                    <span class="text-muted mx-2"> | </span>
                                    <span class="text-muted">Pada {{ date('d M Y', strtotime($berita->tanggal_publish)) }}</span>
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <p class="card-text small text-start text-md-end">
                                    <span class="text-muted"><i class="fas fa-eye"></i> {{$berita->read_count}} kali</span>
                                </p>
                            </div>
                        </div>
                        <embed src="file_name.pdf" width="200" height="200px" hidden/>
                        <img src="https://images.unsplash.com/photo-1617719787657-81dd0ec1d3ce?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8UzRNS0xBc0JCNzR8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="rounded" alt="..." width="400" hidden>
                        {!! $berita->content_ina !!}
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card bg-grey text-light p-3">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap my-auto mb-4">
                            <h1 class="h4 fw-bold border-2 border-bottom border-danger p-2">Berita Lainnya</h1>
                        </div>
                        @foreach ($beritas->take(5) as $berita)
                            <div class="col my-2">
                                <div class="card bg-grey text-light h-100">
                                    <img src="{{$berita->thumbnail}}" class="card-img-top" alt="berita-lainya-{{ $loop->iteration }}">
                                    <div class="card-body">
                                        <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="text-decoration-none mb-3 btn btn-sm btn-danger page-scroll">{{$berita->kategori->kategori_eng}}</a>
                                        <h5 class="card-title text-center">
                                            <a href="{{ route("Detail Berita", ['language'=>app()->getLocale(), 'title_slug' => $berita->title_slug]) }}" class="text-decoration-none link-light fw-bold page-scroll">{{$berita->title_eng}}</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-muted"><i class="fas fa-calendar"></i> {{ date('d M Y', strtotime($berita->tanggal_publish)) }}</small>
                                            </div>
                                            <div class="col-6 text-center">
                                                <small class="text-muted"><i class="fas fa-user"></i> Oleh Admin A</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light">{{$berita->title_ina}}</h1>
            </div>
            <hr class="border border-light dropdown-divider p-0 mt-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                    <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Berita", app()->getLocale() ) }}">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$berita->title_ina}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <img src="{{$berita->thumbnail}}" class="img-fluid w-100 ratio ratio-16x9 mb-5" alt="...">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="card border-0 bg-grey text-light p-3">
                        <h2 class="fw-bold text-center">{{$berita->title_ina}}</h2>
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <p class="card-text text-start small">
                                    <span class="text-muted">Diposting Oleh Admin A</span>
                                    <span class="text-muted mx-2"> | </span>
                                    <span class="text-muted">Pada {{ date('d M Y', strtotime($berita->tanggal_publish)) }}</span>
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <p class="card-text small text-start text-md-end">
                                    <span class="text-muted"><i class="fas fa-eye"></i> {{$berita->read_count}} kali</span>
                                </p>
                            </div>
                        </div>
                        <embed src="file_name.pdf" width="200" height="200px" hidden/>
                        <img src="https://images.unsplash.com/photo-1617719787657-81dd0ec1d3ce?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8UzRNS0xBc0JCNzR8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="rounded" alt="..." width="400" hidden>
                        {!! $berita->content_ina !!}
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card bg-grey text-light p-3">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap my-auto mb-4">
                            <h1 class="h4 fw-bold border-2 border-bottom border-danger p-2">Berita Lainnya</h1>
                        </div>
                        @foreach ($beritas->take(3) as $berita)
                            <div class="col my-2">
                                <div class="card bg-grey text-light h-100">
                                    <img src="{{$berita->thumbnail}}" class="card-img-top" alt="berita-lainya-{{ $loop->iteration }}">
                                    <div class="card-body">
                                        <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="text-decoration-none mb-3 btn btn-sm btn-danger page-scroll">{{$berita->kategori->kategori_ina}}</a>
                                        <h5 class="card-title text-center">
                                            <a href="{{ route("Detail Berita", ['language'=>app()->getLocale(), 'title_slug' => $berita->title_slug]) }}" class="text-decoration-none link-light fw-bold page-scroll">{{$berita->title_ina}}</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-muted"><i class="fas fa-calendar"></i> {{ date('d M Y', strtotime($berita->tanggal_publish)) }}</small>
                                            </div>
                                            <div class="col-6 text-center">
                                                <small class="text-muted"><i class="fas fa-user"></i> Oleh Admin A</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(e){
            $("p").css('color', '');
            $("span").css('color', '');
        });
    </script>
@endsection
