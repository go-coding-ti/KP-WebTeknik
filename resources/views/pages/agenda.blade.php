@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
<div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
    <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Semua Agenda</h1>
    <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
</div>
<div class="container">
    <div class="row">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card bg-grey text-light">
                    <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row my-auto">
                            <div class="col-3 my-auto mx-auto">
                                <span class="my-auto fw-bold fs-2 text-center d-block">12</span>
                                <p class="my-auto fs-4 text-center d-block">Mar</p>
                            </div>
                            <div class="col-9 my-auto g-0 p-0 m-0">
                                <p><a href="{{ route("Detail Agenda", app()->getLocale() ) }}" class="my-auto text-decoration-none link-light card-title text-uppercase fs-5 fw-bold mb-4">Kategori Agenda</a></p>
                                <span class="my-auto small text-danger"><i class="fas fa-clock"></i> 12.00 - 15.00 WITA</span>
                                <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> Aula SWASTIKA</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-grey text-light">
                    <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row my-auto">
                            <div class="col-3 my-auto mx-auto">
                                <span class="my-auto fw-bold fs-2 text-center d-block">12</span>
                                <p class="my-auto fs-4 text-center d-block">Mar</p>
                            </div>
                            <div class="col-9 my-auto g-0 p-0 m-0">
                                <p><a href="{{ route("Detail Agenda", app()->getLocale() ) }}" class="my-auto text-decoration-none link-light card-title text-uppercase fs-5 fw-bold mb-4">Kategori Agenda</a></p>
                                <span class="my-auto small text-danger"><i class="fas fa-clock"></i> 12.00 - 15.00 WITA</span>
                                <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> Aula SWASTIKA</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-grey text-light">
                    <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row my-auto">
                            <div class="col-3 my-auto mx-auto">
                                <span class="my-auto fw-bold fs-2 text-center d-block">12</span>
                                <p class="my-auto fs-4 text-center d-block">Mar</p>
                            </div>
                            <div class="col-9 my-auto g-0 p-0 m-0">
                                <p><a href="{{ route("Detail Agenda", app()->getLocale() ) }}" class="my-auto text-decoration-none link-light card-title text-uppercase fs-5 fw-bold mb-4">Kategori Agenda</a></p>
                                <span class="my-auto small text-danger"><i class="fas fa-clock"></i> 12.00 - 15.00 WITA</span>
                                <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> Aula SWASTIKA</span></p>
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
        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Semua Agenda</h1>
        <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
        </div>
        <hr class="border border-light dropdown-divider">
    </div>
    <div class="container">
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card bg-grey text-light">
                        <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row my-auto">
                                <div class="col-3 my-auto mx-auto">
                                    <span class="my-auto fw-bold fs-2 text-center d-block">12</span>
                                    <p class="my-auto fs-4 text-center d-block">Mar</p>
                                </div>
                                <div class="col-9 my-auto g-0 p-0 m-0">
                                    <p><a href="{{ route("Detail Agenda", app()->getLocale() ) }}" class="my-auto text-decoration-none link-light card-title text-uppercase fs-5 fw-bold mb-4">Kategori Agenda</a></p>
                                    <span class="my-auto small text-danger"><i class="fas fa-clock"></i> 12.00 - 15.00 WITA</span>
                                    <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> Aula SWASTIKA</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-grey text-light">
                        <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row my-auto">
                                <div class="col-3 my-auto mx-auto">
                                    <span class="my-auto fw-bold fs-2 text-center d-block">12</span>
                                    <p class="my-auto fs-4 text-center d-block">Mar</p>
                                </div>
                                <div class="col-9 my-auto g-0 p-0 m-0">
                                    <p><a href="{{ route("Detail Agenda", app()->getLocale() ) }}" class="my-auto text-decoration-none link-light card-title text-uppercase fs-5 fw-bold mb-4">Kategori Agenda</a></p>
                                    <span class="my-auto small text-danger"><i class="fas fa-clock"></i> 12.00 - 15.00 WITA</span>
                                    <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> Aula SWASTIKA</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-grey text-light">
                        <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row my-auto">
                                <div class="col-3 my-auto mx-auto">
                                    <span class="my-auto fw-bold fs-2 text-center d-block">12</span>
                                    <p class="my-auto fs-4 text-center d-block">Mar</p>
                                </div>
                                <div class="col-9 my-auto g-0 p-0 m-0">
                                    <p><a href="{{ route("Detail Agenda", app()->getLocale() ) }}" class="my-auto text-decoration-none link-light card-title text-uppercase fs-5 fw-bold mb-4">Kategori Agenda</a></p>
                                    <span class="my-auto small text-danger"><i class="fas fa-clock"></i> 12.00 - 15.00 WITA</span>
                                    <p class="my-auto"><span class="small text-danger"><i class="fas fa-map-marker-alt"></i> Aula SWASTIKA</span></p>
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