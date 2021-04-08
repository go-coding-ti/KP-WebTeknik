@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Announcement</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Pengumuman", app()->getLocale() ) }}">Back</a></h1>
        </div>
        <hr class="border border-light dropdown-divider p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-grey rounded p-2">
            <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Pengumuman", app()->getLocale() ) }}">Announcement</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5 mb-5">
        <img src="https://images.unsplash.com/photo-1584581893475-7e64f711bdcf?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDEwOXxKcGc2S2lkbC1Ia3x8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid w-100 ratio ratio-16x9 mb-5" alt="...">
        <div class="container px-md-5">
            <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-2 p-md-5">
                <h2 class="fw-bold text-center">Judul Dari Berita Yang Dipilih Sebelumnya</h4>
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6 text-md-center">
                        <p class="card-text text-center text-md-start small">
                            <span class="text-muted">Oleh Admin A</span>
                            <span class="fw-bold mx-2"> | </span>
                            <span class="text-muted">Pada 15-Mar-20</span>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="card-text small text-center text-md-end text-end">
                            <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                            <span class="fw-bold mx-2"> | </span>
                            <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                        </p>
                    </div>
                </div>
                <embed src="file_name.pdf" width="200" height="200px" hidden/>
                <img src="https://images.unsplash.com/photo-1617719787657-81dd0ec1d3ce?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8UzRNS0xBc0JCNzR8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                <p class="text-center">I love dals. All kinds of them but yellow moong dal is my go-to lentil when I am in need of some easy comfort food. In this recipe I added suva or dill leaves to the classic moong dal recipe for a twist. I like the simplicity of this recipe, just the dal, tomatoes and fresh dill with simple seasoning. This recipe is without any onions and garlic. I love the aroma of fresh dill and I think, in Indian food, we don’t really use dill as much as we can. Nine out of ten times, the only green leaves sprinkled on a curry or a dal is fresh coriander and while I love coriander too, dill adds a unique freshness and aroma to the dal. The delicate feathery leaves of dill are also rich in Vitamin A, C and minerals like iron and manganese. Dals or lentils are packed with proteins and especially in a vegetarian diet, lentils are the main source of protein. It is amazing how this humble yellow moong dal can be made into so many recipes from a plain dal khichdi to mangodi ki sabzi to the traditional Indian desserts like moong dal halwa.</p>
                <p class="text-center">I love dals. All kinds of them but yellow moong dal is my go-to lentil when I am in need of some easy comfort food. In this recipe I added suva or dill leaves to the classic moong dal recipe for a twist. I like the simplicity of this recipe, just the dal, tomatoes and fresh dill with simple seasoning. This recipe is without any onions and garlic. I love the aroma of fresh dill and I think, in Indian food, we don’t really use dill as much as we can. Nine out of ten times, the only green leaves sprinkled on a curry or a dal is fresh coriander and while I love coriander too, dill adds a unique freshness and aroma to the dal. The delicate feathery leaves of dill are also rich in Vitamin A, C and minerals like iron and manganese. Dals or lentils are packed with proteins and especially in a vegetarian diet, lentils are the main source of protein. It is amazing how this humble yellow moong dal can be made into so many recipes from a plain dal khichdi to mangodi ki sabzi to the traditional Indian desserts like moong dal halwa.</p>
            </div>
            <hr class="border border-dark dropdown-divider mt-5 mb-4 mx-5">
            <div class="mx-md-5 mx-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman Lainya</h1>
                </div>
                <hr class="border border-light dropdown-divider p-0">
                <div class="card bg-grey text-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-5 my-auto">
                            <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman</a></h5>
                                <p class="card-text text-start small">
                                    <span class="text-muted">Oleh Admin A</span>
                                    <span class="fw-bold mx-2"> | </span>
                                    <span class="text-muted">Pada 15-Mar-20</span>
                                </p>
                                <p class="card-text">Deskripsi singkat dari pengumuman yang ditampilkan nantinya pada list pengumuman</p>
                                <p class="card-text small text-end">
                                    <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                    <span class="fw-bold mx-2"> | </span>
                                    <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-grey text-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-5 my-auto">
                            <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman</a></h5>
                                <p class="card-text text-start small">
                                    <span class="text-muted">Oleh Admin A</span>
                                    <span class="fw-bold mx-2"> | </span>
                                    <span class="text-muted">Pada 15-Mar-20</span>
                                </p>
                                <p class="card-text">Deskripsi singkat dari pengumuman yang ditampilkan nantinya pada list pengumuman</p>
                                <p class="card-text small text-end">
                                    <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                    <span class="fw-bold mx-2"> | </span>
                                    <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-dark dropdown-divider mt-5 mx-5">
        </div>
    </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Semua Pengumuman</h1>
                <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Pengumuman", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-grey rounded p-2">
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Index", app()->getLocale() ) }}">Beranda</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none link-primary" href="{{ route("Pengumuman", app()->getLocale() ) }}">Pengumuman</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rincian</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-5 mb-5">
            <img src="https://images.unsplash.com/photo-1584581893475-7e64f711bdcf?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDEwOXxKcGc2S2lkbC1Ia3x8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid w-100 ratio ratio-16x9 mb-5" alt="...">
            <div class="container px-md-5">
                <div class="card border-danger bg-grey text-light border-2 mx-md-5 mx-2 p-2 p-md-5">
                    <h2 class="fw-bold text-center">Judul Dari Berita Yang Dipilih Sebelumnya</h4>
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-6 text-md-center">
                            <p class="card-text text-center text-md-start small">
                                <span class="text-muted">Oleh Admin A</span>
                                <span class="fw-bold mx-2"> | </span>
                                <span class="text-muted">Pada 15-Mar-20</span>
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p class="card-text small text-center text-md-end text-end">
                                <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                <span class="fw-bold mx-2"> | </span>
                                <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                            </p>
                        </div>
                    </div>
                    <embed src="file_name.pdf" width="200" height="200px" hidden/>
                    <img src="https://images.unsplash.com/photo-1617719787657-81dd0ec1d3ce?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8UzRNS0xBc0JCNzR8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-thumbnail bg-grey border border-0" alt="..." width="400" hidden>
                    <p class="text-center">I love dals. All kinds of them but yellow moong dal is my go-to lentil when I am in need of some easy comfort food. In this recipe I added suva or dill leaves to the classic moong dal recipe for a twist. I like the simplicity of this recipe, just the dal, tomatoes and fresh dill with simple seasoning. This recipe is without any onions and garlic. I love the aroma of fresh dill and I think, in Indian food, we don’t really use dill as much as we can. Nine out of ten times, the only green leaves sprinkled on a curry or a dal is fresh coriander and while I love coriander too, dill adds a unique freshness and aroma to the dal. The delicate feathery leaves of dill are also rich in Vitamin A, C and minerals like iron and manganese. Dals or lentils are packed with proteins and especially in a vegetarian diet, lentils are the main source of protein. It is amazing how this humble yellow moong dal can be made into so many recipes from a plain dal khichdi to mangodi ki sabzi to the traditional Indian desserts like moong dal halwa.</p>
                    <p class="text-center">I love dals. All kinds of them but yellow moong dal is my go-to lentil when I am in need of some easy comfort food. In this recipe I added suva or dill leaves to the classic moong dal recipe for a twist. I like the simplicity of this recipe, just the dal, tomatoes and fresh dill with simple seasoning. This recipe is without any onions and garlic. I love the aroma of fresh dill and I think, in Indian food, we don’t really use dill as much as we can. Nine out of ten times, the only green leaves sprinkled on a curry or a dal is fresh coriander and while I love coriander too, dill adds a unique freshness and aroma to the dal. The delicate feathery leaves of dill are also rich in Vitamin A, C and minerals like iron and manganese. Dals or lentils are packed with proteins and especially in a vegetarian diet, lentils are the main source of protein. It is amazing how this humble yellow moong dal can be made into so many recipes from a plain dal khichdi to mangodi ki sabzi to the traditional Indian desserts like moong dal halwa.</p>
                </div>
                <hr class="border border-dark dropdown-divider mt-5 mb-4 mx-5">
                <div class="mx-md-5 mx-2">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                        <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman Lainya</h1>
                    </div>
                    <hr class="border border-light dropdown-divider p-0">
                    <div class="card bg-grey text-light mb-3">
                        <div class="row g-0">
                            <div class="col-md-5 my-auto">
                                <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman</a></h5>
                                    <p class="card-text text-start small">
                                        <span class="text-muted">Oleh Admin A</span>
                                        <span class="fw-bold mx-2"> | </span>
                                        <span class="text-muted">Pada 15-Mar-20</span>
                                    </p>
                                    <p class="card-text">Deskripsi singkat dari pengumuman yang ditampilkan nantinya pada list pengumuman</p>
                                    <p class="card-text small text-end">
                                        <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                        <span class="fw-bold mx-2"> | </span>
                                        <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-grey text-light mb-3">
                        <div class="row g-0">
                            <div class="col-md-5 my-auto">
                                <img src="https://images.unsplash.com/photo-1568725992957-ead7b0259b5f?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDV8cVBZc0R6dkpPWWN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><a href="" class="text-decoration-none link-light">Judul Pengumuman</a></h5>
                                    <p class="card-text text-start small">
                                        <span class="text-muted">Oleh Admin A</span>
                                        <span class="fw-bold mx-2"> | </span>
                                        <span class="text-muted">Pada 15-Mar-20</span>
                                    </p>
                                    <p class="card-text">Deskripsi singkat dari pengumuman yang ditampilkan nantinya pada list pengumuman</p>
                                    <p class="card-text small text-end">
                                        <span class="text-muted"><i class="fas fa-comments"></i> 27</span>
                                        <span class="fw-bold mx-2"> | </span>
                                        <span class="text-muted"><i class="fas fa-eye"></i> 150</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border border-dark dropdown-divider mt-5 mx-5">
            </div>
        </div>
    @endif
@endsection