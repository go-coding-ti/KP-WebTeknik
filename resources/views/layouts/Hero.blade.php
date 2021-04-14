@if (App::getLocale() == 'en')
<div class="container mt-5 pt-5">
  <div class="row no-gutters">
    <div class="col-12 col-md-7 col-lg-8 p-0 px-1">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($popularBeritas as $popularBerita)
            <div class="carousel-item @if($loop->iteration == 1) active @endif" data-bs-interval="3500" id="{{$popularBerita->id}}" role="tabpanel">
              <div class="carousel-inner single-feature-post video-post bg-img">
                <img src="{{$popularBerita->thumbnail}}" class="d-block w-100" alt="...">
                <div class="post-content">
                  <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $popularBerita->kategori->kategori_lower]) }}" class="btn btn-sm btn-warning text-uppercase p-1 text-white text-decoration-none">{{$popularBerita->kategori->kategori_ina}}</a>
                  <a href="{{$popularBerita->id}}" class="post-title card border border-0 text-decoration-none link-white fw-bold">{{$popularBerita->title_eng}}</a>
                  <div class="post-meta d-flex">
                    <a href="#" class="text-decoration-none">
                      <i class="fas fa-eye" aria-hidden="true"></i>
                      {{$popularBerita->read_count}}
                    </a>
                  </div>
                </div>
                <span class="video-duration">{{ date('d M Y', strtotime($popularBerita->tanggal_publish)) }}</span>
              </div>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
      <ul class="nav vizew-nav-tab" role="tablist">
        @foreach($popularBeritas as $popularBerita)
        <li class="nav-item hover">
          <a class="nav-link active" id="post-{{$popularBerita->id}}-tab" data-toggle="pill" href="#{{$popularBerita->id}}" role="tab" aria-selected="true">
            <div class="single-blog-post style-2 d-flex align-items-center">
              <div class="post-thumbnail">
                <img src="{{$popularBerita->thumbnail}}" class="h-100" alt="">
              </div>
              <div class="post-content">
                <h6 class="post-title">{{$popularBerita->title_eng}}</h6>
                <div class="post-meta d-flex justify-content-start">
                  <span><i class="fas fa-eye" aria-hidden="true"></i> {{$popularBerita->read_count}}</span>
                </div>
              </div>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endif

@if (App::getLocale() == 'id')
  <div class="container mt-5 pt-5">
    <div class="row no-gutters">
      <div class="col-12 col-md-7 col-lg-8 p-0 px-1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach($popularBeritas as $popularBerita)
            <div class="carousel-item @if($loop->iteration == 1) active @endif" data-bs-interval="3500" id="post-{{$popularBerita->id}}" role="tabpanel" aria-labelledby="post-{{$popularBerita->id}}-tab">
              <div class="carousel-inner single-feature-post video-post bg-img">
                  <img src="{{$popularBerita->thumbnail}}" class="d-block w-100" alt="...">
                  <div class="post-content">
                    <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $popularBerita->kategori->kategori_lower]) }}" class="btn btn-sm btn-warning text-uppercase p-1 text-white text-decoration-none">{{$popularBerita->kategori->kategori_ina}}</a>
                    <a href="single-post.html" class="post-title card border border-0 text-decoration-none link-white fw-bold">{{$popularBerita->title_ina}}</a>
                    <div class="post-meta d-flex">
                      <a href="#" class="text-decoration-none">
                        <i class="fas fa-eye" aria-hidden="true"></i>
                        {{$popularBerita->read_count}}
                      </a>
                    </div>
                  </div>
                  <span class="video-duration">{{ date('d M Y', strtotime($popularBerita->tanggal_publish)) }}</span>
              </div>
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
        <ul class="nav vizew-nav-tab" role="tablist">
          @foreach($popularBeritas as $popularBerita)
          <li class="nav-item hover">
            <a class="nav-link active" id="post-{{$popularBerita->id}}-tab" data-toggle="pill" href="#post-{{$popularBerita->id}}" role="tab" aria-controls="post-{{$popularBerita->id}}" aria-selected="true">
              <div class="single-blog-post style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="{{$popularBerita->thumbnail}}" class="h-100" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">{{$popularBerita->title_ina}}</h6>
                  <div class="post-meta d-flex justify-content-start">
                    <span><i class="fas fa-eye" aria-hidden="true"></i> {{$popularBerita->read_count}}</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endif