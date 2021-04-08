@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Galery</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1617435824047-e85931b1a0bb?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDM1fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                <div class="card-body my-auto">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1495709276535-bb4928b7b233?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDU2fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="...">
                                <div class="card-body">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1509109325642-f24fe47683f9?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDk3fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                <div class="card-body my-auto">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Start --}}
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-grey text-light">
                        <div class="modal-header border border-dark">
                            <h5 class="modal-title fw-bold fs-4" id="staticBackdropLabel">Galery</h5>
                            <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://images.unsplash.com/photo-1509109325642-f24fe47683f9?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDk3fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        </div>
                        <div class="modal-footer d-block border border-dark my-auto">
                            <p class="text-center my-auto fs-5">Deskripsi Singkat Dari Fotonya</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal End --}}
        </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Galeri</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1617435824047-e85931b1a0bb?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDM1fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                <div class="card-body my-auto">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1617717663134-5b4cb851be49?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1495709276535-bb4928b7b233?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDU2fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="...">
                                <div class="card-body">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="https://images.unsplash.com/photo-1509109325642-f24fe47683f9?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDk3fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                <div class="card-body my-auto">
                                    <p class="text-center my-auto">Deskripsi Singkat Dari Fotonya</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Start --}}
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-grey text-light">
                        <div class="modal-header border border-dark">
                            <h5 class="modal-title fw-bold fs-4" id="staticBackdropLabel">Galery</h5>
                            <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://images.unsplash.com/photo-1509109325642-f24fe47683f9?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDk3fHhIeFlUTUhMZ09jfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        </div>
                        <div class="modal-footer d-block border border-dark my-auto">
                            <p class="text-center my-auto fs-5">Deskripsi Singkat Dari Fotonya</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal End --}}
        </div>
    @endif
@endsection