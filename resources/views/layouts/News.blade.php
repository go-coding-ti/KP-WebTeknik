@if (App::getLocale() == 'en')
  <div class="container">
    <div class="row px-3 p-0">
      {{-- NEWS --}}
          <div class="col-lg-8 p-0 py-2 px-2">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
              <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman</h1>
              <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a>
            </div>
              @foreach($pengumumans as $pengumuman)
                <hr class="border border-light dropdown-divider mb-3 pt-0 mt-0">
                <div class="card mb-3 border-0 bg-black">
                    <div class="row g-0">
                      <div class="col-md-3 my-auto">
                          <div class="card-body p-0 text-center">
                            <img src="{{$pengumuman->kategori->icon}}" style="height: 8em" alt="...">
                          </div>
                      </div>
                        <div class="col-md-7 align-content-top flex-wrap">
                          <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="btn btn-sm ms-3 my-1 bg-red text-light fw-bold text-uppercase"><small>{{$pengumuman->kategori->kategori_ina}}</small></a>
                          <div class="card-body ms-1 py-2 px-2 ps-3 p-0">
                              <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="card-title fw-bold text-decoration-none link-light fs-5 link-hovser">{{$pengumuman->title_eng}}</a>
                              <p class="card-text">
                                <a class="text-decoration-none link-light text-muted small" href="">Posted pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</a>
                              </p>
                          </div>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
      {{-- NEWS End --}}

      <div class="col-lg-4 p-0 py-2 px-2 text-wrap">
        {{-- POPULAR --}}
          @include('layouts/Popular')
        {{-- POPULAR --}}

        {{-- TAGS --}}
            @include('layouts/Tag')
        {{-- TAGS --}}
      </div>
    </div>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="container">
    <div class="row px-3 p-0">
      {{-- NEWS --}}
          <div class="col-lg-8 p-0 py-2 px-2">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
              <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman</h1>
              <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a>
            </div>
            @foreach($pengumumans as $pengumuman)
              <hr class="border border-light dropdown-divider mb-3 pt-0 mt-0">
              <div class="card mb-3 border-0 bg-black">
                  <div class="row g-0">
                    <div class="col-md-3 my-auto">
                        <div class="card-body p-0 text-center">
                          <img src="{{$pengumuman->kategori->icon}}" style="height: 8em" alt="...">
                        </div>
                    </div>
                      <div class="col-md-7 align-content-top flex-wrap">
                        <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="btn btn-sm ms-3 my-1 bg-red text-light fw-bold text-uppercase"><small>{{$pengumuman->kategori->kategori_ina}}</small></a>
                        <div class="card-body ms-1 py-2 px-2 ps-3 p-0">
                            <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="card-title fw-bold text-decoration-none link-light fs-5 link-hover">{{$pengumuman->title_eng}}</a>
                            <p class="card-text">
                              <a class="text-decoration-none link-light text-muted small" href="">Posted pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</a>
                            </p>
                        </div>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      {{-- NEWS End --}}

      <div class="col-lg-4 p-0 py-2 px-2 text-wrap">
        {{-- POPULAR --}}
        @include('layouts/Popular')
        {{-- POPULAR --}}

        {{-- TAGS --}}
            @include('layouts/Tag')
        {{-- TAGS --}}
      </div>
    </div>
  </div>
@endif