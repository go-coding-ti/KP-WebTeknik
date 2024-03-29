@extends('adminlayout.layout')
@section('title', 'Sosial Media')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Sosial Media</h1>
    <p class="mb-4">Daftar Sosial Media Fakultas Teknik Universitas Udayana</p>

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
          <h6 class="m-0 font-weight-bold text-primary">Sosial Media</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addSocial">
              <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Sosial Media</span>
            </button>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Sosial Media</th>
                    <th>Link Sosial Media</th>
                    <th  width="150">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $i => $sosmed)
                  <tr>
                    <td>{{$sosmed->nama_sosmed}}</td>
                    <td>{{$sosmed->link}}</td>
                    <td><a style="margin-right:7px" onclick="show({{$sosmed->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$sosmed->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletePost({{$sosmed->id}})" href="#"><i class="fas fa-trash"></i></a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Social Media Modal-->
<div class="modal fade" id="addSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="addSocial">Tambah Social Media</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <p>Masukkan data sosial media baru</p>
          <form method="post" action="/admin/setting/social/store" enctype="multipart/form-data" class="needs-validation" novalidate>
              @csrf
              <div class="form-group">
                <label for="sosmed">Nama Sosial Media</label>
                <input type="text" class="form-control @error ('sosmed') is-invalid @enderror" id="sosmed" name="sosmed" required>
                @error('sosmed')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Nama sosial media wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="link_sosmed">Link Sosial Media</label>
                <input type="text" class="form-control @error ('link_sosmed') is-invalid @enderror" id="link_sosmed" name="link_sosmed" required>
                @error('link_sosmed')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Link sosial media wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group mt-4">
                <label for="logo">Logo Sosial Media</label>
                <br>
                <input type="text" class="form-control" name="logo" id="logo" placeholder="url" hidden required>
                <img src="{{asset('assets/admin/img/pictures_placeholder1.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:25%;width:25%;" id="propic">
                @error('logo')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Icon wajib dipilih
                    </div>
                @enderror
                <div class="custom-file">
                  <button type="button" class="btn btn-primary btn-icon-split mt-1" data-target="#crop-image" data-toggle="modal">
                    <span class="icon text-white-50">
                        <i class="fas fa-images"></i>
                    </span>
                    <span class="text">Pilih Icon</span>
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

<!-- Edit Social Media Modal-->
<div class="modal fade" id="editSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="editSocial">Edit Sosial Media</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="closeModal('editSocial')" aria-label="Close">
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
          <p>Masukkan data sosial media</p>
          <form method="post" id="edit_social_form" action="/admin/setting/social/store" enctype="multipart/form-data"  class="needs-validation" novalidate>
              @csrf
              <div class="form-group">
                <label for="edit_sosmed">Nama Sosial Media</label>
                <input type="text" class="form-control @error ('edit_sosmed') is-invalid @enderror" id="edit_sosmed" name="edit_sosmed" required>
                @error('edit_sosmed')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Nama sosial media wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="edit_link_sosmed">Link Sosial Media</label>
                <input type="text" class="form-control @error ('edit_link_sosmed') is-invalid @enderror" id="edit_link_sosmed" name="edit_link_sosmed" required>
                @error('edit_link_sosmed')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Link sosial media wajib diisi
                    </div>
                @enderror
              </div>
              <div class="form-group mt-4">
                <label for="logo">Logo Sosial Media</label>
                <br>
                <input type="text" class="form-control" name="edit_logo" id="edit_logo" placeholder="url" hidden>
                <img src="{{asset('assets/admin/img/pictures_placeholder1.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:25%;width:25%;" id="edit_propic">
                <div class="custom-file">
                  <button type="button" class="btn btn-primary btn-icon-split mt-1" data-target="#edit_crop-image" data-toggle="modal">
                    <span class="icon text-white-50">
                        <i class="fas fa-images"></i>
                    </span>
                    <span class="text">Pilih Icon</span>
                  </button>
                </div>
            </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editSocial')">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>              
      </div>

      </div>
  </div>
</div>

<!-- Show Social Media Modal-->
<div class="modal fade" id="showSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showSocial">Detail Sosial Media</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showSocial')">
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
          <form method="post" action="" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="show_sosmed">Nama Sosial Media</label>
                <input type="text" class="form-control" id="show_sosmed" name="sosmed">
              </div>
              <div class="form-group">
                <label for="show_link_sosmed">Link Sosial Media</label>
                <input type="text" class="form-control" id="show_link_sosmed" name="show_link_sosmed">
              </div>
              <div class="form-group mt-4">
                <label for="logo">Logo Sosial Media</label>
                <br>
                <div class="text-center">
                  <img src="" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="show_propic">
                </div>
            </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showSocial')">Tutup</button>
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
        $("#bodyEdit").hide();
        $("#bodyShow").hide();
        $("#loadingShow").show();
        $("#loadingEdit").show();
        if(status=='show'){
          $('#showSocial').modal('show');
        }else if(status=='edit'){
          $('#editSocial').modal('show');
        }
        jQuery.ajax({
            url: "/admin/setting/social/"+id+"/edit",
            method: 'get',
            success: function(result){
                if(status == 'show'){
                    $("#show_sosmed").val(result.social['nama_sosmed']);
                    $("#show_link_sosmed").val(result.social['link']);
                    $('#show_propic').attr('src', result.social['logo']);;
                    $('#showSocial').modal('show');
                    $("#loadingShow").hide();
                    $("#bodyShow").show();
                }else{
                    $("#edit_sosmed").val(result.social['nama_sosmed']);
                    $("#edit_link_sosmed").val(result.social['link']);
                    $('#edit_logo_label').text(result.social['logo_name']);
                    $('#edit_propic').attr('src', result.social['logo']);
                    $('#edit_image-preview').attr('src', result.social['logo']);
                    $("#edit_social_form").attr("action", "/admin/setting/social/"+result.social['id']);
                    $('#editSocial').modal('show');
                    $("#loadingEdit").hide();
                    $("#bodyEdit").show();
                }                   
                
            }
        });
    }

    //Soft Delete Page
    function deletePost(id){
      swal({
        title: 'Anda yakin ingin menghapus sosial media ini?',
        icon: 'warning',
        buttons: ["Tidak", "Ya"],
      }).then(function(value) {
        if (value) {
        jQuery.ajax({  
          url: 'social/delete/'+id,
          type: "GET",
            success: function(result){
              location.reload();
            }
          });
        }
      });
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

    //CROPPER EDIT
    function changeProfile(){
      $('#edit_profile-image').trigger('click');
    }

    var cropper;
    var image = document.getElementById('edit_image-preview');

    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Accept-Encoding' : 'gzip',
            }
        });
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

    $('#sidebarPengaturan').addClass("active");
</script>   
@endsection