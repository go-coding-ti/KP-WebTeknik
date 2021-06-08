@extends('adminlayout.layout')
@section('title', 'List Berita')
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Berita</h1>
    <p class="mb-4">Daftar Berita Fakultas Teknik Universitas Udayana</p>
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
    <!-- DataTales Example -->
    <!-- Copy drisini -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <a href="{{route('admin-berita-create')}}" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Berita</span>
        </a>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Judul Bahasa Indonesia</th>
                <th>Judul Bahasa Inggris</th>
                <th>Kategori</th>
                <th>Dilihat</th>
                <th width="75">Status</th>
                <th width="150">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $i => $berita)
                <tr>
                  <td>{{$berita->title_ina}}</td>
                  <td>{{$berita->title_eng}}</td>
                  <td>{{$berita->kategori->kategori_ina}}
                  <td>{{$berita->read_count}} Kali</td>
                  <td>
                    <label class="switch">
                      <input id="signup-token_{{$berita->id}}" name="_token" type="hidden" value="{{csrf_token()}}">
                    @if($berita->status == "aktif")
                      <input type="checkbox" id="status_{{$berita->id}}" onclick="statusBtn({{$berita->id}})" checked>
                    @else
                      <input type="checkbox" id="status_{{$berita->id}}" onclick="statusBtn({{$berita->id}})">
                    @endif
                      <span class="slider round"></span>
                    </label>
                  
                  </td>
                  <td><a style="margin-right:7px" href="/admin/news/show/{{$berita->kategori->kategori_lower}}/{{$berita->title_slug}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/news/{{$berita->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deleteberita({{$berita->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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
//Soft Delete Berita
function deleteberita(id){
  swal({
    title: 'Anda yakin ingin menghapus berita ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'news/delete/'+id,
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
        title: 'Anda yakin ingin mengaktifkan berita ini?',
        icon: 'warning',
        buttons: ["Tidak", "Ya"],
    }).then(function(value) {
        if (value) {
          jQuery.ajax({  
            url: "/admin/news/status/"+id+"/aktif",
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
        title: 'Anda yakin ingin menonaktifkan berita ini?',
        icon: 'warning',
        buttons: ["Tidak", "Ya"],
    }).then(function(value) {
        if (value) {
          jQuery.ajax({
            url: "/admin/news/status/"+id+"/tidak_aktif",
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

$('#sidebarBerita').addClass("active");
</script>
@endsection