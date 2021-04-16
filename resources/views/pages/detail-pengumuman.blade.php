@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">{{$pengumuman->title_eng}}</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Pengumuman", app()->getLocale() ) }}">Back</a></h1>
        </div>
        <hr class="border border-light dropdown-divider p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-grey rounded p-2">
            <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Pengumuman", app()->getLocale() ) }}">Announcement</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$pengumuman->title_eng}}</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5 mb-5">
        {{-- <img src="{{$pengumuman->kategori->icon}}" alt="..."> --}}
        <div class="container px-md-5">
            <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-2 p-md-5">
                <h2 class="fw-bold text-center">{{$pengumuman->title_eng}}</h4>
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6 text-md-center">
                        <p class="card-text text-center text-md-start small">
                            <span class="text-muted">By Admin A</span>
                            <span class="fw-bold mx-2"> | </span>
                            <span class="text-muted">On {{ date('d M Y', strtotime($pengumuman->created_at)) }}</span>
                        </p>
                    </div>
                </div>
                <embed src="file_name.pdf" width="200" height="200px" hidden/>
                <img src="{{$pengumuman->thumbnail}}" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                {!! $pengumuman->content_eng !!}
                @if($pengumuman->lampiran != NULL)
                <h5 class="text-start fw-bold mt-5">Attachment</h5>
                <a class="text-start text-light text-decoration-none" href="{{$pengumuman->lampiran}}" target="_blank"><p><i class="fas fa-download"></i> Download Attachment</p></a>
                @endif    
            </div>
            <hr class="border border-dark dropdown-divider mt-5 mb-4 mx-5">
            <div class="mx-md-5 mx-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
                    <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Another Announcement</h1>
                    <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a>
                </div>
                <hr class="border border-light dropdown-divider mb-3 mt-0 pt-0">
                @foreach($pengumumans as $pengumuman)
                <div class="card bg-grey text-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-3 text-center p-3">
                            <img src="{{$pengumuman->kategori->icon}}" style="height: 8em" alt="...">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body text-center text-md-start">
                                <a href="{{ route("Pengumuman Kategori", ['language'=>app()->getLocale(), 'kategori' => $pengumuman->kategori->kategori_lower]) }}" class="btn btn-sm my-1 bg-red text-light fw-bold text-uppercase"><small>{{$pengumuman->kategori->kategori_ina}}</small></a>
                                <h5 class="card-title fw-bold"><a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="text-decoration-none link-light">{{$pengumuman->title_eng}}</a></h5>
                                <p class="card-text small"><span class="text-muted">By Admin A</span>
                                    <span class="text-muted"> | </span>
                                    <span class="text-muted">Posted on {{ date('d M Y', strtotime($pengumuman->created_at)) }}</span></p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <hr class="border border-dark dropdown-divider mt-5 mx-5">
        </div>
    </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">{{$pengumuman->title_ina}}</h1>
                <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Pengumuman", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Beranda</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Pengumuman", app()->getLocale() ) }}">Pengumuman</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$pengumuman->title_ina}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <div class="container px-md-5">
                <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-2 p-md-5">
                    <h2 class="fw-bold text-center">{{$pengumuman->title_ina}}</h4>
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-6 text-md-center">
                            <p class="card-text text-center text-md-start small">
                                <span class="text-muted">Oleh Admin A</span>
                                <span class="fw-bold mx-2"> | </span>
                                <span class="text-muted">Pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</span>
                            </p>
                        </div>
                    </div>
                    <embed src="file_name.pdf" width="200" height="200px" hidden/>
                    <img src="{{$pengumuman->thumbnail}}" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                    {!! $pengumuman->content_ina !!}
                    @if($pengumuman->lampiran != NULL)
                    <h5 class="text-start fw-bold mt-5">Lampiran</h5>
                    <a class="text-start text-light" href="{{$pengumuman->lampiran}}" target="_blank"><p><i class="fas fa-download"></i> Unduh Lampiran</p></a>
                    @endif    
                </div>
                <hr class="border border-dark dropdown-divider mt-5 mb-4 mx-5">
                <div class="mx-md-5 mx-2">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
                        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman Lainnya</h1>
                        <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a>
                    </div>
                    <hr class="border border-light dropdown-divider mb-3 mt-0 pt-0">
                    @foreach($pengumumans as $pengumuman)
                    <div class="card bg-grey text-light mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 text-center p-3">
                                <img src="{{$pengumuman->kategori->icon}}" style="height: 8em" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body text-center text-md-start">
                                    <a href="{{ route("Pengumuman Kategori", ['language'=>app()->getLocale(), 'kategori' => $pengumuman->kategori->kategori_lower]) }}" class="btn btn-sm my-1 bg-red text-light fw-bold text-uppercase"><small>{{$pengumuman->kategori->kategori_ina}}</small></a>
                                    <h5 class="card-title fw-bold"><a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="text-decoration-none link-light">{{$pengumuman->title_ina}}</a></h5>
                                    <p class="card-text small"><span class="text-muted">Oleh Admin A</span>
                                        <span class="text-muted"> | </span>
                                        <span class="text-muted">Diposting pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</span></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr class="border border-dark dropdown-divider mt-5 mx-5">
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