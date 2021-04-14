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
<<<<<<< HEAD
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                <a href="{{ route('Berita', app()->getLocale() ) }}" class="h4 text-decoration-none fw-bold text-light border-3 border-bottom border-danger p-2 pb-0 mb-0">Berita</a>
              </div>
              @foreach($beritas as $berita)
                <hr class="border border-light dropdown-divider mb-3 pt-0 mt-0">
                <div class="card mb-3 border-0 bg-black">
                    <div class="row g-0">
                      <div class="col-md-5 my-auto">
                          <div class="card-body p-0 text-center">
                            <img src="{{$berita->thumbnail}}" style="height: 12em" alt="...">
                          </div>
                      </div>
                        <div class="col-md-7 align-content-top flex-wrap">
                          <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="btn btn-sm ms-3 my-1 bg-red text-light fw-bold text-uppercase"><small>{{$berita->kategori->kategori_ina}}</small></a>
                          <div class="card-body ms-1 py-2 px-2 ps-3 p-0">
                              <a href="{{ route("Detail Berita", ['language'=>app()->getLocale(), 'title_slug' => $berita->title_slug]) }}" class="card-title fw-bold text-decoration-none link-light fs-5 link-hover">{{$berita->title_ina}}</a>
                              <p class="card-text">
                                <a class="text-decoration-none link-light text-muted small" href="">{{ date('l, d M Y', strtotime($berita->tanggal_publish)) }}</a>
                              </p>
                              {{-- <p class="card-text pt-2 text-light">{{$berita->content_ina}}</p> --}}
                          </div>
                        </div>
                    </div>
                </div>
              @endforeach
              {{-- <div class="card mb-3 border-0 bg-black">
                  <div class="row g-0">
                    <div class="col-md-5 my-auto">
                        <div class="card-body p-0">
                          <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                        </div>
                    </div>
                      <div class="col-md-7 d-flex align-content-top flex-wrap">
                        <a href="" class="btn btn-sm ms-3 my-1 bg-red text-light fw-bold text-uppercase"><small>Teknologi</small></a>
                        <a href="" class="btn btn-sm ms-3 my-1 bg-success text-light fw-bold text-uppercase"><small>UKM Teknik</small></a>
                        <div class="card-body ms-1 py-2 px-2 ps-3 p-0">
                            <a href="" class="card-title fw-bold text-decoration-none link-light fs-5 link-hover">Judul Card Title Untuk Section News</a>
                            <p class="card-text">
                              <a class="text-decoration-none link-light text-muted small" href="">Hadi Darmawan - 00 Bulan 2021</a>
                            </p>
                            <p class="card-text pt-2 text-light">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                        </div>
                      </div>
                  </div>
              </div>
=======
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center my-auto">
              <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman</h1>
              <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a>
            </div>
            @foreach($pengumumans as $pengumuman)
              <hr class="border border-light dropdown-divider mb-3 pt-0 mt-0">
>>>>>>> 95071e6a626fd2be743bfcfc439991cc744bdbae
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