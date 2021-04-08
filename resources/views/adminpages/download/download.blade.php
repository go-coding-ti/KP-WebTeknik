@extends('adminlayout.layout')
@section('title', 'List Dokumen')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Dokumen</h1>
          <p class="mb-4">Daftar Dokumen Fakultas Teknik Universitas Udayana</p>

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
              <h6 class="m-0 font-weight-bold text-primary">List Download</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" href="{{route('admin-download-create')}}"><i class="fas fa-plus"></i>  Tambah Download</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Judul Ina</th>
                      <th>Judul Eng</th>
                      <th>Url Download</th>
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
                  @foreach ($data as $i => $download)
                    <tr>
                      <td>{{$download->title_ina}}</td>
                      <td>{{$download->title_eng}}</td>
                      <td>{{$download->url_download}}
                      <td><a style="margin-right:7px" href="{{$download->url_download}}" target="_blank"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/downloads/{{$download->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletedownload({{$download->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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
        <form method="berita" enctype="multipart/form-data" action="/admin/profile">
        
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
function deletedownload(id){
  swal({
    title: 'Anda yakin ingin menghapus dokumen ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
    jQuery.ajax({  
      url: 'downloads/delete/'+id,
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
</script>
@endsection