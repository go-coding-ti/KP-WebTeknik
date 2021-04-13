@if (App::getLocale() == 'en')  
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Announcement</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="card-group">
      <div class="row row-cols-1 row-cols-lg-3 px-3">
        @foreach($pengumumans as $pengumuman)
        <div class="col p-0 py-2 px-2">
          <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="card bg-grey hover border-0 link-white text-decoration-none p-0">
            <img src="{{$pengumuman->kategori->icon}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-light fw-bold">{{$pengumuman->title_eng}}</h5>
              <p class="card-text link-light text-end"><small class="text-muted">Posted pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</small></p>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>    	
  </div>
@endif

@if (App::getLocale() == 'id')  
  <div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
      <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Pengumuman</h1>
      <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Pengumuman", app()->getLocale() ) }}">See All</a></h1>
    </div>
    <hr class="border border-light dropdown-divider">
  </div>
  <div class="container">
    <div class="card-group">
      <div class="row row-cols-1 row-cols-lg-3 px-3">
        @foreach($pengumumans as $pengumuman)
          <div class="col p-0 py-2 px-2">
            <a href="{{ route("Detail Pengumuman", ['language'=>app()->getLocale(), 'title_slug' => $pengumuman->title_slug]) }}" class="card bg-grey hover border-0 link-white text-decoration-none p-0">
              <img src="{{$pengumuman->kategori->icon}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light fw-bold">{{$pengumuman->title_ina}}</h5>
                <p class="card-text link-light text-end"><small class="text-muted">Diposting pada {{ date('d M Y', strtotime($pengumuman->created_at)) }}</small></p>
              </div>
            </a>
          </div>
          @endforeach
      </div>
    </div>    	
  </div>
@endif