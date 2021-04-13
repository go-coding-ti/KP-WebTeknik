@extends('adminlayout.layout')
@section('title', 'List Program Studi')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
        <h1 class="h3 mb-2 text-gray-800">Program Studi</h1>
          <p class="mb-4">Daftar Program Studi Fakultas Teknik Universitas Udayana</p>

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
              <h6 class="m-0 font-weight-bold text-primary">List Program Studi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" data-toggle="modal" data-target="#addProdi"><i class="fas fa-plus"></i>  Tambah Program Studi</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th width="50">No.</th>
                      <th>Program Studi Ina</th>
                      <th>Program Studi Eng</th>
                      <th  width="150">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $i => $prodi)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$prodi->prodi_ina}}</td>
                      <td>{{$prodi->prodi_eng}}</td>
                      <td><a style="margin-right:7px" onclick="show({{$prodi->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$prodi->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$prodi->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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
              </div>
          </div>

          </div>

          <div class="col-lg-6 mb-4">

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

<!-- Add News Category Modal-->
<div class="modal fade" id="addProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addProdi">Tambah Program Studi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Program Studi</p>
            <form method="post" action="/admin/prodi/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="prodi_ina">Nama Prodi Ina</label>
                  <input type="text" class="form-control" id="prodi_ina" name="prodi_ina" >
                </div>
                <div class="form-group">
                  <label for="prodi_eng">Nama Prodi Eng</label>
                  <input type="text" class="form-control" id="prodi_eng" name="prodi_eng" >
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

<div class="modal fade" id="showProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showCategory">Show Program Studi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showProdi')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
        <div class="modal-body">
                <div class="form-group">
                  <label for="show_prodi_ina">Nama Prodi Ina</label>
                  <input type="text" class="form-control" id="show_prodi_ina" readonly>
                </div>
                <div class="form-group">
                  <label for="show_prodi_eng">Nama Prodi Eng</label>
                  <input type="text" class="form-control" id="show_prodi_eng" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showProdi')">Cancel</button>
                </div>
        </div>

        </div>
    </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit">Edit Program Studi</h5>
            <button class="close" type="button" data-dismiss="editCategory" aria-label="Close" onclick="closeModal('editProdi')">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Data Program Studi yang Hendak Diubah.</p>
            <form id="edit-form-prodi" method="post" action="" enctype="multipart/form-data">
               @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="edit_prodi_ina">Nama Prodi Ina</label>
                  <input type="text" class="form-control" id="edit_prodi_ina" name="edit_prodi_ina">
                </div>
                <div class="form-group">
                  <label for="edit_prodi_eng">Nama Prodi Eng</label>
                  <input type="text" class="form-control" id="edit_prodi_eng" name="edit_prodi_eng">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editProdi')">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Delete Program Studi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteProdi')">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus program studi ini?</p>
            <form id="form-delete-prodi" method="post" action="">
                @method('delete')
                @csrf
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" onclick="closeModal('deleteProdi')" data-dismiss="modal">Cancel</button>
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

function show(id,status){
        jQuery.ajax({
                url: "/admin/prodi/"+id+"/edit",
                method: 'get',
                success: function(result){
                    if(status == 'show'){
                        $("#show_prodi_ina").val(result.prodi['prodi_ina']);
                        $("#show_prodi_eng").val(result.prodi['prodi_eng']);
                        $('#showProdi').modal('show');
                    }else{
                        $("#edit_prodi_ina").val(result.prodi['prodi_ina']);
                        $("#edit_prodi_eng").val(result.prodi['prodi_eng']);
                        $("#edit-form-prodi").attr("action", "/admin/prodi/"+result.prodi['id']);
                        $('#editProdi').modal('show');
                    }                   
                    
                }
        });
    }

    function deletebc(id){
        $("#form-delete-prodi").attr("action", "/admin/prodi/"+id+"/delete");
        $('#deleteProdi').modal('show');
    }

    function closeModal(jenis){
      $('#'+jenis).modal('hide'); 
    }
</script>
@endsection