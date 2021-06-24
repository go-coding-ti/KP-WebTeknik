@extends('adminlayout.layout')
@section('title', 'List Jabatan')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
        <h1 class="h3 mb-2 text-gray-800">Jabatan Manajemen</h1>
          <p class="mb-4">Daftar Jabatan Manajemen Fakultas Teknik Universitas Udayana</p>
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
              <h6 class="m-0 font-weight-bold text-primary">List Jabatan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" data-toggle="modal" data-target="#addJabatan"><i class="fas fa-plus"></i>  Tambah Jabatan</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Jabatan Ina</th>
                      <th>Jabatan Eng</th>
                      <th  width="150">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $i => $jabatan)
                    <tr>
                      <td>{{$jabatan->jabatan_ina}}</td>
                      <td>{{$jabatan->jabatan_eng}}</td>
                      <td><a style="margin-right:7px" onclick="show({{$jabatan->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$jabatan->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$jabatan->id}})" href="#"><i class="fas fa-trash"></i></a></td>
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
        </div>
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

<!-- Add News Category Modal-->
<div class="modal fade" id="addJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addJabatan">Tambah Jabatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Jabatan Baru</p>
            <form method="post" action="/admin/jabatan/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="jabatan_ina">Jabatan Ina</label>
                  <input type="text" class="form-control" id="jabatan_ina" name="jabatan_ina">
                </div>
                <div class="form-group">
                  <label for="jabatan_eng">Jabatan Eng</label>
                  <input type="text" class="form-control" id="jabatan_eng" name="jabatan_eng">
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

<div class="modal fade" id="showJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showJabatan">Show Jabatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showJabatan')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
        <div class="modal-body">
                <div class="form-group">
                  <label for="show_jabatan_ina">Jabatan Ina</label>
                  <input type="text" class="form-control" id="show_jabatan_ina" readonly>
                </div>
                <div class="form-group">
                  <label for="show_jabatan_eng">Jabatan Eng</label>
                  <input type="text" class="form-control" id="show_jabatan_eng" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showJabatan')">Cancel</button>
                </div>
        </div>

        </div>
    </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit">Edit Jabatan</h5>
            <button class="close" type="button" data-dismiss="editJabatan" aria-label="Close" onclick="closeModal('editJabatan')">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Data Jabatan yang Hendak Diubah.</p>
            <form id="edit-form-jabatan" method="post" action="" enctype="multipart/form-data">
               @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="edit_jabatan_ina">Jabatan Ina</label>
                  <input type="text" class="form-control" id="edit_jabatan_ina" name="edit_jabatan_ina">
                </div>
                <div class="form-group">
                  <label for="edit_jabatan_eng">Kategori Eng</label>
                  <input type="text" class="form-control" id="edit_jabatan_eng" name="edit_jabatan_eng">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editJabatan')">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Delete Jabatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteCategory')">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus jabatan ini?</p>
            <form id="form-delete-category" method="post" action="">
                @method('delete')
                @csrf
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" onclick="closeModal('deleteCategory')" data-dismiss="modal">Cancel</button>
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
                url: "/admin/jabatan/"+id+"/edit",
                method: 'get',
                success: function(result){
                    if(status == 'show'){
                        $("#show_jabatan_ina").val(result.jabatan['jabatan_ina']);
                        $("#show_jabatan_eng").val(result.jabatan['jabatan_eng']);
                        $('#showJabatan').modal('show');
                    }else{
                        $("#edit_jabatan_ina").val(result.jabatan['jabatan_ina']);
                        $("#edit_jabatan_eng").val(result.jabatan['jabatan_eng']);
                        $("#edit-form-jabatan").attr("action", "/admin/jabatan/"+result.jabatan['id']);
                        $('#editJabatan').modal('show');
                    }                   
                    
                }
        });
    }

    function deletebc(id){
        $("#form-delete-category").attr("action", "/admin/jabatan/"+id+"/delete");
        $('#deleteCategory').modal('show');
    }

    function closeModal(jenis){
      $('#'+jenis).modal('hide'); 
    }
</script>
@endsection