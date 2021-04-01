@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Profile Dekan Fakultas Teknik</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Management", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="card bg-grey text-white border-danger" w-100>
          <img src="https://images.unsplash.com/flagged/photo-1557896279-080cb03b9ca6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGxlY3R1cmV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="card-text">email.someone@unud.ac.id</span>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-8">
        <div class="rounded p-3 bg-grey text-white">
          <h4 class="fw-bold">Nama Management Fakultas Teknik</h4>
          <span class="fs-5">Dari program studi apa</span>
          <p class="fs-6">Jabatannya apa</p>
        </div>
        <div class="rounded p-3 bg-grey text-white mt-3">
          <h4 class="fw-bold">Biografi</h4>
          <p class="fs-6">Biografi dari management terkait. Some quick example text to build on the card title and make up the bulk of the card's content.. Some quick example text to build on the card title and make up the bulk of the card's content.. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="rounded p-3 bg-grey text-white mt-3">
          <h4 class="fw-bold">Pendidikan</h4>
          <ol class="list-group list-group border-0 bg-grey">
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Sekolah Dasar</span></div>
                <span>SD 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SD</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Sekolah Menengah Pertama</span></div>
                <span>SMP 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SMP</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Sekolah Menengah Atas</span></div>
                <span>SMA 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SMA</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Strata Satu</span></div>
                <span>Universitas 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SI</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Strata Satu</span></div>
                <span>Universitas 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">S2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Strata Satu</span></div>
                <span>Universitas 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">S2</span>
            </li>
          </ol>
        </div>
        <div class="rounded p-3 bg-grey text-white mt-3 text-end">
          <a class="btn btn-info" href="">Lihat Publikasi Jurnal</a>
        </div>
      </div>
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Profile Dekan Fakultas Teknik</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Management", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="card bg-grey text-white border-danger" w-100>
          <img src="https://images.unsplash.com/flagged/photo-1557896279-080cb03b9ca6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGxlY3R1cmV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="card-text">email.someone@unud.ac.id</span>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-8">
        <div class="rounded p-3 bg-grey text-white">
          <h4 class="fw-bold">Nama Management Fakultas Teknik</h4>
          <span class="fs-5">Dari program studi apa</span>
          <p class="fs-6">Jabatannya apa</p>
        </div>
        <div class="rounded p-3 bg-grey text-white mt-3">
          <h4 class="fw-bold">Biografi</h4>
          <p class="fs-6">Biografi dari management terkait. Some quick example text to build on the card title and make up the bulk of the card's content.. Some quick example text to build on the card title and make up the bulk of the card's content.. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="rounded p-3 bg-grey text-white mt-3">
          <h4 class="fw-bold">Pendidikan</h4>
          <ol class="list-group list-group border-0 bg-grey">
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Sekolah Dasar</span></div>
                <span>SD 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SD</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Sekolah Menengah Pertama</span></div>
                <span>SMP 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SMP</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Sekolah Menengah Atas</span></div>
                <span>SMA 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SMA</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Strata Satu</span></div>
                <span>Universitas 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">SI</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Strata Satu</span></div>
                <span>Universitas 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">S2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start bg-grey border-0">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><span>Strata Satu</span></div>
                <span>Universitas 123 Bali</span>
              </div>
              <span class="badge bg-primary rounded-pill">S2</span>
            </li>
          </ol>
        </div>
        <div class="rounded p-3 bg-grey text-white mt-3 text-end">
          <a class="btn btn-info" href="">Lihat Publikasi Jurnal</a>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection