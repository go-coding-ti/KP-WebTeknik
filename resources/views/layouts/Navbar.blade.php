@if (App::getLocale() == 'en')
  <header class="header-area">
    <div class="top-header-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="breaking-news-area d-flex align-items-center">
              <div class="news-title">
                <p class="small">ANNOUNCEMENT!</p>
              </div>
              <div id="breakingNewsTicker" class="ticker">
                <ul>
                  @foreach($pengumumans as $pengumuman)
                    <li><a class="text-decoration-none" href="single-post.html">{{$pengumuman->title_eng}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-meta-data d-flex align-items-center justify-content-end">
              <div class="top-social-info">
                @foreach($sosmeds as $sosmed)
                  <a href="{{$sosmed->link}}" target="_blank"><img src="{{$sosmed->logo}}" style="width: 25px; height: 25px;"></a>
                @endforeach
              </div>
              <div class="top-search-area">
                <div class="btn-group" bis_skin_checked="1">
                    <a href="{{ route('Index', 'en') }}" class="btn btn-sm btn-danger border-0 text-decoration-none">EN</a>
                    <a href="{{ route('Index', 'id') }}" class="btn btn-sm btn-outline-danger border-0 text-decoration-none">ID</a>
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
                <img class="navbar-brand p-0 m-0" src="{{$preference->logo}}" alt="" width="65" height="65">
                <a class="navbar-brand link-light fw-bold fs-6 text-wrap text-start mx-2" style="max-width: 150px; color: white" href="{{ route('Index', app()->getLocale() ) }}">{{$preference->nama_website_eng}}</a>
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
                  <li class="active"><a href="{{ route('Index', app()->getLocale() ) }}">Home</a></li>
                  @foreach($headers as $header)
                    <li @if($header->header_ina == "Beranda") class="active" @endif><a href="{{$header->header_url}}" @if($header->id_page == NULL && $header->header_url != "#") target="_blank" @endif>{{$header->header_eng}} </a>
                      @if($header->menu->count() > 0)
                      <ul class="list-group list-group-flush dropdown" style="width: 250px ">
                        @foreach($menus as $menu)
                          @if($menu->id_header == $header->id)
                            <li class="p-0"><a class="hover" href="{{$menu->menu_url}}" @if($menu->id_page == NULL) target="_blank" @endif><i @if($menu->id_page == NULL && $menu->menu_url != "#") class="fas fa-external-link" @else class="fas fa-link" @endif></i> {{$menu->menu_eng}}</a>
                              @if($menu->submenu->count() > 0)
                              <ul class="list-group list-group-flush dropdown" style="width: wrap-content; margin-left: 70px">
                                @foreach($submenus as $submenu)
                                  @if($submenu->id_menu == $menu->id)
                                    <li class="p-0"><a class="hover" href="{{$submenu->menu_url}}" @if($submenu->id_page == NULL) target="_blank" @endif><i @if($submenu->id_page == NULL && $submenu->menu_url != "#") class="fas fa-external-link" @else class="fas fa-link" @endif></i> {{$submenu->menu_eng}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                              @endif
                            </li>
                          @endif
                        @endforeach
                      </ul>
                      @endif
                    </li>
                  @endforeach
                  <li><a href="#">About</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="{{ route('About', app()->getLocale() ) }}"><i class="fas fa-link"></i> About Faculty of Engineering</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Management", app()->getLocale() ) }}"><i class="fas fa-link"></i> Management</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Staff Pengajar", app()->getLocale() ) }}"><i class="fas fa-link"></i> Staf</a></li>
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
                  @foreach($pengumumans as $pengumuman)
                    <li><a class="text-decoration-none" href="single-post.html">{{$pengumuman->title_ina}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="top-meta-data d-flex align-items-center justify-content-end">
              <div class="top-social-info">
                @foreach($sosmeds as $sosmed)
                  <a href="{{$sosmed->link}}" target="_blank"><img src="{{$sosmed->logo}}" style="width: 25px; height: 25px;"></a>
                @endforeach
                {{-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a> --}}
              </div>
              <div class="top-search-area">
                <div class="btn-group" bis_skin_checked="1">
                    <a href="{{ route('Index', 'en') }}" class="btn btn-sm btn-outline-danger border-0 text-decoration-none">EN</a>
                    <a href="{{ route('Index', 'id') }}" class="btn btn-sm btn-danger border-0 text-decoration-none">ID</a>
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
                <img class="navbar-brand p-0 m-0" src="{{$preference->logo}}" alt="" width="65" height="65">
                <a class="navbar-brand link-light fw-bold fs-6 text-wrap text-start mx-2" style="max-width: 150px; color: white" href="{{ route('Index', app()->getLocale() ) }}">{{$preference->nama_website_ina}}</a>
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
                  <li class="active"><a href="{{ route('Index', app()->getLocale() ) }}">Beranda</a></li>
                  @foreach($headers as $header)
                    <li><a href="{{$header->header_url}}" @if($header->id_page == NULL) target="_blank" @endif>{{$header->header_ina}} </a>
                      @if($header->menu->count() > 0)
                      <ul class="list-group list-group-flush dropdown" style="width: 250px ">
                        @foreach($menus as $menu)
                          @if($menu->id_header == $header->id)
                            <li class="p-0"><a class="hover" href="{{$menu->menu_url}}" @if($menu->id_page == NULL) target="_blank" @endif><i @if($menu->id_page == NULL) class="fas fa-external-link" @else class="fas fa-link" @endif></i> {{$menu->menu_ina}}</a>
                              @if($menu->submenu->count() > 0)
                              <ul class="list-group list-group-flush dropdown" style="width: wrap-content; margin-left: 70px">
                                @foreach($submenus as $submenu)
                                  @if($submenu->id_menu == $menu->id)
                                    <li class="p-0"><a class="hover" href="{{$submenu->menu_url}}" @if($submenu->id_page == NULL) target="_blank" @endif><i @if($submenu->id_page == NULL) class="fas fa-external-link" @else class="fas fa-link" @endif></i> {{$submenu->menu_ina}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                              @endif
                            </li>
                          @endif
                        @endforeach
                      </ul>
                      @endif
                    </li>
                  @endforeach
                  <li><a href="#">Tentang</a>
                    <ul class="list-group list-group-flush dropdown" style="width: wrap-content">
                      <li class="p-0"><a class="hover" href="{{ route('About', app()->getLocale() ) }}"><i class="fas fa-link"></i> Tentang Teknik</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Management", app()->getLocale() ) }}"><i class="fas fa-link"></i> Management</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Staff Pengajar", app()->getLocale() ) }}"><i class="fas fa-link"></i> Staf Pengajar</a></li>
                    </ul>
                  </li>
                  {{-- @if (App::getLocale() == 'en')
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
                      <li class="p-0"><a class="hover" href="{{ route('About', app()->getLocale() ) }}"><i class="fas fa-link"></i> Tentang Teknik</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Management", app()->getLocale() ) }}"><i class="fas fa-link"></i> Management</a></li>
                      <li class="p-0"><a class="hover" href="{{ route("Staff Pengajar", app()->getLocale() ) }}"><i class="fas fa-link"></i> Staf Pengajar</a></li>
                    </ul>
                  </li>
                </ul> --}}
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
@endif