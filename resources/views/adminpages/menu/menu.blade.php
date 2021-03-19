@extends('adminlayout.layout')
@section('title', 'List Menu')
@section('content')
    <!-- Begin Page Content -->
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
          <!-- DataTales Example -->
          <!-- Copy drisini -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Menu</h6>
            </div>
            <div class="card-body">
                <a class= "btn btn-success text-white mb-4" href="{{route('admin-post-create')}}"><i class="fas fa-plus"></i>  Tambah Menu</a>
                    @foreach($menu as $menu)
                    <ul class="list-group mb-1">
                        <li class="list-group-item">{{$menu->menu_ina}}
                            <a style="float:right" class="btn btn-danger btn-sm ml-1" href="#"><i class="fas fa-trash"></i></a>
                            <a style="float:right" class="btn btn-info btn-sm ml-1" href="#" ><i class="fas fa-pencil-alt" ></i></a>
                            <a style="float:right" href="#"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                        </li>
                    </ul>
                        @foreach($submenu->where('id_menu', $menu->id) as $sub)
                        <ul class="list-group ml-5 mb-1">
                            <li class="list-group-item">{{$sub->submenu_ina}}
                                <a style="float:right" class="btn btn-danger btn-sm ml-1" href="#"><i class="fas fa-trash"></i></a>
                                <a style="float:right" class="btn btn-info btn-sm ml-1" href="#" ><i class="fas fa-pencil-alt" ></i></a>
                                <a style="float:right" href="#"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                            </li>
                        </ul>
                    @endforeach
                    @endforeach
            </div>
          </div>
          <!-- smpe sini -->
        
        <!-- Content Row -->
        <div class="row">
        <form method="POST" enctype="multipart/form-data" action="/admin/profile">
        
        </form>
        </div>

        <!-- Content Row -->

        <div class="row">
          
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Content Column -->
          <div class="col-lg-6 mb-4">

            <!-- Color System -->
            <div class="row">
              <div class="card mb-4">
<!--                 <div class="card-header">
                  Default Card Example
                </div>
                <div class="card-body">
                  This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div> -->
              </div>
          </div>

          </div>

          <div class="col-lg-6 mb-4">

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->


@endsection

@section('custom_javascript')
<script>
//Delete
function deletevideo(id){
        $("#form-delete-video").attr("action", "/admin/videos/"+id+"/delete");
        $('#deleteModal').modal('show');
    }
</script>
@endsection