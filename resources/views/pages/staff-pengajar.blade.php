@extends('layouts/UserLayout')
@section('content')
@if (App::getLocale() == 'en')
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Teaching Staff</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row row-cols-1 row-cols-lg-2 px-3 pt-2">
              @foreach($stafs as $staf)
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                        <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_ina}}</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a  class="btn btn-primary p-1 my-1" href="{{ route("Detail Staff Pengajar", ['language'=>app()->getLocale(), 'nama_slug' => $staf->nama_slug]) }}">See more</a>
                    <div>
                      <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                      <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
      <div class="col-sm-12 col-md-12">
        <div class="tab-content bg-grey text-white rounded p-3" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row row-cols-1 row-cols-lg-2 px-3 pt-2">
              @foreach($stafs as $staf)
              <div class="col p-0 px-1 mb-3">
                <div class="card bg-grey hover border-0 h-100">
                  <a href="#" class="link-light text-decoration-none ">
                    <img src="{{$staf->foto}}" class="card-img-top mb-1" alt="...">
                    <div class="card-body p-3 text-center">
                        <h5 class="card-title fw-bold fs-5">{{$staf->nama}}</h5>
                        <p class="card-text fw-bold mt-3">{{$staf->prodi->prodi_ina}}</p>
                    </div>
                  </a>
                  <div class="card-footer p-3 d-flex justify-content-between border-0">
                    <a  class="btn btn-primary p-1 my-1">Lihat lebih lanjut</a>
                    <div>
                      <a href="{{$staf->sinta}}" target="_blank" class="btn btn-info p-1 my-1">Sinta</a>
                      <a href="{{$staf->scopus}}" target="_blank" class="btn btn-info p-1 my-1">Scopus</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        </div>
      </div>
    </div>
  </div>
@endif
@endsection