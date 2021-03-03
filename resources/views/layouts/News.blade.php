<div class="container">
    <div class="row px-3 p-0">

        {{-- NEWS --}}
        <div class="col-lg-8 p-0 py-2 px-2">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                <h1 class="h4 fw-bold text-dark-blue">News</h1>
            </div>
            <hr class="border border-dark dropdown-divider">
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="card-body p-0">
                            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7 d-flex align-content-top flex-wrap">
                        <div class="card-body ms-1 px-2 ps-3 p-0">
                            <a href="" class="card-title fw-bold text-decoration-none link-dark-blue h4">Card title</a>
                            <p class="card-text">
                                <small class="text-muted">
                                    <a class="text-decoration-none link-dark-blue" href="">Hadi Darmawan - 00 Bulan 2021</a>
                                </small>
                            </p>
                            <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="card-body p-0">
                            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7 d-flex align-content-top flex-wrap">
                        <div class="card-body ms-1 px-2 ps-3 p-0">
                            <a href="" class="card-title fw-bold text-decoration-none link-dark-blue h4">Card title</a>
                            <p class="card-text">
                                <small class="text-muted">
                                    <a class="text-decoration-none link-dark-blue" href="">Hadi Darmawan - 00 Bulan 2021</a>
                                </small>
                            </p>
                            <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="card-body p-0">
                            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7 d-flex align-content-top flex-wrap">
                        <div class="card-body ms-1 px-2 ps-3 p-0">
                            <a href="" class="card-title fw-bold text-decoration-none link-dark-blue h4">Card title</a>
                            <p class="card-text">
                                <small class="text-muted">
                                    <a class="text-decoration-none link-dark-blue" href="">Hadi Darmawan - 00 Bulan 2021</a>
                                </small>
                            </p>
                            <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="card-body p-0">
                            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7 d-flex align-content-top flex-wrap">
                        <div class="card-body ms-1 px-2 ps-3 p-0">
                            <a href="" class="card-title fw-bold text-decoration-none link-dark-blue h4">Card title</a>
                            <p class="card-text">
                                <small class="text-muted">
                                    <a class="text-decoration-none link-dark-blue" href="">Hadi Darmawan - 00 Bulan 2021</a>
                                </small>
                            </p>
                            <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- NEWS End --}}

        <div class="col-lg-4 p-0 py-2 px-2 text-wrap">

            {{-- TAGS --}}
                @include('layouts/Tag')
            {{-- TAGS --}}

            {{-- POPULAR --}}
                @include('layouts/Popular')
            {{-- POPULAR --}}

        </div>
    </div>

    {{-- Pagination --}}
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link link-dark-blue" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link link-dark-blue" href="#">1</a></li>
            <li class="page-item"><a class="page-link link-dark-blue" href="#">2</a></li>
            <li class="page-item"><a class="page-link link-dark-blue" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link link-dark-blue" href="#">Next</a>
            </li>
        </ul>
    </nav>
    {{-- Pagination End --}}

</div>