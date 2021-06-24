@extends('adminlayout.layout')
@section('title', 'Daftar Kategori')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
  <h1 class="h3 mb-2 text-gray-800">Kategori Berita</h1>
    <p class="mb-4">Daftar Kategori Berita Fakultas Teknik Universitas Udayana</p>
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
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addCategory">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Kategori</span>
        </button>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kategori Bahasa Indonesia</th>
                <th>Kategori Bahasa Inggris</th>
                <th  width="150">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $i => $kategori)
              <tr>
                <td>{{$kategori->kategori_ina}}</td>
                <td>{{$kategori->kategori_eng}}</td>
                <td><a style="margin-right:7px" onclick="show({{$kategori->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$kategori->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$kategori->id}})" href="#"><i class="fas fa-trash"></i></a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Add News Category Modal-->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="addCategory">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <p>Masukkan Kategori Baru</p>
          <form method="post" action="/admin/category/store" enctype="multipart/form-data" class="needs-validation" novalidate>
              @csrf
              <div class="form-group">
                <label for="kategori_ina">Kategori Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('kategori_ina') is-invalid @enderror" id="kategori_ina" name="kategori_ina" required>
                @error('kategori_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Kategori Bahasa Indonesia wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="kategori_eng">Kategori Bahasa Inggris</label>
                <input type="text" class="form-control @error ('kategori_eng') is-invalid @enderror" id="kategori_eng" name="kategori_eng" required>
                @error('kategori_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Kategori Bahasa Inggris wajib diisi
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

<div class="modal fade" id="showCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showCategory">Show Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showCategory')">
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
              <label for="show_kategori_ina">Kategori Bahasa Indonesia</label>
              <input type="text" class="form-control" id="show_kategori_ina" readonly>
            </div>
            <div class="form-group">
              <label for="show_kategori_eng">Kategori Bahasa Inggris</label>
              <input type="text" class="form-control" id="show_kategori_eng" readonly>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showCategory')">Tutup</button>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabeledit">Edit Kategori</h5>
          <button class="close" type="button" data-dismiss="editCategory" aria-label="Close" onclick="closeModal('editCategory')">
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
          <p>Masukkan Data Kategori yang Hendak Diubah.</p>
          <form id="edit-form-category" method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="edit_kategori_ina">Kategori Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('edit_kategori_ina') is-invalid @enderror" id="edit_kategori_ina" name="edit_kategori_ina" required>
                @error('edit_kategori_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Kategori Bahasa Indonesia wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="edit_kategori_eng">Kategori Bahasa Inggris</label>
                <input type="text" class="form-control @error ('edit_kategori_eng') is-invalid @enderror" id="edit_kategori_eng" name="edit_kategori_eng" required>
                @error('edit_kategori_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Kategori Bahasa Inggris wajib diisi
                    </div>
                @enderror
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editCategory')">Batal</button>
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
          <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteCategory')">
          <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus kategori ini?</p>
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
    $("#bodyEdit").hide();
    $("#bodyShow").hide();
    $("#loadingShow").show();
    $("#loadingEdit").show();
    if(status=='show'){
      $('#showCategory').modal('show');
    }else if(status=='edit'){
      $('#editCategory').modal('show');
    }
    jQuery.ajax({
      url: "/admin/category/"+id+"/edit",
      method: 'get',
      success: function(result){
        if(status == 'show'){
            $("#show_kategori_ina").val(result.kategori['kategori_ina']);
            $("#show_kategori_eng").val(result.kategori['kategori_eng']);
            $("#loadingShow").hide();
            $("#bodyShow").show();
        }else{
            $("#edit_kategori_ina").val(result.kategori['kategori_ina']);
            $("#edit_kategori_eng").val(result.kategori['kategori_eng']);
            $("#edit-form-category").attr("action", "/admin/category/"+result.kategori['id']);
            $("#loadingEdit").hide();
            $("#bodyEdit").show();
        }                       
      }
    });
  }

  function deletebc(id){
    $("#form-delete-category").attr("action", "/admin/category/"+id+"/delete");
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

  $('#sidebarBerita').addClass("active");
</script>
@endsection