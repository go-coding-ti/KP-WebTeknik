@if (App::getLocale() == 'en')
<div class="container">
  <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-5">
    <h1 class="h4 fw-bold text-light border-3 border-bottom border-danger p-2 pb-0 mb-0">Related Video</h1>
  </div>
  <hr class="border border-light dropdown-divider pt-0 mt-0">
</div>
<div class="container">
  <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
    @foreach($videos as $video)
    <div class="col p-0 px-1 mb-3">
      <div class="card border-0 bg-grey hover h-100">
        <div class="ratio ratio-16x9 card-img-top">
          <iframe src="https://www.youtube.com/embed/{{$video->link}}" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-light fw-bold">{{$video->judul_eng}}</h5>
          <p class="card-text lh-sm text-light">{{$video->deskripsi_eng}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<div class="container d-flex justify-content-center">
  <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route('Video', app()->getLocale() ) }}">See All</a>
</div>
@endif

@if (App::getLocale() == 'id')
  <div class="container">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-5">
      <h1 class="h4 fw-bold text-light border-3 border-bottom border-danger p-2 pb-0 mb-0">Related Video</h1>
    </div>
    <hr class="border border-light dropdown-divider pt-0 mt-0">
  </div>
  <div class="container">
    <div class="row row-cols-1 row-cols-lg-3 px-3 pt-2">
      @foreach($videos as $video)
      <div class="col p-0 px-1 mb-3">
        <div class="card border-0 bg-grey hover h-100">
          <div class="ratio ratio-16x9 card-img-top">
            <iframe src="https://www.youtube.com/embed/{{$video->link}}" title="YouTube video" allowfullscreen></iframe>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title text-light fw-bold">{{$video->judul}}</h5>
            <p class="card-text lh-sm text-light">{{$video->deskripsi}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="container d-flex justify-content-center">
    <a class="text-decoration-none fw-bold btn btn-sm bg-red btn-link" href="{{ route('Video', app()->getLocale() ) }}">See All</a>
  </div>
@endif