
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a style="height:60px !important;" class="sidebar-brand d-flex align-items-center justify-content-center mt-2 mb-2" href="/admin/dashboard">
          <div class="sidebar-brand-icon">
            <img style="height: 55px;" src="{{asset('assets/admin/img/unud.png')}}">
          </div>
          <div style="font-size: 12px" class="sidebar-brand-text mx-3 ml-4">Fakultas Teknik Admin</div>
        </a>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <div class="sidebar-brand d-flex align-items-center justify-content" href="/admin">
          <div class="sidebar-brand-icon">
            <img style="height:45px;width:45px;" src="{{asset('assets/admin/img/profile.png')}}">
          </div>
          <div style="font-size: 10px !important;margin-left:10px;" class="sidebar-brand-text my-3">
            {{auth()->guard()->user()->nama}}
          </div>
        </div>
        <!-- Divider -->
        <hr style="margin-top: 20px" class="sidebar-divider my-0">
  
      <!-- Nav Item - Dashboard -->
      <li class="nav-item" id="sidebarDashboard">
        <a class="nav-link" href="/admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr style="margin-top: 20px" class="sidebar-divider my-0">

        <li class="nav-item" id="sidebarBerita">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBerita" aria-expanded="true" aria-controls="collapseBerita">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span>
          </a>
          <div id="collapseBerita" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Berita Menu:</h6>
              <a class="collapse-item" href="/admin/category"><i class="fas fa-fw fa-grip-horizontal"></i>  Kategori Berita</a>
              <a class="collapse-item" href="/admin/news"><i class="fas fa-fw fa-list"></i>  Daftar Berita</a>
            </div>
          </div>
        </li>

        <li class="nav-item" id="sidebarPengumuman">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengumuman" aria-expanded="true" aria-controls="collapsePengumuman">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Pengumuman</span>
          </a>
          <div id="collapsePengumuman" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pengumuman Menu:</h6>
              <a class="collapse-item" href="/admin/category/pengumuman"><i class="fas fa-fw fa-grip-horizontal"></i>  Kategori Pengumuman</a>
              <a class="collapse-item" href="/admin/announcement"><i class="fas fa-fw fa-list"></i>  Daftar Pengumuman</a>
            </div>
          </div>
        </li>

        <li class="nav-item" id="sidebarAgenda">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgenda" aria-expanded="true" aria-controls="collapseAgenda">
            <i class="fas fa-fw fa-calendar-week"></i>
            <span>Agenda</span>
          </a>
          <div id="collapseAgenda" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Agenda Menu:</h6>
              <a class="collapse-item" href="/admin/category/agenda"><i class="fas fa-fw fa-grip-horizontal"></i>  Kategori Agenda</a>
              <a class="collapse-item" href="/admin/events"><i class="fas fa-fw fa-list"></i>  Daftar Agenda</a>
            </div>
          </div>
        </li>

        <li class="nav-item" id="sidebarVideo">
          <a class="nav-link" href="/admin/videos">
            <i class="fas fa-fw fa-video"></i>
            <span>Video</span></a>
        </li>

        <li class="nav-item" id="sidebarGaleri">
          <a class="nav-link" href="/admin/galery">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span></a>
        </li>

        <li class="nav-item" id="sidebarDownload">
          <a class="nav-link" href="/admin/downloads">
            <i class="fas fa-fw fa-download"></i>
            <span>Download</span></a>
        </li>

        <li class="nav-item" id="sidebarPage">
          <a class="nav-link" href="/admin/pages">
            <i class="fas fa-fw fa-pager"></i>
            <span>Page</span></a>
        </li>

        <li class="nav-item" id="sidebarManajemen">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff" aria-expanded="true" aria-controls="collapseStaff">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Staf & Manajemen</span>
          </a>
          <div id="collapseStaff" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Staf & Manajemen:</h6>
              <a class="collapse-item" href="/admin/jabatan"><i class="fas fa-fw fa-user-tie"></i>  Jabatan</a>
              <a class="collapse-item" href="/admin/management" ><i class="fas fa-fw fa-sitemap"></i>   Manajemen</a>
              <a class="collapse-item" href="/admin/staf"><i class="fas fa-fw fa-user"></i>  Staf Pengajar</a>
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

        <li class="nav-item" id="sidebarPengaturan">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProdi" aria-expanded="true" aria-controls="collapseProdi">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
          </a>
          <div id="collapseProdi" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pengaturan Menu:</h6>
              @if(auth()->guard()->user()->role==1)
                <a class="collapse-item" href="/admin/admins" ><i class="fas fa-fw fa-users-cog"></i>  Admin</a>
              @endif
              <a class="collapse-item" href="/admin/prodi" ><i class="fas fa-fw fa-building"></i>  Program Studi</a>
              <a class="collapse-item" href="/admin/menus" ><i class="fas fa-fw fa-list"></i>  Website Menu</a>
              <a class="collapse-item" href="/admin/setting/preferences" ><i class="fas fa-fw fa-cog"></i>  Preferences</a>
              <a class="collapse-item" href="/admin/setting/social"><i class="fas fa-fw fa-share"></i>  Social Media</a>
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