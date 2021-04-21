@extends('layouts/UserLayout')

@section('content')
  @if (App::getLocale() == 'en')
  <div class="container pt-5">
    <div class="row no-gutters">
      <div class="col-12 col-md-7 col-lg-8 p-0 px-1">
        <div class="slide">
          <div class="carousel-item active">
            <div class="card border-0 bg-grey h-100">
              <div class="ratio ratio-21x9 card-img-top">
                <iframe src="https://www.youtube.com/embed/{{$video->link}}?autoplay=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-light fw-bold">{{$video->judul_eng}}</h5>
                <p class="card-text text-light lh-sm">{{$video->deskripsi_eng}}</p>
                {{-- <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a> --}}
              </div>
              <div class="card-footer text-center">
                <small class="text-muted">Posted on {{ date('d M Y', strtotime($video->created_at)) }}</small>
              </div>
            </div>
          </div>
      </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
        <ul class="nav vizew-nav-tab" role="tablist">
          @foreach($videos as $video)
          <li class="nav-item hover d-flex align-items-center w-100 my-auto">
            <a class="nav-link @if($loop->iteration == 1) active @endif w-100 h-100 my-auto" href="{{ route("Detail Video", ['language'=>app()->getLocale(), 'title_slug' => $video->judul_slug]) }}">
              <div class="single-blog-post style-2 d-flex align-items-center m-0">
                <div class="post-thumbnail">
                  <img src="http://img.youtube.com/vi/{{$video->link}}/hqdefault.jpg" class="h-100" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">{{$video->judul_eng}}</h6>
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
  <div class="container pt-5">
    <div class="row no-gutters">
      <div class="col-12 col-md-7 col-lg-8 p-0 px-1">
        <div class="slide">
            <div class="carousel-item active">
              <div class="card border-0 bg-grey h-100">
                <div class="ratio ratio-21x9 card-img-top">
                  <iframe src="https://www.youtube.com/embed/{{$video->link}}?autoplay=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">{{$video->judul}}</h5>
                  <p class="card-text text-light lh-sm">{{$video->deskripsi}}</p>
                  {{-- <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a> --}}
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada {{ date('d M Y', strtotime($video->created_at)) }}</small>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
        <ul class="nav vizew-nav-tab" role="tablist">
          @foreach($videos as $video)
          <li class="nav-item hover d-flex align-items-center w-100 my-auto">
            <a class="nav-link @if($loop->iteration == 1) active @endif w-100 h-100 my-auto" href="{{ route("Detail Video", ['language'=>app()->getLocale(), 'title_slug' => $video->judul_slug]) }}">
              <div class="single-blog-post style-2 d-flex align-items-center m-0">
                <div class="post-thumbnail">
                  <img src="http://img.youtube.com/vi/{{$video->link}}/hqdefault.jpg" class="h-100" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">{{$video->judul}}</h6>
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
@endsection