
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a style="height:50px !important;" class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
          <div class="sidebar-brand-icon">
            <img style="height: 37px;" src="{{asset('assets/admin/img/unud.png')}}">
          </div>
          <div style="font-size: 15px" class="sidebar-brand-text mx-3">Web Teknik</div>
        </a>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <div class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
          <div class="sidebar-brand-icon">
            <img class="border" style="height:60px;width:50px;" src="{{asset('assets/admin/img/profile.png')}}">
          </div>
          <div style="font-size: 10px !important;margin-left:10px;" class="sidebar-brand-text my-3">
            Abdi Purnawan, S.Kom.
          </div>
        </div>
        <!-- Divider -->
        <hr style="margin-top: 20px" class="sidebar-divider my-0">
  
<!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
  
        <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
          <a class="nav-link collapsed"href="#" aria-expanded="true" aria-controls="collapseCategory" data-toggle="collapse" data-target="#collapseCategory">
            <i class="fas fa-fw fa-list"></i>
            <span>Kategori</span>
          </a>
          <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kategori Menu:</h6>
              <a class="collapse-item" href="/admin/category"><i class="fas fa-fw fa-list"></i>  Kategori Berita</a>
              <a class="collapse-item" href="/admin/category/pengumuman"><i class="fas fa-fw fa-list"></i>  Kategori Pengumuman</a>
              <a class="collapse-item" href="/admin/category/agenda"><i class="fas fa-fw fa-list"></i>  Kategori Agenda</a>
            </div>
          </div>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost">
            <i class="fas fa-fw fa-keyboard"></i>
            <span>Post</span>
          </a>
          <div id="collapsePost" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Post Menu:</h6>
              <a class="collapse-item" href="/admin/posts/create" ><i class="fas fa-fw fa-plus"></i>   Add Post</a>
              <a class="collapse-item" href="/admin/posts"><i class="fas fa-fw fa-list"></i>  List Post</a>
            </div>
          </div>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBerita" aria-expanded="true" aria-controls="collapseBerita">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span>
          </a>
          <div id="collapseBerita" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Berita Menu:</h6>
              <a class="collapse-item" href="/admin/news/create" ><i class="fas fa-fw fa-plus"></i>   Add Berita</a>
              <a class="collapse-item" href="/admin/news"><i class="fas fa-fw fa-list"></i>  List Berita</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengumuman" aria-expanded="true" aria-controls="collapsePengumuman">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Pengumuman</span>
          </a>
          <div id="collapsePengumuman" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pengumuman Menu:</h6>
              <a class="collapse-item" href="/admin/announcement/create" ><i class="fas fa-fw fa-plus"></i>   Add Pengumuman</a>
              <a class="collapse-item" href="/admin/announcement"><i class="fas fa-fw fa-list"></i>  List Pengumuman</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgenda" aria-expanded="true" aria-controls="collapseAgenda">
            <i class="fas fa-fw fa-calendar-week"></i>
            <span>Agenda</span>
          </a>
          <div id="collapseAgenda" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Agenda Menu:</h6>
              <a class="collapse-item" href="/admin/events/create" ><i class="fas fa-fw fa-plus"></i>   Add Agenda</a>
              <a class="collapse-item" href="/admin/events"><i class="fas fa-fw fa-list"></i>  List Agenda</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-pager"></i>
            <span>Page</span>
          </a>
          <div id="collapsePage" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Page Menu:</h6>
              <a class="collapse-item" href="/admin/pages/create" ><i class="fas fa-fw fa-plus"></i>   Add Page</a>
              <a class="collapse-item" href="/admin/pages"><i class="fas fa-fw fa-list"></i>  List Page</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery" aria-expanded="true" aria-controls="collapseGallery">
            <i class="fas fa-fw fa-image"></i>
            <span>Gallery</span>
          </a>
          <div id="collapseGallery" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Gallery Menu:</h6>
              <a class="collapse-item" href="/admin/galery/create" ><i class="fas fa-fw fa-plus"></i>   Add Galery</a>
              <a class="collapse-item" href="/admin/galery"><i class="fas fa-fw fa-list"></i>  List Galery</a>
            </div>
          </div>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlide" aria-expanded="true" aria-controls="collapseSlide">
            <i class="fas fa-fw fa-image"></i>
            <span>Slide Show</span>
          </a>
          <div id="collapseSlide" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Slide Show Menu:</h6>
              <a class="collapse-item" href="/admin/pages/create" ><i class="fas fa-fw fa-plus"></i>   Add Slide Show</a>
              <a class="collapse-item" href="/admin/pages"><i class="fas fa-fw fa-list"></i>  List Slide Show</a>
            </div>
          </div>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDownload" aria-expanded="true" aria-controls="collapseDownload">
            <i class="fas fa-fw fa-download"></i>
            <span>Download</span>
          </a>
          <div id="collapseDownload" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Download Menu:</h6>
              <a class="collapse-item" href="/admin/downloads/create" ><i class="fas fa-fw fa-plus"></i>   Add Download</a>
              <a class="collapse-item" href="/admin/downloads"><i class="fas fa-fw fa-list"></i>  List Download</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaturan" aria-expanded="true" aria-controls="collapsePengaturan">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
          </a>
          <div id="collapsePengaturan" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pengaturan Menu:</h6>
              <a class="collapse-item" href="/admin/menu" ><i class="fas fa-fw fa-list"></i>  Menu</a>
              <a class="collapse-item" href="/admin/setting/preferences" ><i class="fas fa-fw fa-cog"></i>  Preferences</a>
              <a class="collapse-item" href="/admin/setting/social"><i class="fas fa-fw fa-share"></i>  Social Media</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVideo" aria-expanded="true" aria-controls="collapseVideo">
            <i class="fas fa-fw fa-video"></i>
            <span>Video</span>
          </a>
          <div id="collapseVideo" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Menu Video:</h6>
              <a class="collapse-item" href="/admin/videos/create" ><i class="fas fa-fw fa-plus"></i>   Add Video</a>
              <a class="collapse-item" href="/admin/videos"><i class="fas fa-fw fa-list"></i>  List Video</a>
            </div>
          </div>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMiniBox" aria-expanded="true" aria-controls="collapseMiniBox">
            <i class="fas fa-fw fa-file"></i>
            <span>Minibox</span>
          </a>
          <div id="collapseMiniBox" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Minibox Menu:</h6>
              <a class="collapse-item" href="utilities-color.html">Minibox 1</a>
              <a class="collapse-item" href="utilities-border.html">Minibox 2</a>
              <a class="collapse-item" href="utilities-animation.html">Minibox 3</a>
              <a class="collapse-item" href="utilities-other.html">Other Category</a>
            </div>
          </div>
        </li> --}}
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <!--<div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>-->
  
      </ul>
      <!-- End of Sidebar