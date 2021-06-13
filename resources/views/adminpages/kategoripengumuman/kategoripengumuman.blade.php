@extends('adminlayout.layout')
@section('title', 'Daftar Kategori Pengumuman')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- <hr style="margin-top: 20px" class="sidebar-divider my-0"> -->
<h1 class="h3 mb-2 text-gray-800">Kategori Pengumuman</h1>
  <p class="mb-4">Daftar Kategori Pengumuman Website Fakultas Teknik Universitas Udayana</p>

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
      <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button data-toggle="modal" data-target="#addCategory" class="btn btn-primary btn-icon-split">
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

<!-- Add News Category Modal-->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategory">Tambah Kategori Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Masukkan Kategori Baru</p>
        <form method="post" action="/admin/category/pengumuman/store" enctype="multipart/form-data" class="needs-validation" novalidate>
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
          <div class="form-group mt-4">
              <label for="icon">Icon Kategori</label>
              <br>
              <input type="text" class="form-control" name="logo" id="logo" placeholder="url" hidden required>
              <img src="{{asset('assets/admin/img/pictures_placeholder1.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:25%;width:25%;" id="propic">
              @error('logo')
              <div class="invalid-feedback text-start">
                  {{ $message }}
              </div>
              @else
                  <div class="invalid-feedback">
                      Icon kategori wajib diisi
                  </div>
              @enderror
              <div class="custom-file">
                <button data-toggle="modal" data-target="#crop-image" class="btn btn-primary btn-icon-split">
                  <span class="icon text-white-50">
                      <i class="fas fa-images"></i>
                  </span>
                  <span class="text">Pilih icon</span>
                </button>
              </div>
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
      <div class="modal-body">
        <div class="form-group">
          <label for="show_kategori_ina">Kategori Bahasa Indonesia</label>
          <input type="text" class="form-control" id="show_kategori_ina" readonly>
        </div>
        <div class="form-group">
          <label for="show_kategori_eng">Kategori Bahasa Inggris</label>
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
    <div class="modal-body">
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
            <label for="edit_kategori_eng">Kategori Eng</label>
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
          <div class="form-group mt-4">
            <label for="icon">Icon Kategori</label>
            <br>
            <input type="text" class="form-control" name="edit_logo" id="edit_logo" placeholder="url" hidden>
            <img src="{{asset('assets/admin/img/pictures_placeholder1.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:25%;width:25%;" id="edit_propic">
            <div class="custom-file">
                <button type="button" class="btn btn-primary mt-1" data-target="#edit_crop-image" data-toggle="modal"><i class="fa fa-images"></i> Ganti Icon</button>
            </div>
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
              <button class="btn btn-secondary" type="button" onclick="closeModal('deleteCategory')" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </form>              
      </div>
    </div>
  </div>
</div>

{{-- CROPPER ADD --}}
<div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pilih Icon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin: 20px">
          <img  src="{{asset('')}}assets/admin/img/pictures_placeholder1.png" id="image-preview"  width="100%" height="100%" alt="">
          <div class="custom-file" style="margin-top: 20px">
              <input type="file" class="custom-file-input" id="profile-image" name="galeri" accept="images/*" required>
              <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Icon</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="modal-close" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        <button type="button" id="update-foto-profile" class="btn btn-primary" data-dismiss="modal">Pilih</button>
      </div>
    </div>
  </div>
</div>

{{-- CROPPER EDIT --}}
<div class="modal fade" id="edit_crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ganti Icon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="margin: 20px">
          <img  src="{{asset('')}}assets/admin/img/pictures_placeholder.png" id="edit_image-preview"  width="100%" height="100%" alt="">
          <div class="custom-file" style="margin-top: 20px">
              <input type="file" class="custom-file-input" id="edit_profile-image" name="galeri" accept="images/*" required>
              <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Icon</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="modal-close" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        <button type="button" id="edit_update-foto-profile" class="btn btn-primary" data-dismiss="modal">Pilih</button>
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
              $('#edit_propic').attr('src', result.kategori['icon']);
              $('#edit_image-preview').attr('src', result.kategori['icon']);
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

    //CROPPER
    function changeProfile(){
      $('#profile-image').trigger('click');
    }

	var cropper;
	var imageadd = document.getElementById('image-preview');

	$(document).ready(function(){
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	            'Accept-Encoding' : 'gzip',
	        }
	    });
		$('#link-back').attr('href', '{{url("/siswa/dashboard")}}');
		$('#link-back-mini').attr('href', '{{url("/siswa/dashboard")}}');
		$('#profile-image').on('change', function(){
			var filedata = this.files[0];
			var imgtype = filedata.type;
			var match = ['image/jpg', 'image/jpeg', 'image/png'];
			if (!(filedata.type==match[0]||filedata.type==match[1]||filedata.type==match[2])) {
	            alert("Format gambar Salah");
	        }else{
	        	var reader=new FileReader();
	            reader.onload=function(ev){
	                $('#image-preview').attr('src', ev.target.result);
					cropper.destroy();
   					cropper = null;
					cropper = new Cropper(imageadd, {
						aspectRatio: 1,
						viewMode: 3,
						preview: '.preview'
					});
	            }
	            reader.readAsDataURL(this.files[0]);
	            var postData=new FormData();
	            var id = $('input[name=id_siswa]').val();
	            postData.append('file', this.files[0]);
	        }
		});
		$('#crop-image').on('shown.bs.modal', function(){
			cropper = new Cropper(imageadd, {
				aspectRatio: 1,
				viewMode: 3,
				preview: '.preview'
			});
		}).on('hidden.bs.modal', function(){
			cropper.destroy();
   			cropper = null;
		});

		$('#update-foto-profile').on('click', function(){
			canvas = cropper.getCroppedCanvas({
				width: 1080,
				height: 1920,
			});
			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
                
				reader.onloadend = function() {
                    $('#propic').attr('src', reader.result);
					var base64data = reader.result;
                    $('#logo').val(reader.result);
                    
				}
			});
		});
	});

	var cropper;
	var image = document.getElementById('edit_image-preview');

	$(document).ready(function(){
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	            'Accept-Encoding' : 'gzip',
	        }
	    });
		$('#link-back').attr('href', '{{url("/siswa/dashboard")}}');
		$('#link-back-mini').attr('href', '{{url("/siswa/dashboard")}}');
		$('#edit_profile-image').on('change', function(){
			var filedata = this.files[0];
			var imgtype = filedata.type;
			var match = ['image/jpg', 'image/jpeg', 'image/png'];
			if (!(filedata.type==match[0]||filedata.type==match[1]||filedata.type==match[2])) {
	            alert("Format gambar Salah");
	        }else{
	        	var reader=new FileReader();
	            reader.onload=function(ev){
	                $('#edit_image-preview').attr('src', ev.target.result);
					cropper.destroy();
   					cropper = null;
					cropper = new Cropper(image, {
						aspectRatio: 1,
						viewMode: 3,
						preview: '.preview'
					});
	            }
	            reader.readAsDataURL(this.files[0]);
	            var postData=new FormData();
	            var id = $('input[name=id_siswa]').val();
	            postData.append('file', this.files[0]);
	        }
		});
		$('#edit_crop-image').on('shown.bs.modal', function(){
			cropper = new Cropper(image, {
				aspectRatio: 1,
				viewMode: 3,
				preview: '.preview'
			});
		}).on('hidden.bs.modal', function(){
			cropper.destroy();
   			cropper = null;
		});

		$('#edit_update-foto-profile').on('click', function(){
			canvas = cropper.getCroppedCanvas({
				width: 1080,
				height: 1920,
			});
			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
                
				reader.onloadend = function() {
                    $('#edit_propic').attr('src', reader.result);
					var base64data = reader.result;
                    $('#edit_logo').val(reader.result);
                    
				}
			});
		});
	});

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

    $('#sidebarPengumuman').addClass("active");
</script>
@endsection