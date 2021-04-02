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
                    <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title text-light fw-bold">Contoh Video 1 yang Akan di Tampilkan</h5>
                    <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                  </div>
                  <div class="card-footer text-center">
                    <small class="text-muted">Diposting pada 12-Mar-2020</small>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card border-0 bg-grey h-100">
                  <div class="ratio ratio-21x9 card-img-top">
                    <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title text-light fw-bold">Contoh Video 2 yang Akan di Tampilkan</h5>
                    <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                  </div>
                  <div class="card-footer text-center">
                    <small class="text-muted">Diposting pada 12-Mar-2020</small>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card border-0 bg-grey h-100">
                  <div class="ratio ratio-21x9 card-img-top">
                    <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title text-light fw-bold">Contoh Video 3 yang Akan di Tampilkan</h5>
                    <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                  </div>
                  <div class="card-footer text-center">
                    <small class="text-muted">Diposting pada 12-Mar-2020</small>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card border-0 bg-grey h-100">
                  <div class="ratio ratio-21x9 card-img-top">
                    <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title text-light fw-bold">Contoh Video 4 yang Akan di Tampilkan</h5>
                    <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                  </div>
                  <div class="card-footer text-center">
                    <small class="text-muted">Diposting pada 12-Mar-2020</small>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card border-0 bg-grey h-100">
                  <div class="ratio ratio-21x9 card-img-top">
                    <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title text-light fw-bold">Contoh Video 5 yang Akan di Tampilkan</h5>
                    <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                  </div>
                  <div class="card-footer text-center">
                    <small class="text-muted">Diposting pada 12-Mar-2020</small>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
          <ul class="nav vizew-nav-tab" role="tablist">
            <li class="nav-item hover">
              <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}">
                <div class="single-blog-post style-2 d-flex align-items-center">
                  <div class="post-thumbnail">
                    <img src="http://img.youtube.com/vi/ybOI_hQnNz8/hqdefault.jpg" class="h-100" alt="">
                  </div>
                  <div class="post-content">
                    <h6 class="post-title">List judul video 1 yang akan di tampilkan</h6>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item hover">
              <a class="nav-link active" href="{{ route("Detail Video", app()->getLocale() ) }}" role="tab">
                <div class="single-blog-post style-2 d-flex align-items-center">
                  <div class="post-thumbnail">
                    <img src="https://images.unsplash.com/photo-1480365501497-199581be0e66?ivdG9zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                  </div>
                  <div class="post-content">
                    <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 2</h6>
                    <div class="post-meta d-flex justify-content-start">
                      <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                      <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item hover">
              <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}" role="tab">
                <div class="single-blog-post style-2 d-flex align-items-center">
                  <div class="post-thumbnail">
                    <img src="https://images.unsplash.com/photo-1447069387593-a5de0862481e?iob3Rvc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                  </div>
                  <div class="post-content">
                    <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 3</h6>
                    <div class="post-meta d-flex justify-content-start">
                      <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                      <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item hover">
              <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}">
                <div class="single-blog-post style-2 d-flex align-items-center">
                  <div class="post-thumbnail">
                    <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?i0dXJlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                  </div>
                  <div class="post-content">
                    <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 4</h6>
                    <div class="post-meta d-flex justify-content-start">
                      <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                      <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item hover">
              <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}">
                <div class="single-blog-post style-2 d-flex align-items-center">
                  <div class="post-thumbnail">
                    <img src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?i0dXJlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                  </div>
                  <div class="post-content">
                    <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 5</h6>
                    <div class="post-meta d-flex justify-content-start">
                      <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                      <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
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
                  <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Contoh Video 1 yang Akan di Tampilkan</h5>
                  <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada 12-Mar-2020</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card border-0 bg-grey h-100">
                <div class="ratio ratio-21x9 card-img-top">
                  <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Contoh Video 2 yang Akan di Tampilkan</h5>
                  <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada 12-Mar-2020</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card border-0 bg-grey h-100">
                <div class="ratio ratio-21x9 card-img-top">
                  <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Contoh Video 3 yang Akan di Tampilkan</h5>
                  <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada 12-Mar-2020</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card border-0 bg-grey h-100">
                <div class="ratio ratio-21x9 card-img-top">
                  <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Contoh Video 4 yang Akan di Tampilkan</h5>
                  <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada 12-Mar-2020</small>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card border-0 bg-grey h-100">
                <div class="ratio ratio-21x9 card-img-top">
                  <iframe src="https://www.youtube.com/embed/ybOI_hQnNz8?controls=1" title="Judul Videonya" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title text-light fw-bold">Contoh Video 5 yang Akan di Tampilkan</h5>
                  <p class="card-text text-light lh-sm">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="" class="card-text text-black small text-decoration-none link-danger"><i class="fab fa-youtube"></i> See on YouTube</a>
                </div>
                <div class="card-footer text-center">
                  <small class="text-muted">Diposting pada 12-Mar-2020</small>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-lg-4 p-0 px-1">
        <ul class="nav vizew-nav-tab" role="tablist">
          <li class="nav-item hover">
            <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}">
              <div class="single-blog-post style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="http://img.youtube.com/vi/ybOI_hQnNz8/hqdefault.jpg" class="h-100" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">List judul video 1 yang akan di tampilkan</h6>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item hover">
            <a class="nav-link active" href="{{ route("Detail Video", app()->getLocale() ) }}" role="tab">
              <div class="single-blog-post style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="https://images.unsplash.com/photo-1480365501497-199581be0e66?ivdG9zfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 2</h6>
                  <div class="post-meta d-flex justify-content-start">
                    <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                    <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item hover">
            <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}" role="tab">
              <div class="single-blog-post style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="https://images.unsplash.com/photo-1447069387593-a5de0862481e?iob3Rvc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 3</h6>
                  <div class="post-meta d-flex justify-content-start">
                    <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                    <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item hover">
            <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}">
              <div class="single-blog-post style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?i0dXJlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 4</h6>
                  <div class="post-meta d-flex justify-content-start">
                    <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                    <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item hover">
            <a class="nav-link" href="{{ route("Detail Video", app()->getLocale() ) }}">
              <div class="single-blog-post style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?i0dXJlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="post-content">
                  <h6 class="post-title">Rancangan Judul News Webiste Fakultas Teknik Universitas Udayana 5</h6>
                  <div class="post-meta d-flex justify-content-start">
                    <span><i class="fas fa-comment" aria-hidden="true"></i> 14</span>
                    <span class="px-5"><i class="fas fa-thumbs-up" aria-hidden="true"></i> 84</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
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