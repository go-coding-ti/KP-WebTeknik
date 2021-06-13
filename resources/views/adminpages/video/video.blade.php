@extends('adminlayout.layout')
@section('title', 'Daftar Video')
@section('content')

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Video</h1>
  <p class="mb-4">Daftar Video Fakultas Teknik Universitas Udayana</p>

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
      <h6 class="m-0 font-weight-bold text-primary">Daftar Video</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <a href="{{route('admin-video-create')}}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah Video</span>
      </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul Bahasa Indonesia</th>
              <th>Judul Bahasa Inggris</th>
              <th>Profile</th>
              <th width="150px">Action</th>
            </tr>
          </thead>

          <tbody>
          @foreach ($data as $i => $video)
            <tr>
              <td>{{$video->judul}}</td>
              <td>{{$video->judul_eng}}</td>
              <td>
                <label class="switch">
                  <input id="signup-token_{{$video->id}}" name="_token" type="hidden" value="{{csrf_token()}}">
                @if($video->is_profile == 1)
                  <input type="checkbox" id="status_{{$video->id}}" onclick="statusBtn({{$video->id}})" checked>
                @else
                  <input type="checkbox" id="status_{{$video->id}}" onclick="statusBtn({{$video->id}})">
                @endif
                  <span class="slider round"></span>
                </label>
              
              </td>
              <td><a style="margin-right:7px" href="/admin/videos/show/{{$video->judul_slug}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/videos/{{$video->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletevideo({{$video->id}})" href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Hapus Video Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Video</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin untuk menghapus video ini?</p>
            <form id="form-delete-video" method="post" action="">
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
              </form>              
        </div>
      </div>
    </div>
</div>
@endsection

@section('custom_javascript')
<script>
//Delete
function deletevideo(id){
        $("#form-delete-video").attr("action", "/admin/videos/"+id+"/delete");
        $('#deleteModal').modal('show');
    }

//Switch Status Page
function statusBtn(id) {
    var checkBox = document.getElementById("status_"+id);
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      swal({
          title: 'Anda yakin ingin menggunakan video ini sebagai video profile?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({  
              url: "/admin/videos/status/"+id+"/1",
              type: "GET",
              success: function(result){
                location.reload();
              }
          });
        }else{
          document.getElementById("status_"+id).checked = false;
        }
      });
    } else {
      swal({
          title: 'Anda yakini ingin menghapus video ini dari video profile?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({
              url: "/admin/videos/status/"+id+"/0",
              type: "GET",
              success: function(result){
                location.reload();
              }
          });
        }else{  
          document.getElementById("status_"+id).checked = true;
        }
      });
    }
  }

  $('#sidebarVideo').addClass("active");
</script>
@endsection