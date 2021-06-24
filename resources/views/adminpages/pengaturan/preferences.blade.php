@extends('adminlayout.layout')
@section('title', 'Preferences')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Preferences</h1>
      <p class="mb-4">Pengaturan Website Fakultas Teknik Universitas Udayana</p>

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
          <h6 class="m-0 font-weight-bold text-primary">Preferences</h6>
        </div>
        <div class="card-body">
            <div class="card-body col-12">
                <form id="form-product" method="post" action="{{Route('admin-preference-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="nama_website_ina">Nama Website Bahasa Indonesia</label>
                        <input type="text" class="form-control @error ('nama_website_ina') is-invalid @enderror" id="nama_website_ina" name="nama_website_ina" value="{{$preference->nama_website_ina}}" required>
                        @error('nama_website_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Nama website Bahasa Indonesia wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="nama_website_eng">Nama Website Bahasa Inggris</label>
                        <input type="text" class="form-control @error ('nama_website_eng') is-invalid @enderror" id="nama_website_eng" name="nama_website_eng" value="{{$preference->nama_website_eng}}" required>
                        @error('nama_website_eng')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Nama website Bahasa Inggris wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="logo">Logo Website</label>
                        <br>
                        <img src="{{$preference->logo}}" class="mb-1" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                        <input type="text" class="form-control" name="logo" id="logo" placeholder="url" hidden>
                        <div class="custom-file">
                          <button type="button" class="btn btn-primary btn-icon-split mt-1" data-target="#crop-image" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-images"></i>
                            </span>
                            <span class="text">Pilih Logo</span>
                        </button>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="footer_ina">Footer Bahasa Indonesia</label>
                        <textarea id="footer_ina" class="summernote" name="footer_ina" required>{!! $preference->footer_ina !!}</textarea>
                        @error('footer_ina')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Footer Bahasa Indonesia wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="footer_eng">Footer Bahasa Inggris</label>
                        <textarea id="footer_eng" class="summernote" name="footer_eng" required>{!! $preference->footer_ina !!}</textarea>
                        @error('footer_eng')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                        @else
                            <div class="invalid-feedback">
                                Footer Bahasa Inggris wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                      <button type="reset" class="btn btn-danger btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-sync"></i>
                          </span>
                          <span class="text">Reset</span>
                        </button>
                      <button  type="submit" class="btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                              <i class="fas fa-save"></i>
                          </span>
                          <span class="text">Simpan</span>
                      </button>
                    </div>
                </form>           
              </div>
        </div>
      </div>
</div>


{{-- CROPPER --}}
<div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pilih Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row" style="margin: 20px">
              <img  src="{{$preference->logo}}" id="image-preview"  width="100%" height="100%" alt="">
              <div class="custom-file" style="margin-top: 20px">
                  <input type="file" class="custom-file-input" id="profile-image" name="thumbnail" accept="images/*" required>
                  <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Logo</label>
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
@endsection
@section('custom_javascript')
<script>
  $('.summernote').summernote({
      height: 350, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: false // set focus to editable area after initializing summernote
  });

  //CROPPER
  function changeProfile(){
		$('#profile-image').trigger('click');
	}

	var cropper;
	var image = document.getElementById('image-preview');

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
					cropper = new Cropper(image, {
						aspectRatio: 2.5 / 3,
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
			cropper = new Cropper(image, {
				aspectRatio: 2.5 / 3,
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