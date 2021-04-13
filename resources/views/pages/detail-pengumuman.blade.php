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
                    {{-- <div class="col-sm-12 col-md-6">
                        <p class="card-text small text-center text-md-end text-end">
                            <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                            <span class="fw-bold mx-2"> | </span>
                            <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                        </p>
                    </div> --}}
                </div>
                <embed src="file_name.pdf" width="200" height="200px" hidden/>
                <img src="{{$pengumuman->thumbnail}}" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                {!! $pengumuman->content_eng !!}
                @if($pengumuman->lampiran != NULL)
                <h5 class="text-start fw-bold mt-5">Attachment</h5>
                <a class="text-start text-light" href="{{$pengumuman->lampiran}}"><p><i class="fas fa-download"></i> Download Attachment</p></a>
                @endif    
            </div>
            <hr class="border border-dark dropdown-divider mt-5 mb-4 mx-5">
            <div class="mx-md-5 mx-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Another Announcement</h1>
                </div>
                <hr class="border border-light dropdown-divider p-0">
                @foreach($pengumumans as $pengumuman)
                <div class="card bg-grey text-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-5 my-auto">
                            <img src="{{$pengumuman->kategori->icon}}" class="w-100 h-100" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">{{$pengumuman->title_eng}}</a></h5>
                                <p class="card-text text-start small">
                                    <span class="text-muted">By Admin A</span>
                                    <span class="fw-bold mx-2"> | </span>
                                    <span class="text-muted">Posted on {{ date('d M Y', strtotime($pengumuman->created_at)) }}</span>
                                </p>
                                {{-- <p class="card-text">Deskripsi singkat dari pengumuman yang ditampilkan nantinya pada list pengumuman</p>
                                <p class="card-text small text-end">
                                    <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                    <span class="fw-bold mx-2"> | </span>
                                    <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                </p> --}}
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
            {{-- <img src="{{$pengumuman->kategori->icon}}" alt="..."> --}}
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
                        {{-- <div class="col-sm-12 col-md-6">
                            <p class="card-text small text-center text-md-end text-end">
                                <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                <span class="fw-bold mx-2"> | </span>
                                <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                            </p>
                        </div> --}}
                    </div>
                    <embed src="file_name.pdf" width="200" height="200px" hidden/>
                    <img src="{{$pengumuman->thumbnail}}" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                    {!! $pengumuman->content_ina !!}
                    @if($pengumuman->lampiran != NULL)
                    <h5 class="text-start fw-bold mt-5">Lampiran</h5>
                    <a class="text-start text-light" href="{{$pengumuman->lampiran}}"><p><i class="fas fa-download"></i> Unduh Lampiran</p></a>
                    @endif    
                </div>
                <hr class="border border-dark dropdown-divider mt-5 mb-4 mx-5">
                <div class="mx-md-5 mx-2">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman Lainya</h1>
                    </div>
                    <hr class="border border-light dropdown-divider p-0">
                    @foreach($pengumumans as $pengumuman)
                    <div class="card bg-grey text-light mb-3">
                        <div class="row g-0">
                            <div class="col-md-5 my-auto">
                                <img src="{{$pengumuman->kategori->icon}}" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">{{$pengumuman->title_ina}}</a></h5>
                                    <p class="card-text text-start small">
                                        <span class="text-muted">Oleh Admin A</span>
                                        <span class="fw-bold mx-2"> | </span>
                                        <span class="text-muted">Diposting pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</span>
                                    </p>
                                    {{-- <p class="card-text">Deskripsi singkat dari pengumuman yang ditampilkan nantinya pada list pengumuman</p>
                                    <p class="card-text small text-end">
                                        <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                        <span class="fw-bold mx-2"> | </span>
                                        <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                    </p> --}}
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