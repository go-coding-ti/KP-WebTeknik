@extends('adminlayout.layout')
@section('title', 'Daftar Jabatan')
@section('content')

<div class="container-fluid">
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

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Jabatan</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addJabatan">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Jabatan</span>
          </button>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Jabatan Bahasa Indonesia</th>
                <th>Jabatan Bahasa Inggris</th>
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
</div>

<!-- Add Jabatan Category Modal-->
<div class="modal fade" id="addJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addJabatan">Tambah Jabatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Jabatan Baru</p>
            <form method="post" action="/admin/jabatan/store" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                  <label for="jabatan_ina">Jabatan Bahasa Indonesia</label>
                  <input type="text" class="form-control @error ('jabatan_ina') is-invalid @enderror" id="jabatan_ina" name="jabatan_ina" required>
                  @error('jabatan_ina')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Jabatan Bahasa Indonesia wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="jabatan_eng">Jabatan Bahasa Inggris</label>
                  <input type="text" class="form-control @error ('jabatan_eng') is-invalid @enderror" id="jabatan_eng" name="jabatan_eng" required>
                  @error('jabatan_eng')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Jabatan Bahasa Inggris wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

<div class="modal fade" id="showJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showJabatan">Show Jabatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showJabatan')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
        <div class="modal-body">
                <div class="form-group">
                  <label for="show_jabatan_ina">Jabatan Bahasa Indonesia</label>
                  <input type="text" class="form-control" id="show_jabatan_ina" readonly>
                </div>
                <div class="form-group">
                  <label for="show_jabatan_eng">Jabatan Bahasa Inggris</label>
                  <input type="text" class="form-control" id="show_jabatan_eng" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showJabatan')">Tutup</button>
                </div>
        </div>

        </div>
    </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit">Edit Jabatan</h5>
            <button class="close" type="button" data-dismiss="editJabatan" aria-label="Close" onclick="closeModal('editJabatan')">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Data Jabatan yang Hendak Diubah.</p>
            <form id="edit-form-jabatan" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
               @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="edit_jabatan_ina">Jabatan Bahasa Indonesia</label>
                  <input type="text" class="form-control @error ('edit_jabatan_ina') is-invalid @enderror" id="edit_jabatan_ina" name="edit_jabatan_ina" required>
                  @error('edit_jabatan_ina')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Jabatan Bahasa Indonesia wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="edit_jabatan_eng">Jabatan Bahasa Inggris</label>
                  <input type="text" class="form-control @error ('edit_jabatan_eng') is-invalid @enderror" id="edit_jabatan_eng" name="edit_jabatan_eng" required>
                  @error('edit_jabatan_eng')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Jabatan Bahasa Inggris wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editJabatan')">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Jabatan</h5>
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
                    <button class="btn btn-secondary" type="button" onclick="closeModal('deleteCategory')" data-dismiss="modal">Batal</button>
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

    // Validasi Form
  (function () {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
  })()

  $('#sidebarManajemen').addClass("active");
</script>
@endsection