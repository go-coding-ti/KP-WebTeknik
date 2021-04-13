@if (App::getLocale() == 'en')
    <footer class="text-muted p-0 mt-5 bg-grey">
        <div class="container pb-5 mb-5 pt-5">
            <div class="row">
                <div class="col-md mb-5">
                    <p class="fw-bold h5 text-white text-start">CONTACT</p>
                    <hr class="border border-light dropdown-divider">
                    {!! $preference->footer_eng !!}
                </div>
                <div class="col-md">
                    <p class="fw-bold h5 text-white text-start">INFORMATION</p>
                    <hr class="border border-light dropdown-divider">
                    <p class="fw-bold text-start">
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Udayana University</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPDP</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPPM Udayana</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Career Development Center</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Alumni</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Science Direct</a>
                    </p>
                </div>
                <div class="col-md mt-5">
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Udayana University</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPDP</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPPM Udayana</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Career Development Center</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Alumni</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Science Direct</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container p-0">
            <div class="row">
                <hr class="border border-light dropdown-divider">
                <div class="col-md">
                    <p class="fw-bold">Copyright &copy 2021 | Fakultas Teknik, Universitas Udayana</p>
                </div>
            </div>
        </div>
    </footer>
@endif

@if (App::getLocale() == 'id')
    <footer class="text-muted p-0 mt-5 bg-grey">
        <div class="container pb-5 mb-5 pt-5">
            <div class="row">
                <div class="col-md mb-5">
                    <p class="fw-bold h5 text-white text-start">KONTAK</p>
                    <hr class="border border-light dropdown-divider">
                    {!! $preference->footer_ina !!}
                </div>
                <div class="col-md">
                    <p class="fw-bold h5 text-white text-start">INFORMASI</p>
                    <hr class="border border-light dropdown-divider">
                    <p class="fw-bold text-start">
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Universitas Udayana</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPDP</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPPM Udayana</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Career Development Center</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Alumni</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Science Direct</a>
                    </p>
                </div>
                <div class="col-md mt-5">
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Universitas Udayana</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPDP</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">LPPM Udayana</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Career Development Center</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Alumni</a>
                    </p>
                    <p class="fw-bold text-start small">
                        <a href="" class="text-decoration-none link-light link-hover">Science Direct</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <hr class="border border-light dropdown-divider">
                <div class="col-md">
                    <p class="fw-bold">Copyright &copy {{ date('Y', strtotime(date('Y-m-d H:i:s'))) }} | Fakultas Teknik, Universitas Udayana</p>
                </div>
            </div>
        </div>
    </footer>
@endif