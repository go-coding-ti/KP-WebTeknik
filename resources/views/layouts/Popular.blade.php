@if (App::getLocale() == 'en')
  <div class="row g-0">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Galeri</h1>
      <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Galeri", app()->getLocale() ) }}">See All</a>
    </div>
    <hr class="border border-light dropdown-divider mb-3 mt-0 pt-0">
    <div class="bg-grey px-3 py-2">
      @foreach($galeris as $galeri)
      <div class="card border bg-grey my-1 border-0">
        <div class="row g-0">
          <div class="col-md-5">
            <div class="card-body p-0 text-center">
              <img src="{{$galeri->galeri}}" class="img-fluid" style="height: 8em" alt="...">
            </div>
          </div>
          <div class="col-md-7 d-flex align-content-top flex-wrap">
            <div class="card-body ms-1 px-2 p-0">
              <a href="" class="card-title fw-bold text-decoration-none text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$galeri->id}}">
                {{ strip_tags(substr($galeri->title_eng, 0, 50)) }} ...
                <small class="text-muted">
                  <p class="card-text small">
                    Abdi Purnawan - {{ date('d M Y', strtotime($galeri->created_at)) }}
                  </p>
                </small>
              </a>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Start --}}
        <div class="modal fade" id="staticBackdrop{{$galeri->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content bg-grey text-light">
                  <div class="modal-header border border-dark">
                      <h5 class="modal-title fw-bold fs-4" id="staticBackdropLabel">{{$galeri->title_ina}}</h5>
                      <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                  </div>
                  <div class="modal-body text-center">
                      <img id="imageGaleriModal" src="{{$galeri->galeri}}" style="width:100vh"  alt="...">
                  </div>
                  <div class="modal-footer d-block border border-dark my-auto">
                      <p class="text-center my-auto fs-5" id="deskripsiGaleriModal">{{$galeri->deskripsi_ina}}</p>
                  </div>
              </div>
          </div>
      </div>
      {{-- Modal End --}}
      @endforeach
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="row g-0">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Galeri</h1>
      <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Galeri", app()->getLocale() ) }}">See All</a>
    </div>
    <hr class="border border-light dropdown-divider mb-3 mt-0 pt-0">
    <div class="bg-grey px-3 py-2">
      @foreach($galeris as $galeri)
      <div class="card border bg-grey my-1 border-0">
        <div class="row g-0">
          <div class="col-md-4">
            <div class="card-body p-0 text-center">
              <img src="{{$galeri->galeri}}" class="img-fluid" style="height: 8em" alt="...">
            </div>
          </div>
          <div class="col-md-8 d-flex align-content-top flex-wrap">
            <div class="card-body ms-1 px-2 p-0">
              <a href="" class="card-title fw-bold text-decoration-none text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$galeri->id}}">
                {{ strip_tags(substr($galeri->title_ina, 0, 50)) }} ...
                <small class="text-muted">
                  <p class="card-text small">
                    Abdi Purnawan - {{ date('d M Y', strtotime($galeri->created_at)) }}
                  </p>
                </small>
              </a>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Start --}}
        <div class="modal fade" id="staticBackdrop{{$galeri->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content bg-grey text-light">
                  <div class="modal-header border border-dark">
                      <h5 class="modal-title fw-bold fs-4" id="staticBackdropLabel">{{$galeri->title_ina}}</h5>
                      <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                  </div>
                  <div class="modal-body text-center">
                      <img id="imageGaleriModal" src="{{$galeri->galeri}}"style="width:50%; height:50%"  alt="...">
                  </div>
                  <div class="modal-footer d-block border border-dark my-auto">
                      <p class="text-center my-auto fs-5" id="deskripsiGaleriModal">{{$galeri->deskripsi_ina}}</p>
                  </div>
              </div>
          </div>
      </div>
      {{-- Modal End --}}
      @endforeach
    </div>
  </div>
@endif