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
                @if($agendas->lastPage() > 1)
                <li class="page-item">
                    <!--pagination-->
                    <ul class="pagination bg-dark">
                      <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($agendas->currentPage() == 1) style="display: none" @endif href="{{ $agendas->url($agendas->currentPage()-1) }}">Previous</a>
                        @for($i=1; $i <= $agendas->lastPage(); $i++)
                          <li class="page-item"><a @if($agendas->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $agendas->url($i)}}">{{ $i }}</a></li>
                        @endfor
                      <a role="button" href="{{ $agendas->url($agendas->currentPage()+1) }}" @if($agendas->currentPage() == $agendas->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
                    </ul>
                  </li>
                @endif
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
                @if($agendas->lastPage() > 1)
                <li class="page-item">
                    <!--pagination-->
                    <ul class="pagination bg-dark">
                      <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($agendas->currentPage() == 1) style="display: none" @endif href="{{ $agendas->url($agendas->currentPage()-1) }}">Previous</a>
                        @for($i=1; $i <= $agendas->lastPage(); $i++)
                          <li class="page-item"><a @if($agendas->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $agendas->url($i)}}">{{ $i }}</a></li>
                        @endfor
                      <a role="button" href="{{ $agendas->url($agendas->currentPage()+1) }}" @if($agendas->currentPage() == $agendas->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
                    </ul>
                  </li>
                @endif
            </ul>
        </div>
    @endif
@endsection