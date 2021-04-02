@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Staff Pengajar</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Staff</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pengajar</button>
        </div>
      </div>
      <div class="col-sm-12 col-md-10">
        <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row row-cols-1 row-cols-lg-2 px-3 pt-2">
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Staff Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Staff Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Staff Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row row-cols-1 row-cols-lg-2 px-3 pt-2">
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Pengajar Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Pengajar Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Pengajar Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
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
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Staff Pengajar</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Staff</button>
          <button class="nav-link text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pengajar</button>
        </div>
      </div>
      <div class="col-sm-12 col-md-10">
        <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row row-cols-1 row-cols-lg-2 px-3 pt-2">
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Staff Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Staff Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Staff Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row row-cols-1 row-cols-lg-2 px-3 pt-2">
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Pengajar Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Pengajar Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
                </div>
              </div>
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">Nama Pengajar Teknik 1</h5>
                        <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a href="{{ route("Detail Staff Pengajar", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
                    <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
                  </div>
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