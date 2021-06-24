@extends('adminlayout.layout')
@section('title', 'Tambah Galeri')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Galeri</h1>
    <p class="mb-4">Tambah Galeri Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Galeri</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-galeri-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form group mt-1">
                <label for="title_ina">Judul Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('title_ina') is-invalid @enderror" id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" required>
                @error('title_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Judul Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title_eng">Judul Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" required>
                @error('title_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Judul Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group form-group mt-4">
                <label for="description_ina">Deskripsi Bahasa Indonesia</label>
                <textarea id="deskripsi_ina" class="form-control @error ('deskripsi_ina') is-invalid @enderror" name="deskripsi_ina" placeholder="Deskripsi Galeri Bahasa Indonesia" rows="10" required></textarea>
                @error('deskripsi_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Deskripsi Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group form-group mt-4">
                <label for="description_eng">Deskripsi Bahasa Inggris</label>
                <textarea id="deskripsi_eng" class="form-control @error ('deskripsi_eng') is-invalid @enderror" name="deskripsi_eng" placeholder="Deskripsi Galeri Bahasa Inggris" rows="10" required></textarea>
                @error('deskripsi_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Deskripsi Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="galeri">Galeri</label>
                <br>
                <input type="text" class="form-control" name="galeri" id="galeri" placeholder="url" hidden required>
                <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                @error('galeri')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Galeri wajib dipilih
                    </div>
                @enderror
                <div class="custom-file">
                    <button type="button" class="btn btn-primary btn-icon-split mt-1" data-target="#crop-image" data-toggle="modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-images"></i>
                        </span>
                        <span class="text">Pilih Galeri</span>
                    </button>
                </div>
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-galeri-home')}}" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Batal</span>
                </a>
                <button  type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>
            </div>
        </form>
            </form>
        </div>
    </div>
</div>

{{-- CROPPER --}}
<div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pilih Galeri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row" style="margin: 20px">
                <img  src="{{asset('')}}assets/admin/img/pictures_placeholder.png" id="image-preview"  width="100%" height="100%" alt="">
                <div class="custom-file" style="margin-top: 20px">
                    <input type="file" class="custom-file-input" id="profile-image" name="galeri" accept="images/*" required>
                    <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Galeri</label>
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#galeripic').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

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
						aspectRatio: 16 / 9,
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
				aspectRatio: 16 / 9,
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
                    $('#galeri').val(reader.result);
                    
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

    $('#sidebarGaleri').addClass("active");
</script>
@endsection