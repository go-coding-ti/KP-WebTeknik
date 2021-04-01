@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
<div class="container mt-5 pt-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
    <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Management</h1>
    <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
  </div>
  <hr class="border border-light dropdown-divider">
</div>
<div class="container">
  <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
    <div class="col p-0 px-1 mb-3">
      <div class="card bg-grey hover border-0 h-100">
        <a href="#" class="link-light text-decoration-none ">
          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
          <div class="card-body p-3 text-center">
              <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
              <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
          </div>
        </a>
        <div class="card-footer p-3 d-flex justify-content-between border-0">
          <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
          <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
        </div>
      </div>
    </div>
    <div class="col p-0 px-1 mb-3">
      <div class="card bg-grey hover border-0 h-100">
        <a href="#" class="link-light text-decoration-none ">
          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
          <div class="card-body p-3 text-center">
              <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
              <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
          </div>
        </a>
        <div class="card-footer p-3 d-flex justify-content-between border-0">
          <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
          <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
        </div>
      </div>
    </div>
    <div class="col p-0 px-1 mb-3">
      <div class="card bg-grey hover border-0 h-100">
        <a href="#" class="link-light text-decoration-none ">
          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
          <div class="card-body p-3 text-center">
              <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
              <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
          </div>
        </a>
        <div class="card-footer p-3 d-flex justify-content-between border-0">
          <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
          <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
        </div>
      </div>
    </div>
    <div class="col p-0 px-1 mb-3">
      <div class="card bg-grey hover border-0 h-100">
        <a href="#" class="link-light text-decoration-none ">
          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
          <div class="card-body p-3 text-center">
              <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
              <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
          </div>
        </a>
        <div class="card-footer p-3 d-flex justify-content-between border-0">
          <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
          <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
        </div>
      </div>
    </div>
    <div class="col p-0 px-1 mb-3">
      <div class="card bg-grey hover border-0 h-100">
        <a href="#" class="link-light text-decoration-none ">
          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
          <div class="card-body p-3 text-center">
              <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
              <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
          </div>
        </a>
        <div class="card-footer p-3 d-flex justify-content-between border-0">
          <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
          <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
        </div>
      </div>
    </div>
    <div class="col p-0 px-1 mb-3">
      <div class="card bg-grey hover border-0 h-100">
        <a href="#" class="link-light text-decoration-none ">
          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
          <div class="card-body p-3 text-center">
              <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
              <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
          </div>
        </a>
        <div class="card-footer p-3 d-flex justify-content-between border-0">
          <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
          <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Manajemen</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
      <div class="col p-0 px-1 mb-3">
        <div class="card bg-grey hover border-0 h-100">
          <a href="#" class="link-light text-decoration-none ">
            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
            <div class="card-body p-3 text-center">
                <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
                <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
            </div>
          </a>
          <div class="card-footer p-3 d-flex justify-content-between border-0">
            <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
            <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
          </div>
        </div>
      </div>
      <div class="col p-0 px-1 mb-3">
        <div class="card bg-grey hover border-0 h-100">
          <a href="#" class="link-light text-decoration-none ">
            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
            <div class="card-body p-3 text-center">
                <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
                <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
            </div>
          </a>
          <div class="card-footer p-3 d-flex justify-content-between border-0">
            <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
            <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
          </div>
        </div>
      </div>
      <div class="col p-0 px-1 mb-3">
        <div class="card bg-grey hover border-0 h-100">
          <a href="#" class="link-light text-decoration-none ">
            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
            <div class="card-body p-3 text-center">
                <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
                <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
            </div>
          </a>
          <div class="card-footer p-3 d-flex justify-content-between border-0">
            <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
            <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
          </div>
        </div>
      </div>
      <div class="col p-0 px-1 mb-3">
        <div class="card bg-grey hover border-0 h-100">
          <a href="#" class="link-light text-decoration-none ">
            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
            <div class="card-body p-3 text-center">
                <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
                <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
            </div>
          </a>
          <div class="card-footer p-3 d-flex justify-content-between border-0">
            <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
            <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
          </div>
        </div>
      </div>
      <div class="col p-0 px-1 mb-3">
        <div class="card bg-grey hover border-0 h-100">
          <a href="#" class="link-light text-decoration-none ">
            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
            <div class="card-body p-3 text-center">
                <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
                <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
            </div>
          </a>
          <div class="card-footer p-3 d-flex justify-content-between border-0">
            <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
            <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
          </div>
        </div>
      </div>
      <div class="col p-0 px-1 mb-3">
        <div class="card bg-grey hover border-0 h-100">
          <a href="#" class="link-light text-decoration-none ">
            <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top mb-1" alt="...">
            <div class="card-body p-3 text-center">
                <h5 class="card-title fw-bold fs-4">Nama Management Teknik 1</h5>
                <p class="card-text fw-bold mt-3">Menjabat Sebagai Apa</p>
            </div>
          </a>
          <div class="card-footer p-3 d-flex justify-content-between border-0">
            <a href="{{ route("Detail Management", app()->getLocale() ) }}" class="btn btn-primary p-1 my-1">See Detail</a>
            <a href="#" class="btn btn-success p-1 my-1">Scopus</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
@endsection