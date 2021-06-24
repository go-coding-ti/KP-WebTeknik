@extends('adminlayout.layout')
@section('title', 'Daftar Program Studi')
@section('content')

<div class="container-fluid">
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

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Program Studi</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addProdi">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Kategori</span>
          </button>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th width="50">No.</th>
                <th>Program Studi Indonesia</th>
                <th>Program Studi Inggris</th>
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
</div>

<!-- Add Prodi Modal-->
<div class="modal fade" id="addProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addProdi">Tambah Program Studi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Program Studi</p>
            <form method="post" action="/admin/prodi/store" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                  <label for="prodi_ina">Nama Prodi Bahasa Indonesia</label>
                  <input type="text" class="form-control @error ('prodi_ina') is-invalid @enderror" id="prodi_ina" name="prodi_ina" required>
                  @error('prodi_ina')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Program studi Bahasa Indonesia wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="prodi_eng">Nama Prodi Bahasa Inggris</label>
                  <input type="text" class="form-control @error ('prodi_eng') is-invalid @enderror" id="prodi_eng" name="prodi_eng" required>
                  @error('prodi_eng')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Program studi Bahasa Inggris wajib diisi
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

<div class="modal fade" id="showProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showCategory">Show Program Studi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showProdi')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body" id="loadingShow">
        <div class="d-flex justify-content-center">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
        <div class="modal-body" id="bodyShow">
                <div class="form-group">
                  <label for="show_prodi_ina">Nama Prodi Bahasa Indonesia</label>
                  <input type="text" class="form-control" id="show_prodi_ina" readonly>
                </div>
                <div class="form-group">
                  <label for="show_prodi_eng">Nama Prodi Bahasa Inggris</label>
                  <input type="text" class="form-control" id="show_prodi_eng" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showProdi')">Tutup</button>
                </div>
        </div>
        </div>
    </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit">Edit Program Studi</h5>
            <button class="close" type="button" data-dismiss="editCategory" aria-label="Close" onclick="closeModal('editProdi')">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body" id="loadingEdit">
          <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
        </div>
        <div class="modal-body" id="bodyEdit">
            <p>Masukkan Data Program Studi yang Hendak Diubah.</p>
            <form id="edit-form-prodi" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
               @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="edit_prodi_ina">Nama Prodi Bahasa Indonesia</label>
                  <input type="text" class="form-control @error ('edit_prodi_ina') is-invalid @enderror" id="edit_prodi_ina" name="edit_prodi_ina" required>
                  @error('edit_prodi_ina')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Program studi Bahasa Indonesia wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="edit_prodi_eng">Nama Prodi Bahasa Inggris</label>
                  <input type="text" class="form-control @error ('edit_prodi_eng') is-invalid @enderror" id="edit_prodi_eng" name="edit_prodi_eng" required>
                  @error('edit_prodi_eng')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Program studi Bahasa Inggris wajib diisi
                      </div>
                  @enderror
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editProdi')">Batal</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteProdi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Program Studi</h5>
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
                    <button class="btn btn-secondary" type="button" onclick="closeModal('deleteProdi')" data-dismiss="modal">Batal</button>
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
        $("#bodyEdit").hide();
        $("#bodyShow").hide();
        $("#loadingShow").show();
        $("#loadingEdit").show();
        if(status=='show'){
          $('#showProdi').modal('show');
        }else if(status=='edit'){
          $('#editProdi').modal('show');
        }
        jQuery.ajax({
                url: "/admin/prodi/"+id+"/edit",
                method: 'get',
                success: function(result){
                    if(status == 'show'){
                        $("#show_prodi_ina").val(result.prodi['prodi_ina']);
                        $("#show_prodi_eng").val(result.prodi['prodi_eng']);
                        $("#loadingShow").hide();
                        $("#bodyShow").show();
                    }else{
                        $("#edit_prodi_ina").val(result.prodi['prodi_ina']);
                        $("#edit_prodi_eng").val(result.prodi['prodi_eng']);
                        $("#edit-form-prodi").attr("action", "/admin/prodi/"+result.prodi['id']);
                        $("#loadingEdit").hide();
                        $("#bodyEdit").show();
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

    $('#sidebarPengaturan').addClass("active");
</script>
@endsection