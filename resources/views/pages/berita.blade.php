@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">All News</h1>
                <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row d-flex justify-content-md-center">
                <div class="col-12">
                    <div class="card-group">
                        <div class="row row-cols-1 row-cols-lg-3 px-3">
                          @foreach($beritas as $berita)
                            <div class="col p-0 px-1 mb-3">
                              <div class="card bg-grey hover border-0 h-100">
                                <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="link-light text-decoration-none ">
                                  <img src="{{$berita->thumbnail}}" class="card-img-top mb-1" alt="...">
                                  <div class="card-body p-3">
                                    <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="btn btn-sm btn-danger p-1 text-uppercase my-1"><small>{{$berita->kategori->kategori_eng}}</small></a>
                                    <p class="card-text h5 fw-bold mt-3"><a href="{{ route("Detail Berita", ['language'=>app()->getLocale(), 'title_slug' => $berita->title_slug]) }}" class="text-decoration-none link-light link-hover">{{$berita->title_eng}}</a></p>
                                  </div>
                                </a>
                                <div class="card-footer p-3 text-end border-0">
                                  <small class="text-muted">Posted on {{ date('d M Y', strtotime($berita->tanggal_publish)) }}</small>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
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
            </div>
        </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Semua Berita</h1>
                <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row d-flex justify-content-md-center">
                <div class="col-12">
                    <div class="card-group">
                        <div class="row row-cols-1 row-cols-lg-3 px-3">
                          @foreach($beritas as $berita)
                            <div class="col p-0 px-1 mb-3">
                              <div class="card bg-grey hover border-0 h-100">
                                <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="link-light text-decoration-none ">
                                  <img src="{{$berita->thumbnail}}" class="card-img-top mb-1" alt="...">
                                  <div class="card-body p-3">
                                    <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="btn btn-sm btn-danger p-1 text-uppercase my-1"><small>{{$berita->kategori->kategori_eng}}</small></a>
                                    <p class="card-text h5 fw-bold mt-3"><a href="{{ route("Detail Berita", ['language'=>app()->getLocale(), 'title_slug' => $berita->title_slug]) }}" class="text-decoration-none link-light link-hover">{{$berita->title_eng}}</a></p>
                                  </div>
                                </a>
                                <div class="card-footer p-3 text-end border-0">
                                  <small class="text-muted">Posted on {{ date('d M Y', strtotime($berita->tanggal_publish)) }}</small>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
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
            </div>
        </div>
    @endif
@endsection