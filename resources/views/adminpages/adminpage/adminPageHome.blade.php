@extends('adminlayout.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <hr style="margin-top: 20px" class="sidebar-divider my-0">

        <h1 class="h3 mb-2 text-gray-800">Pages</h1>
          <p class="mb-4">Daftar Halaman Website Fakultas Teknik Universitas Udayana</p>

          <!-- DataTales Example -->
          <!-- Copy drisini -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Page</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" href="{{route('admin-page-create')}}"><i class="fas fa-plus"></i>  Tambah Page</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Judul Ina</th>
                      <th>Judul Eng</th>
                      <th>Status</th>
                      <th>Action</th>
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
                  @foreach ($data as $i => $page)
                    <tr>
                      <td>{{$page->title_ina}}</td>
                      <td>{{$page->title_eng}}</td>
                      <td>
                        <label class="switch">
                         <input id="signup-token_{{$page->id}}" name="_token" type="hidden" value="{{csrf_token()}}">
                        @if($page->status == "aktif")
                          <input type="checkbox" id="status_{{$page->id}}" onclick="statusBtn({{$page->id}});" checked>
                        @else
                          <input type="checkbox" id="status_{{$page->id}}" onclick="statusBtn({{$page->id}})">
                        @endif
                          <span class="slider round"></span>
                        </label>
                      
                      </td>
                      <td><a style="margin-right:7px" href="/admin/berita"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="/admin/berita/{{$page->id}}/edit" ><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" href="/admin/berita/{{$page->id}}/delete" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fas fa-trash"></i></a></td>
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
$(document).ready(function(e){
});
function statusBtn(id) {
    var checkBox = document.getElementById("status_"+id);
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      swal({
          title: 'Anda yakin ingin mengaktifkan pages ini?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({  
              url: "{{url('admin/pages/status')}}",
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
          title: 'Anda yakin ingin menonaktifkan pages ini?',
          icon: 'warning',
          buttons: ["Tidak", "Ya"],
      }).then(function(value) {
          if (value) {
            jQuery.ajax({
              url: "{{url('admin/pages/status')}}",
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