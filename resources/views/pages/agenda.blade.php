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
    <div class="row">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($agendas as $agenda)
            <div class="col">
                <div class="card bg-grey text-light">
                    <img src="{{$agenda->thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row my-auto">
                            <div class="col-3 my-auto mx-auto">
                                <span class="my-auto fw-bold fs-2 text-center d-block">{{ date('d', strtotime($agenda->tanggal)) }}</span>
                                <p class="my-auto fs-4 text-center d-block">{{ date('M', strtotime($agenda->tanggal)) }}</p>
                            </div>
                            <div class="col-9 my-auto g-0 p-0 m-0">
                                <p><a href="{{ route("Detail Agenda", ['language'=>app()->getLocale(), 'title_slug' => $agenda->title_slug]) }}" class="my-auto text-decoration-none link-light card-title fs-5 fw-bold mb-4">{{$agenda->title_eng}}</a></p>
                                <span class="my-auto small text-danger"><i class="fas fa-clock"></i> {{ date('H:i', strtotime($agenda->waktu_mulai)) }} - {{ date('H:i', strtotime($agenda->waktu_akhir)) }} WITA</span>
                                <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> {{$agenda->lokasi}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
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
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($agendas as $agenda)
                <div class="col">
                    <div class="card bg-grey text-light">
                        <img src="{{$agenda->thumbnail}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row my-auto">
                                <div class="col-3 my-auto mx-auto">
                                    <span class="my-auto fw-bold fs-2 text-center d-block">{{ date('d', strtotime($agenda->tanggal)) }}</span>
                                    <p class="my-auto fs-4 text-center d-block">{{ date('M', strtotime($agenda->tanggal)) }}</p>
                                </div>
                                <div class="col-9 my-auto g-0 p-0 m-0">
                                    <p><a href="{{ route("Detail Agenda", ['language'=>app()->getLocale(), 'title_slug' => $agenda->title_slug]) }}" class="my-auto text-decoration-none link-light card-title fs-5 fw-bold mb-4">{{$agenda->title_ina}}</a></p>
                                    <span class="my-auto small text-danger"><i class="fas fa-clock"></i> {{ date('H:i', strtotime($agenda->waktu_mulai)) }} - {{ date('H:i', strtotime($agenda->waktu_akhir)) }} WITA</span>
                                    <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> {{$agenda->lokasi}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
@endsection