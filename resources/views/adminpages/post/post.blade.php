@extends('adminlayout.layout')
@section('title', 'List Posts')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Posts</h1>
          <p class="mb-4">Daftar Posts Fakultas Teknik Universitas Udayana</p>

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
              <h6 class="m-0 font-weight-bold text-primary">List Post</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" href="{{route('admin-post-create')}}"><i class="fas fa-plus"></i>  Tambah Post</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Judul Ina</th>
                      <th>Judul Eng</th>
                      <th>Kategori</th>
                      <th width="75">Status</th>
                      <th width="150">Action</th>
                    </tr>
                  </thead>
<!--                   <tfoot>
                  <tr>
                      <th>Judul</th>
                      <th>Berita</th>
                      <th>Action</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                  @foreach ($data as $i => $post)
                    <tr>
                      <td>{{$post->title_ina}}</td>
                      <td>{{$post->title_eng}}</td>
                      <td>{{$post->kategori->kategori_ina}}
                      <td>
                        <label class="switch">
                         <input id="signup-token_{{$post->id}}" name="_token" type="hidden" value="{{csrf_token()}}">
                        @if($post->status == "aktif")
                          <input type="checkbox" id="status_{{$post->id}}" onclick="statusBtn({{$post->id}})" checked>
                        @else
                          <input type="checkbox" id="status_{{$post->id}}" onclick="statusBtn({{$post->id}})">
                        @endif
                          <span class="slider round"></span>
                        </label>
                      
                      </td>
                      <td><a style="margin-right:7px" href="/admin/posts/show/{{$post->kategori->kategori_lower}}/{{$post->title_slug}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/posts/{{$post->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletePost({{$post->id}})" href="#"><i class="fas fa-trash"></i></a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
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


//Soft Delete Page
function deletePost(id){
  swal({
    title: 'Anda yakin ingin menghapus post ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'posts/delete/'+id,
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
          title: 'Anda yakin ingin mengaktifkan post ini?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({  
              url: "{{url('admin/post/status')}}",
              type: "POST",
              data: {
                _token: $('#signup-token_'+id).val(),
                id: id,
                status: 'aktif',
            },
              success: function(result){
              }
          });
        }else{
          document.getElementById("status_"+id).checked = false;
        }
      });
    } else {
      swal({
          title: 'Anda yakin ingin menonaktifkan post ini?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({
              url: "{{url('admin/posts/status')}}",
              type: "POST",
              data: {
                _token: $('#signup-token_'+id).val(),
                id: id,
                status: 'tidak_aktif',
            },
              success: function(result){
              }
          });
        }else{  
          document.getElementById("status_"+id).checked = true;
        }
      });
    }
  }

</script>
@endsection