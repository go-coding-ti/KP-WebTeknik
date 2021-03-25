@extends('layouts/UserLayout')

@section('content')
  @if (App::getLocale() == 'en')
    <div class="container pt-5">
        <div class="card mb-3">
            <div class="ratio ratio-21x9 card-img-top">
              <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Mars Teknik Udayana</h5>
              <p class="card-text lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
            </div>
          </div>
    </div>
  @endif

  @if (App::getLocale() == 'id')
    <div class="container pt-5">
        <div class="card mb-3">
            <div class="ratio ratio-21x9 card-img-top">
              <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Mars Teknik Udayana</h5>
              <p class="card-text lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
            </div>
          </div>
    </div>
  @endif
@endsection