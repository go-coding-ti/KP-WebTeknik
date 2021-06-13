@extends('adminlayout.layout')
@section('title', 'Daftar Galeri')
@section('content')
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Galeri</h1>
  <p class="mb-4">Daftar Galeri Fakultas Teknik Universitas Udayana</p>

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
      <h6 class="m-0 font-weight-bold text-primary">Daftar Galeri</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a href="{{route('admin-galeri-create')}}" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Galeri</span>
        </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul Bahasa Indonesia</th>
              <th>Judul Bahasa Inggris</th>
              <th width="150px">Action</th>
            </tr>
          </thead>

          <tbody>
          @foreach ($data as $i => $galeri)
            <tr>
              <td>{{$galeri->title_ina}}</td>
              <td>{{$galeri->title_eng}}</td>
              <td><a style="margin-right:7px" href="/admin/galery/show/{{$galeri->title_slug}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/galery/{{$galeri->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deleteGaleri({{$galeri->id}})" href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom_javascript')
<script>
//Soft Delete Galeri
function deleteGaleri(id){
  swal({
    title: 'Anda yakin ingin menghapus galeri ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'galery/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

$('#sidebarGaleri').addClass("active");
</script>
@endsection