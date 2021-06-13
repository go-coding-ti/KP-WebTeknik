@extends('adminlayout.layout')
@section('title', 'Daftar Staf Pengajar')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Staf Pengajar</h1>
      <p class="mb-4">Daftar Staf Pengajar Fakultas Teknik Universitas Udayana</p>

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

      @if (count($errors)>0)
        <div class="row">
          <div class="col-sm-12 alert alert-danger alert-dismissible fade show" role="alert">
              <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
              </ul>
              <button type="button" class="close" data-dismiss="alert"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      @endif

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Staf Pengajar</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <a href="{{route('admin-staff-create')}}" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Staf</span>
            </a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Tanggal Lahir</th>
                  <th>Program Studi</th>
                  <th width="150">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($data as $i => $staff)
                <tr>
                  <td>{{$staff->nama}}</td>
                  <td>{{$staff->nip}}</td>
                  <td>{{ date('d M Y', strtotime($staff->tanggal_lahir)) }}</td>
                  <td>{{$staff->prodi->prodi_ina}}
                  <td><a style="margin-right:7px" href="/admin/staf/show/{{$staff->id}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/staf/{{$staff->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletestaf({{$staff->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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


//Soft Delete Page
function deletestaf(id){
  swal({
    title: 'Anda yakin ingin menghapus staff ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'staf/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

//Success Alert
function alertSuccess(msg){
  swal({
    title: "Sukses",
    text: msg,
    icon: "success",
    button: "Ok",
  });
}

  $('#sidebarManajemen').addClass("active");

</script>
@endsection