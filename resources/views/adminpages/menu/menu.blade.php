@extends('adminlayout.layout')
@section('title', 'Daftar Menu')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Menu</h1>
      <p class="mb-4">Daftar Menu Fakultas Teknik Universitas Udayana</p>

      @if (session()->has('statusInput'))
        <div class="row">
          <div class="col-sm-12 alert alert-success alert-dismissible fade show" role="alert">
              {{session()->get('statusInput')}}
              <button type="button" class="close" data-dismiss="alert"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      @endif

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Menu</h6>
        </div>
        <div class="card-body">
          <a href="{{route('admin-header-create')}}" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Header</span>
          </a>

          <a href="{{route('admin-menu-create')}}" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Menu</span>
          </a>
          
          <a href="{{route('admin-submenu-create')}}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Sub Menu</span>
          </a>
            <ul class="list-group mb-1 mt-4">
              <li class="list-group-item">Beranda</li>
            </ul>
                @foreach($headers as $header)
                <ul class="list-group mb-1">
                    <li class="list-group-item">{{$header->header_ina}}
                        <a style="float:right" class="btn btn-danger btn-sm ml-1" href="#" onclick="deleteHeader({{$header->id}})"><i class="fas fa-trash"></i></a>
                        <a style="float:right" class="btn btn-info btn-sm ml-1" href="/admin/menus/headers/{{$header->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a>
                        {{-- <a style="float:right" href="{{$header->header_url}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a> --}}
                    </li>
                </ul>
                  @foreach($menus->where('id_header', $header->id) as $menu)
                    <ul class="list-group ml-5 mb-1">
                        <li class="list-group-item">{{$menu->menu_ina}}
                            <a style="float:right" class="btn btn-danger btn-sm ml-1" href="#" onclick="deleteMenu({{$menu->id}})"><i class="fas fa-trash"></i></a>
                            <a style="float:right" class="btn btn-info btn-sm ml-1" href="/admin/menus/menus/{{$menu->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a>
                            {{-- <a style="float:right" href="{{$menu->menu_url}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a> --}}
                        </li>
                    </ul>
                    @foreach($submenus->where('id_menu', $menu->id) as $submenu)
                      <ul class="list-group ml-5 mb-1">
                        <li class="list-group-item ml-5">{{$submenu->menu_ina}}
                            <a style="float:right" class="btn btn-danger btn-sm ml-1" href="#" onclick="deleteSubmenu({{$submenu->id}})"><i class="fas fa-trash"></i></a>
                            <a style="float:right" class="btn btn-info btn-sm ml-1" href="/admin/menus/submenus/{{$submenu->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a>
                            {{-- <a style="float:right" href="{{$submenu->menu_url}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a> --}}
                        </li>
                      </ul>
                    @endforeach
                  @endforeach
                @endforeach
                <ul class="list-group mb-1">
                  <li class="list-group-item">Tentang</li>
                </ul>
                <ul class="list-group ml-5 mb-1">
                  <li class="list-group-item">Tentang Fakultas Teknik</li>
                </ul>
                <ul class="list-group ml-5 mb-1">
                  <li class="list-group-item">Manajemen</li>
                </ul>
                <ul class="list-group ml-5 mb-1">
                  <li class="list-group-item">Staf Pengajar</li>
                </ul>
        </div>
      </div>
  </div>


@endsection

@section('custom_javascript')
<script>

//Soft Delete Header
function deleteHeader(id){
  swal({
    title: 'Anda yakin ingin menghapus header ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'menus/headers/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

//Soft Delete Menu
function deleteMenu(id){
  swal({
    title: 'Anda yakin ingin menghapus menu ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'menus/menus/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

//Soft Delete SubMenu
function deleteSubmenu(id){
  swal({
    title: 'Anda yakin ingin menghapus sub menu ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'menus/submenus/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

$('#sidebarPengaturan').addClass("active");
</script>
@endsection