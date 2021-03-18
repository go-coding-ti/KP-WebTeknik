
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a style="height:50px !important;" class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
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
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
  
        <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
          <a class="nav-link collapsed"href="/admin/category" aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-list"></i>
            <span>Category</span>
          </a>
          <!-- <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Category Menu:</h6>
              <a class="collapse-item" href="/admin/category"><i class="fas fa-fw fa-list"></i>  List Category</a>
            </div>
          </div> -->
        </li>

        <li class="nav-item">
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
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-table"></i>
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
              <a class="collapse-item" href="/admin/pages/create" ><i class="fas fa-fw fa-plus"></i>   Add Galery</a>
              <a class="collapse-item" href="/admin/pages"><i class="fas fa-fw fa-list"></i>  List Galery</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
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
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseYudisium" aria-expanded="true" aria-controls="collapseYudisium">
            <i class="fas fa-fw fa-user"></i>
            <span>Yudisium</span>
          </a>
          <div id="collapseYudisium" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Yudisium Menu:</h6>
              <a class="collapse-item" href="utilities-color.html">Yudisium 1</a>
              <a class="collapse-item" href="utilities-border.html">Yudisium 2</a>
              <a class="collapse-item" href="utilities-animation.html">Yudisium 3</a>
              <a class="collapse-item" href="utilities-other.html">Other Category</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDownload" aria-expanded="true" aria-controls="collapseDownload">
            <i class="fas fa-fw fa-download"></i>
            <span>Download</span>
          </a>
          <div id="collapseDownload" class="collapse" aria-labelledby="headingKI" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Download Menu:</h6>
              <a class="collapse-item" href="utilities-color.html">Download 1</a>
              <a class="collapse-item" href="utilities-border.html">Download 2</a>
              <a class="collapse-item" href="utilities-animation.html">Download 3</a>
              <a class="collapse-item" href="utilities-other.html">Other Category</a>
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
              <a class="collapse-item" href="/admin/pages/create" ><i class="fas fa-fw fa-cog"></i>  Preferences</a>
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

        <li class="nav-item">
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
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <!--<div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>-->
  
      </ul>
      <!-- End of Sidebar