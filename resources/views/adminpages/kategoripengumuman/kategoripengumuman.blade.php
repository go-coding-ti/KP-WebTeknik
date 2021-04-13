@extends('adminlayout.layout')
@section('title', 'List Kategori Pengumuman')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
        <h1 class="h3 mb-2 text-gray-800">Kategori Pengumuman</h1>
          <p class="mb-4">Daftar Kategori pengumuman Website Fakultas Teknik Universitas Udayana</p>

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
              <h6 class="m-0 font-weight-bold text-primary">List Kategori</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" data-toggle="modal" data-target="#addCategory"><i class="fas fa-plus"></i>  Tambah Kategori</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kategori Ina</th>
                      <th>Kategori Eng</th>
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

<!-- Add News Category Modal-->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addCategory">Tambah Kategori Pengumuman</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Kategori Baru</p>
            <form method="post" action="/admin/category/pengumuman/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="kategori_ina">Kategori Ina</label>
                  <input type="text" class="form-control" id="kategori_ina" name="kategori_ina" value="{{old('title')}}">
                </div>
                <div class="form-group">
                  <label for="kategori_eng">Kategori Eng</label>
                  <input type="text" class="form-control" id="kategori_eng" name="kategori_eng" value="{{old('title')}}">
                </div>
                <div class="form-group mt-4">
                    <label for="icon">Icon Kategori</label>
                    <br>
                    <div class="text-center">
                      <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="icon">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo" name="logo" required>
                        <label for="logo_label" id="logo_label" class="custom-file-label">Pilih Icon</label>
                    </div>
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

<div class="modal fade" id="showCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showCategory">Show Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showCategory')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
        <div class="modal-body">
                <div class="form-group">
                  <label for="show_kategori_ina">Kategori Ina</label>
                  <input type="text" class="form-control" id="show_kategori_ina" readonly>
                </div>
                <div class="form-group">
                  <label for="show_kategori_eng">Kategori Eng</label>
                  <input type="text" class="form-control" id="show_kategori_eng" readonly>
                </div>
                <div class="form-group mt-4">
                  <label for="icon">Icon Kategori</label>
                  <br>
                  <div class="text-center">
                    <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="show_icon">
                  </div>
              </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showCategory')">Cancel</button>
                </div>
        </div>

        </div>
    </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit">Edit Kategori</h5>
            <button class="close" type="button" data-dismiss="editCategory" aria-label="Close" onclick="closeModal('editCategory')">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Data Kategori yang Hendak Diubah.</p>
            <form id="edit-form-category" method="post" action="" enctype="multipart/form-data">
               @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="edit_kategori_ina">Kategori Ina</label>
                  <input type="text" class="form-control" id="edit_kategori_ina" name="edit_kategori_ina">
                </div>
                <div class="form-group">
                  <label for="edit_kategori_eng">Kategori Eng</label>
                  <input type="text" class="form-control" id="edit_kategori_eng" name="edit_kategori_eng">
                </div>
                <div class="form-group mt-4">
                  <label for="icon">Icon Kategori</label>
                  <br>
                  <div class="text-center">
                    <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="edit_icon">
                  </div>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="edit_logo" name="edit_logo">
                      <label for="edit_logo_label" id="edit_logo_label" class="custom-file-label">Pilih Icon</label>
                  </div>
              </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editCategory')">Cancel</button>
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
            <h5 class="modal-title" id="exampleModalLabelhapus">Delete Kategori</h5>
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
                url: "/admin/category/pengumuman/"+id+"/edit",
                method: 'get',
                success: function(result){
                    if(status == 'show'){
                        $("#show_kategori_ina").val(result.kategori['kategori_ina']);
                        $("#show_kategori_eng").val(result.kategori['kategori_eng']);
                        $('#show_icon').attr('src', result.kategori['icon']);
                        $('#showCategory').modal('show');
                    }else{
                        $("#edit_kategori_ina").val(result.kategori['kategori_ina']);
                        $("#edit_kategori_eng").val(result.kategori['kategori_eng']);
                        $('#edit_logo_label').text(result.kategori['icon_name']);
                        $('#edit_icon').attr('src', result.kategori['icon']);
                        $("#edit-form-category").attr("action", "/admin/category/pengumuman/"+result.kategori['id']);
                        $('#editCategory').modal('show');
                    }                   
                    
                }
        });
    }

    function deletebc(id){
        $("#form-delete-category").attr("action", "/admin/category/pengumuman/"+id+"/delete");
        $('#deleteCategory').modal('show');
    }

    function closeModal(jenis){
      $('#'+jenis).modal('hide'); 
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#icon').attr('src', e.target.result);
            $('#edit_icon').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#logo").change(function() {
    readURL(this);
    document.getElementById('logo_label').innerHTML = document.getElementById('logo').files[0].name;
    });

    $("#edit_logo").change(function() {
    readURL(this);
    document.getElementById('edit_logo_label').innerHTML = document.getElementById('edit_logo').files[0].name;
    });
</script>
@endsection