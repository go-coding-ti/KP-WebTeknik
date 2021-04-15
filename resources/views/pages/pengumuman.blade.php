@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">All Events</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
        </div>
        <hr class="border border-light dropdown-divider">
    </div>
    <div class="container">
        <div class="row d-flex justify-content-md-center">
            <div class="col-12">
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
                <ul class="pagination bg-dark justify-content-center mt-5">
                    @if($all_pengumumans->lastPage() > 1)
                    <li class="page-item">
                        <!--pagination-->
                        <ul class="pagination bg-dark">
                          <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($all_pengumumans->currentPage() == 1) style="display: none" @endif href="{{ $all_pengumumans->url($all_pengumumans->currentPage()-1) }}">Previous</a>
                            @for($i=1; $i <= $all_pengumumans->lastPage(); $i++)
                              <li class="page-item"><a @if($all_pengumumans->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $all_pengumumans->url($i)}}">{{ $i }}</a></li>
                            @endfor
                          <a role="button" href="{{ $all_pengumumans->url($all_pengumumans->currentPage()+1) }}" @if($all_pengumumans->currentPage() == $all_pengumumans->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
                        </ul>
                      </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Semua Pengumuman</h1>
                <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row d-flex justify-content-md-center">
                <div class="col-12">
                    @foreach($all_pengumumans as $pengumuman)
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
                    <ul class="pagination bg-dark justify-content-center mt-5">
                        @if($all_pengumumans->lastPage() > 1)
                        <li class="page-item">
                            <!--pagination-->
                            <ul class="pagination bg-dark">
                              <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($all_pengumumans->currentPage() == 1) style="display: none" @endif href="{{ $all_pengumumans->url($all_pengumumans->currentPage()-1) }}">Previous</a>
                                @for($i=1; $i <= $all_pengumumans->lastPage(); $i++)
                                  <li class="page-item"><a @if($all_pengumumans->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $all_pengumumans->url($i)}}">{{ $i }}</a></li>
                                @endfor
                              <a role="button" href="{{ $all_pengumumans->url($all_pengumumans->currentPage()+1) }}" @if($all_pengumumans->currentPage() == $all_pengumumans->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
                            </ul>
                          </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection