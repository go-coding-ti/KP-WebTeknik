@extends('adminlayout.layout')
@section('title', 'List Video')
@section('content')
    <!-- Begin Page Content -->
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
          <!-- DataTales Example -->
          <!-- Copy drisini -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Video</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" href="{{route('admin-video-create')}}"><i class="fas fa-plus"></i>  Tambah Video</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Link</th>
                      <th width="150px">Action</th>
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
                  @foreach ($data as $i => $video)
                    <tr>
                      <td>{{$video->judul}}</td>
                      <td>{{$video->link}}</td>
                      <td><a style="margin-right:7px" href="/admin/videos/show/{{$video->judul_slug}}"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/videos/{{$video->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletevideo({{$video->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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

<!-- Hapus Video Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Delete Video</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure want to delete this video?</p>
            <form id="form-delete-video" method="post" action="">
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
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
</script>
@endsection