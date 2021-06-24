@extends('adminlayout.layout')
@section('title', 'Daftar Agenda')
@section('content')

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Agenda</h1>
  <p class="mb-4">Daftar Agenda Fakultas Teknik Universitas Udayana</p>

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
      <h6 class="m-0 font-weight-bold text-primary">Daftar Agenda</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <a href="{{route('admin-agenda-create')}}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Agenda</span>
      </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul Bahasa Indonesia</th>
              <th>Judul Bahasa Inggris</th>
              <th>Kategori</th>
              <th width="75">Status</th>
              <th width="150">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($data as $i => $agenda)
            <tr>
              <td>{{$agenda->title_ina}}</td>
              <td>{{$agenda->title_eng}}</td>
              <td>{{$agenda->kategori->kategori_ina}}
              <td>
                <label class="switch">
                  <input id="signup-token_{{$agenda->id}}" name="_token" type="hidden" value="{{csrf_token()}}">
                @if($agenda->status == "aktif")
                  <input type="checkbox" id="status_{{$agenda->id}}" onchange="statusBtn({{$agenda->id}})" checked>
                @else
                  <input type="checkbox" id="status_{{$agenda->id}}" onchange="statusBtn({{$agenda->id}})">
                @endif
                  <span class="slider round"></span>
                </label>
              </td>
              <td><a style="margin-right:7px" href="/admin/events/show/{{$agenda->kategori->kategori_lower}}/{{$agenda->title_slug}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/events/{{$agenda->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deleteAgenda({{$agenda->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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
  //Soft Delete Agenda
  function deleteAgenda(id){
    swal({
      title: 'Anda yakin ingin menghapus agenda ini?',
      icon: 'warning',
      buttons: ["Tidak", "Ya"],
    }).then(function(value) {
      if (value) {
      jQuery.ajax({  
        url: 'events/delete/'+id,
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

  //Switch Status Page
  function statusBtn(id) {
    var checkBox = document.getElementById("status_"+id);
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      swal({
          title: 'Anda yakin ingin mengaktifkan agenda ini?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({  
              url: "/admin/events/status/"+id+"/aktif",
              type: "GET",
              success: function(result){
              }
          });
        }else{
          document.getElementById("status_"+id).checked = false;
        }
      });
    } else {
      swal({
          title: 'Anda yakin ingin menonaktifkan agenda ini?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({
              url: "/admin/events/status/"+id+"/tidak_aktif",
              type: "GET",
              success: function(result){
              }
          });
        }else{  
          document.getElementById("status_"+id).checked = true;
        }
      });
    }
  }

  $('#sidebarAgenda').addClass("active");
</script>
@endsection