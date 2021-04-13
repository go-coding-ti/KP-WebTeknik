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
            <div class="col-md-12 col-lg-8">
                @foreach($pengumumans as $pengumuman)
                <div class="card bg-grey text-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-5 my-auto">
                            <img src="{{$pengumuman->kategori->icon}}" class="w-100 h-100" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
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
            <div class="col-md-6 col-lg-4">
                <div class="card bg-grey px-3">
                    <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman Lainnya</h1>
                    <div class="mb-3 border-0 border-bottom">
                        <div class="row g-0 py-2">
                            <div class="col-5 my-auto">
                                <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman Lainya</a></h6>
                                    <p class="card-text small">
                                    <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                    <span class="text-muted mx-2"> | </span>
                                    <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 border-0 border-bottom">
                        <div class="row g-0 py-2">
                            <div class="col-5 my-auto">
                                <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman Lainya</a></h6>
                                    <p class="card-text small">
                                    <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                    <span class="text-muted mx-2"> | </span>
                                    <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-md-12 col-lg-8">
                    @foreach($pengumumans as $pengumuman)
                    <div class="card bg-grey text-light mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 text-center">
                                <img src="{{$pengumuman->kategori->icon}}" style="height: 8em" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body text-sm-center text-md-start">
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
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-grey px-3">
                        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman Lainnya</h1>
                        <div class="mb-3 border-0 border-bottom">
                            <div class="row g-0 py-2">
                                <div class="col-5 my-auto">
                                    <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                                </div>
                                <div class="col-7">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman Lainya</a></h6>
                                        <p class="card-text small">
                                        <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                        <span class="text-muted mx-2"> | </span>
                                        <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 border-0 border-bottom">
                            <div class="row g-0 py-2">
                                <div class="col-5 my-auto">
                                    <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                                </div>
                                <div class="col-7">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman Lainya</a></h6>
                                        <p class="card-text small">
                                        <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                        <span class="text-muted mx-2"> | </span>
                                        <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection