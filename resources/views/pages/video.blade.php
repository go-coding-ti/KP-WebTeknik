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
                  <iframe src="https://www.youtube.com/embed/aFItsrv3n-Q?autoplay=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Faculty of Engineering Profile</h5>
                  <p class="card-text text-light lh-sm">Faculty of Engineering Udayana University</p>
                  <p class="card-text text-light lh-sm">Jl. Kampus Unud Jimbaran Badung, Bali 80361</p>
                  <p class="card-text text-light lh-sm">Phone Number: +62 (361) 703320</p>
                  {{-- <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a> --}}
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Posted on 18 Sep 2020</small>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
        <ul class="nav vizew-nav-tab" role="tablist">
          @foreach($videos as $video)
          <li class="nav-item hover">
            <a class="nav-link active" href="{{ route("Detail Video", ['language'=>app()->getLocale(), 'title_slug' => $video->judul_slug]) }}">
              <div class="single-blog-post style-2 d-flex align-items-center">
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
    <ul class="pagination bg-dark justify-content-center mt-5">
      <li class="page-item">
        <a class="page-link pagination bg-black link-light border-light" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">1</a></li>
      <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">2</a></li>
      <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link pagination bg-black link-light" href="#">Next</a>
      </li>
    </ul>
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
                  <iframe src="https://www.youtube.com/embed/aFItsrv3n-Q?autoplay=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Profile Fakultas Teknik Universitas Udayana</h5>
                  <p class="card-text text-light lh-sm">Fakultas Teknik Universitas Udayana</p>
                  <p class="card-text text-light lh-sm">Jl. Kampus Unud Jimbaran Badung, Bali 80361</p>
                  <p class="card-text text-light lh-sm">Phone Number: +62 (361) 703320</p>
                  {{-- <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a> --}}
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada 18 Sep 2020</small>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
        <ul class="nav vizew-nav-tab" role="tablist">
          @foreach($videos as $video)
          <li class="nav-item hover">
            <a class="nav-link active" href="{{ route("Detail Video", ['language'=>app()->getLocale(), 'title_slug' => $video->judul_slug]) }}">
              <div class="single-blog-post style-2 d-flex align-items-center">
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
    <ul class="pagination bg-dark justify-content-center mt-5">
      <li class="page-item">
        <a class="page-link pagination bg-black link-light border-light" href="#" tabindex="-1" aria-disabled="true">Sebelumnya</a>
      </li>
      <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">1</a></li>
      <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">2</a></li>
      <li class="page-item"><a class="page-link pagination bg-black link-light" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link pagination bg-black link-light" href="#">Berikutnya</a>
      </li>
    </ul>
  </div>
  @endif
@endsection