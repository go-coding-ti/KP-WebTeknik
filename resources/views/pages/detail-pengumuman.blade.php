@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light">{{$pengumuman->title_eng}}</h1>
            </div>
            <hr class="border border-light dropdown-divider p-0 mt-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Pengumuman", app()->getLocale() ) }}">Announcement</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$pengumuman->title_eng}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="card border-0 bg-grey text-light p-3">
                        <h2 class="fw-bold text-center">{{$pengumuman->title_eng}}</h2>
                        <div class="row mb-5">
                            <div class="col-12">
                                <p class="card-text text-start small">
                                    <span class="text-muted">By Admin A</span>
                                    <span class="text-muted mx-2"> | </span>
                                    <span class="text-muted">On {{ date('d M Y', strtotime($pengumuman->tanggal_publish)) }}</span>
                                </p>
                            </div>
                        </div>
                        <embed src="file_name.pdf" width="200" height="200px" hidden/>
                        <img src="{{$pengumuman->thumbnail}}" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                        {!! $pengumuman->content_eng !!}
                        @if($pengumuman->lampiran != NULL)
                            <h5 class="text-start fw-bold mt-5">Attachment</h5>
                            <a class="text-start text-light" href="{{$pengumuman->lampiran}}" target="_blank"><p><i class="fas fa-download"></i> Download Attachment</p></a>
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card bg-grey text-light p-3">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap my-auto mb-4">
                            <h1 class="h4 fw-bold border-2 border-bottom border-danger p-2">Another Announcement</h1>
                        </div>
                        @foreach($pengumumans->take(3) as $pengumuman)
                            <div class="col my-2">
                                <div class="card bg-grey text-light">
                                    <img src="{{$pengumuman->kategori->icon}}" class="mx-auto" style="height: 8em; width: 8em" alt="another-announcement-{{ $loop->iteration }}">
                                    <div class="card-body">
                                        <a href="{{ route("Pengumuman Kategori", ['language'=>app()->getLocale(), 'kategori' => $pengumuman->kategori->kategori_lower]) }}" class="text-decoration-none mb-3 btn btn-sm btn-danger page-scroll">{{$pengumuman->kategori->kategori_eng}}</a>
                                        <h5 class="card-title text-center">
                                            <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="text-decoration-none link-light fw-bold page-scroll">{{$pengumuman->title_eng}}</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-muted"><i class="fas fa-calendar"></i> {{ date('d M Y', strtotime($pengumuman->created_at)) }}</small>
                                            </div>
                                            <div class="col-6 text-center">
                                                <small class="text-muted"><i class="fas fa-user"></i> By Admin A</small>
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
                <h1 class="h4 fw-bold text-light">{{$pengumuman->title_ina}}</h1>
            </div>
            <hr class="border border-light dropdown-divider p-0 mt-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                    <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Pengumuman", app()->getLocale() ) }}">Pengumuman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$pengumuman->title_ina}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="card border-0 bg-grey text-light p-3">
                        <h2 class="fw-bold text-center">{{$pengumuman->title_ina}}</h2>
                        <div class="row mb-5">
                            <div class="col-12">
                                <p class="card-text text-start small">
                                    <span class="text-muted">Diposting Oleh Admin A</span>
                                    <span class="text-muted mx-2"> | </span>
                                    <span class="text-muted">Pada {{ date('d M Y', strtotime($pengumuman->tanggal_publish)) }}</span>
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
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card bg-grey text-light p-3">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap my-auto mb-4">
                            <h1 class="h4 fw-bold border-2 border-bottom border-danger p-2">Pengumuman Lainnya</h1>
                        </div>
                        @foreach($pengumumans->take(3) as $pengumuman)
                            <div class="col my-2">
                                <div class="card bg-grey text-light">
                                    <img src="{{$pengumuman->kategori->icon}}" class="mx-auto" style="height: 8em; width: 8em" alt="pengumuman-lainya-{{ $loop->iteration }}">
                                    <div class="card-body">
                                        <a href="{{ route("Pengumuman Kategori", ['language'=>app()->getLocale(), 'kategori' => $pengumuman->kategori->kategori_lower]) }}" class="text-decoration-none mb-3 btn btn-sm btn-danger page-scroll">{{$pengumuman->kategori->kategori_ina}}</a>
                                        <h5 class="card-title text-center">
                                            <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="text-decoration-none link-light fw-bold page-scroll">{{$pengumuman->title_ina}}</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <small class="text-muted"><i class="fas fa-calendar"></i> {{ date('d M Y', strtotime($pengumuman->created_at)) }}</small>
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