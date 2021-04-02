@if (App::getLocale() == 'en')
  <header class="header-area">
    <div class="top-header-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="breaking-news-area d-flex align-items-center">
              <div class="news-title">
                <p class="small">PENGUMUMAN!</p>
              </div>
              <div id="breakingNewsTicker" class="ticker">
                <ul>
                  <li><a class="text-decoration-none" href="single-post.html">Pengumuman SBMPTN</a></li>
                  <li><a class="text-decoration-none" href="single-post.html">Pendaftaran KKN</a></li>
                  <li><a class="text-decoration-none" href="single-post.html">Jadwal PKKMB Fakultas</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-meta-data d-flex align-items-center justify-content-end">
              <div class="top-social-info">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
              </div>
              <div class="top-search-area">
                <div class="btn-group" bis_skin_checked="1">
                    <a href="{{ route(Route::currentRouteName(), 'en') }}" class="btn btn-sm btn-danger border-0 text-decoration-none">EN</a>
                    <a href="{{ route(Route::currentRouteName(), 'id') }}" class="btn btn-sm btn-outline-danger border-0 text-decoration-none">ID</a>
                </div>
              </div>
              <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="vizew-main-menu" id="sticker">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <nav class="classy-navbar justify-content-between" id="vizewNav">
            <nav class="navbar">
              <div class="container-fluid p-0 m-0 justify-content-center">
                <img class="navbar-brand p-0 m-0" src="https://s2itp.unud.ac.id/wp-content/uploads/2018/02/logo-unud-2018.png" alt="" width="65" height="65">
                <a class="navbar-brand link-light fw-bold fs-6 text-wrap text-start mx-2" style="max-width: 150px; color: white" href="#">Fakultas Teknik Universitas Udayana</a>
              </div>
            </nav>
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <div class="classy-menu">
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <div class="classynav">
                <ul>
                    <li class="active"><a href="{{  route('Index', app()->getLocale() ) }}">Home</a></li>
                  <li><a href="#">Akademik</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Pedoman Akademik</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> KRS Online</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Penerimaan Mahasiswa Baru</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Kalendar Akademik</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Prodi</a>
                    <div class="megamenu">
                      <ul class="single-mega cn-col-3 text-start">
                        <li><a class="hover" href="index.html"><i class="fas fa-external-link"></i> Aristektur</a></li>
                        <li><a class="hover" href="archive-list.html"><i class="fas fa-external-link"></i> Teknik Elektro</a></li>
                        <li><a class="hover" href="archive-grid.html"><i class="fas fa-external-link"></i> Teknik Sipil</a></li>
                        <li><a class="hover" href="single-post.html"><i class="fas fa-external-link"></i> Teknik Mesin</a></li>
                        <li><a class="hover" href="video-post.html"><i class="fas fa-external-link"></i> Teknologi Informasi</a></li>
                        <li><a class="hover" href="contact.html"><i class="fas fa-external-link"></i> Teknik Industri</a></li>
                        <li><a class="hover" href="typography.html"><i class="fas fa-external-link"></i> Teknik Lingkungan</a></li>
                      </ul>
                      <ul class="single-mega cn-col-3">
                        <li><a class="hover" href="index.html"><i class="fas fa-external-link"></i> Arsitektur</a></li>
                        <li><a class="hover" href="archive-list.html"><i class="fas fa-external-link"></i> Teknik Elektro</a></li>
                        <li><a class="hover" href="archive-grid.html"><i class="fas fa-external-link"></i> Teknik Mesin</a></li>
                        <li><a class="hover" href="single-post.html"><i class="fas fa-external-link"></i> Teknik Sipil</a></li>
                        <li><a class="hover" href="video-post.html"><i class="fas fa-external-link"></i> Program S3 Ilmu Teknik</a></li>
                      </ul>
                      <ul class="single-mega cn-col-3">
                        <li><a class="hover" href="index.html"><i class="fas fa-external-link"></i> Tropical Living</a></li>
                        <li><a class="hover" href="archive-list.html"><i class="fas fa-external-link"></i> Global Engineering Program</a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="#">Kemahasiswaan</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Satuan Kredit Partisipan</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Organisasi Kemahasiswaan</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Senat Mahasiswa FT UNUD</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Bursa SMFT</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Data Bursa SMFT</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Kalendar Akademik</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Alumni</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Recana Gedung Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> List Data Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Forum Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Bursa SMFT</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Input Data Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Survey Alumni</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Tentang</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Tentang Teknik</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Management", app()->getLocale() ) }}"><i class="fas fa-link"></i> Management</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Staf Pengajar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
@endif

@if (App::getLocale() == 'id')
  <header class="header-area">
    <div class="top-header-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="breaking-news-area d-flex align-items-center">
              <div class="news-title">
                <p class="small">PENGUMUMAN!</p>
              </div>
              <div id="breakingNewsTicker" class="ticker">
                <ul>
                  <li><a class="text-decoration-none" href="single-post.html">Pengumuman SBMPTN</a></li>
                  <li><a class="text-decoration-none" href="single-post.html">Pendaftaran KKN</a></li>
                  <li><a class="text-decoration-none" href="single-post.html">Jadwal PKKMB Fakultas</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-meta-data d-flex align-items-center justify-content-end">
              <div class="top-social-info">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
              </div>
              <div class="top-search-area">
                <div class="btn-group" bis_skin_checked="1">
                    <a href="{{ route(Route::currentRouteName(), 'en') }}" class="btn btn-sm btn-outline-danger border-0 text-decoration-none">EN</a>
                    <a href="{{ route(Route::currentRouteName(), 'id') }}" class="btn btn-sm btn-danger border-0 text-decoration-none">ID</a>
                </div>
              </div>
              <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="vizew-main-menu" id="sticker">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <nav class="classy-navbar justify-content-between" id="vizewNav">
            <nav class="navbar">
              <div class="container-fluid p-0 m-0 justify-content-center">
                <img class="navbar-brand p-0 m-0" src="https://s2itp.unud.ac.id/wp-content/uploads/2018/02/logo-unud-2018.png" alt="" width="65" height="65">
                <a class="navbar-brand link-light fw-bold fs-6 text-wrap text-start mx-2" style="max-width: 150px; color: white" href="#">Fakultas Teknik Universitas Udayana</a>
              </div>
            </nav>
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <div class="classy-menu">
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <div class="classynav">
                <ul>
                  @if (App::getLocale() == 'en')
                    <li class="active"><a href="{{  route('Index', app()->getLocale() ) }}">Home</a></li>
                  @endif
                  @if (App::getLocale() == 'id')
                    <li class="active"><a href="{{ route('Index', app()->getLocale() ) }}">Beranda</a></li>
                  @endif
                  <li><a href="#">Akademik</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Pedoman Akademik</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> KRS Online</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Penerimaan Mahasiswa Baru</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Kalendar Akademik</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Prodi</a>
                    <div class="megamenu">
                      <ul class="single-mega cn-col-3 text-start">
                        <li><a class="hover" href="index.html"><i class="fas fa-external-link"></i> Aristektur</a></li>
                        <li><a class="hover" href="archive-list.html"><i class="fas fa-external-link"></i> Teknik Elektro</a></li>
                        <li><a class="hover" href="archive-grid.html"><i class="fas fa-external-link"></i> Teknik Sipil</a></li>
                        <li><a class="hover" href="single-post.html"><i class="fas fa-external-link"></i> Teknik Mesin</a></li>
                        <li><a class="hover" href="video-post.html"><i class="fas fa-external-link"></i> Teknologi Informasi</a></li>
                        <li><a class="hover" href="contact.html"><i class="fas fa-external-link"></i> Teknik Industri</a></li>
                        <li><a class="hover" href="typography.html"><i class="fas fa-external-link"></i> Teknik Lingkungan</a></li>
                      </ul>
                      <ul class="single-mega cn-col-3">
                        <li><a class="hover" href="index.html"><i class="fas fa-external-link"></i> Arsitektur</a></li>
                        <li><a class="hover" href="archive-list.html"><i class="fas fa-external-link"></i> Teknik Elektro</a></li>
                        <li><a class="hover" href="archive-grid.html"><i class="fas fa-external-link"></i> Teknik Mesin</a></li>
                        <li><a class="hover" href="single-post.html"><i class="fas fa-external-link"></i> Teknik Sipil</a></li>
                        <li><a class="hover" href="video-post.html"><i class="fas fa-external-link"></i> Program S3 Ilmu Teknik</a></li>
                      </ul>
                      <ul class="single-mega cn-col-3">
                        <li><a class="hover" href="index.html"><i class="fas fa-external-link"></i> Tropical Living</a></li>
                        <li><a class="hover" href="archive-list.html"><i class="fas fa-external-link"></i> Global Engineering Program</a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="#">Kemahasiswaan</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Satuan Kredit Partisipan</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Organisasi Kemahasiswaan</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Senat Mahasiswa FT UNUD</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Bursa SMFT</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Data Bursa SMFT</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Kalendar Akademik</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Alumni</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Recana Gedung Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> List Data Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Forum Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Bursa SMFT</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Input Data Alumni</a></li>
                      <li class="p-0"><a class="hover" href="single-post.html"><i class="fas fa-link"></i> Survey Alumni</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Tentang</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href=""><i class="fas fa-link"></i> Tentang Teknik</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Management", app()->getLocale() ) }}"><i class="fas fa-link"></i> Management</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Staff Pengajar", app()->getLocale() ) }}"><i class="fas fa-link"></i> Staf Pengajar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
@endif