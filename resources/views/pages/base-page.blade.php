@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">{{$page->title_eng}}</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
        </div>
        <hr class="border border-light dropdown-divider p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-grey rounded p-2">
            <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Home</a></li>
            {{-- <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="">Pages</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">{{$page->title_eng}}</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-2 p-md-5">
            <h2 class="fw-bold text-center"></h4>
            <div class="row mb-5">
                <div class="col-sm-12 col-md-6 text-md-center">
                    <p class="card-text text-center text-md-start small">
                        <span class="text-muted">By Admin</span>
                        <span class="fw-bold mx-2"> | </span>
                        <span class="text-muted">on {{ date('d M Y', strtotime($page->created_at)) }}</span>
                    </p>
                </div>
                <div class="col-sm-12 col-md-6">
                </div>
            </div>
            <embed src="file_name.pdf" width="200" height="200px" hidden/>
            <img src="https://images.unsplash.com/photo-1617719787657-81dd0ec1d3ce?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8UzRNS0xBc0JCNzR8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
            {!! $page->content_eng !!} 
            @if($page->file != NULL)
            <h5 class="text-start fw-bold mt-5">Attachment</h5>
            <a class="text-start text-light text-decoration-none" href="{{$page->file}}" target="_blank"><p><i class="fas fa-download"></i> Download Attachment</p></a>
            @endif   
        </div>
        {{-- <div class="container px-md-5 mt-4">
            <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-4 p-md-5">
                <div class="row">
                    <h3 class="text-uppercase fw-bold text-center mb-5">Detailnya</h3>
                    <div class="col-sm-12 col-md-6">
                        <span class="text-start fw-bold">Tanggal</span>
                        <p class="text-start"><i class="fas fa-calendar-alt"></i> 01 Jan 2021</p>
                        <span class="text-start fw-bold">Time</span>
                        <p class="text-start"><i class="fas fa-clock"></i> 12:20 WITA</p>
                        <span class="text-start fw-bold">Category</span>
                        <p class="text-start"><i class="fas fa-list"></i> Blank Page</p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <span class="text-start fw-bold">Location</span>
                        <p class="text-start"><i class="fas fa-map-marker-alt"></i> Bali</p>
                        <span class="text-start fw-bold">Link</span>
                        <p class="text-start"><i class="fas fa-external-link-square-alt"></i> www.ft.unud.ac.id</p>
                        <span class="text-start fw-bold">Attachment</span>
                        <a class="text-start text-light text-decoration-none link-danger" href="" target="_blank"><p><i class="fas fa-download"></i> Download Attachment</p></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">{{$page->title_ina}}</h1>
                <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Beranda</a></li>
                {{-- <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="">Pages</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">{{$page->title_ina}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-2 p-md-5">
                <h2 class="fw-bold text-center"></h4>
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6 text-md-center">
                        <p class="card-text text-center text-md-start small">
                            <span class="text-muted">By Admin</span>
                            <span class="fw-bold mx-2"> | </span>
                            <span class="text-muted">pada {{ date('d M Y', strtotime($page->created_at)) }}</span>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                    </div>
                </div>
                <embed src="file_name.pdf" width="200" height="200px" hidden/>
                <img src="https://images.unsplash.com/photo-1617719787657-81dd0ec1d3ce?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8UzRNS0xBc0JCNzR8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                {!! $page->content_ina !!}
                @if($page->file != NULL)
                <h5 class="text-start fw-bold mt-5">Lampiran</h5>
                <a class="text-start text-light text-decoration-none" href="{{$page->file}}" target="_blank"><p><i class="fas fa-download"></i> Unduh Lampiran</p></a>
                @endif    
            </div>
            {{-- <div class="container px-md-5 mt-4">
                <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-4 p-md-5">
                    <div class="row">
                        <h3 class="text-uppercase fw-bold text-center mb-5">Detailnya</h3>
                        <div class="col-sm-12 col-md-6">
                            <span class="text-start fw-bold">Tanggal</span>
                            <p class="text-start"><i class="fas fa-calendar-alt"></i> 01 Jan 2021</p>
                            <span class="text-start fw-bold">Time</span>
                            <p class="text-start"><i class="fas fa-clock"></i> 12:20 WITA</p>
                            <span class="text-start fw-bold">Category</span>
                            <p class="text-start"><i class="fas fa-list"></i> Blank Page</p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <span class="text-start fw-bold">Location</span>
                            <p class="text-start"><i class="fas fa-map-marker-alt"></i> Bali</p>
                            <span class="text-start fw-bold">Link</span>
                            <p class="text-start"><i class="fas fa-external-link-square-alt"></i> www.ft.unud.ac.id</p>
                            <span class="text-start fw-bold">Attachment</span>
                            <a class="text-start text-light text-decoration-none link-danger" href="" target="_blank"><p><i class="fas fa-download"></i> Download Attachment</p></a>
                        </div>
                    </div>
                </div>
            </div> --}}
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