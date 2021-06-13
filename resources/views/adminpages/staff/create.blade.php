@extends('adminlayout.layout')
@section('title', 'Tambah Staf Pengajar')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Staf Pengajar</h1>
    <p class="mb-4">Tambah Staf Pengajar Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Staf Pengajar</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-staff-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror"  id="nama" name="nama" placeholder="Masukkan nama" required>
                    @error('nama')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Nama wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">NIP</label>
                    <input type="text" class="form-control @error ('nip') is-invalid @enderror" name="nip" placeholder="Masukkan NIP" required>
                    @error('nip')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            NIP wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Lahir</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" name="tanggal" placeholder="Masukkan tanggal lahir" required>
                    @error('tanggal')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Tanggal lahir wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="prodi">Program Studi</label>
                    <select class="form-control @error ('prodi') is-invalid @enderror" data-live-search="true" id="prodi" rows="3" name="prodi" required>
                    <option value="">Pilih program studi</option>
                        @foreach ($prodi as $prodi)
                            <option value="{{$prodi->id}}">{{$prodi->prodi_ina}}</option>
                        @endforeach
                    </select>
                    @error('prodi')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Program studi wajib dipilih
                        </div>
                    @enderror  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Email</label>
                    <input type="text" class="form-control @error ('email') is-invalid @enderror"  id="email" name="email" placeholder="Masukkan email" required>
                    @error('email')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Email wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Nomor Telepon</label>
                    <input type="text" class="form-control @error ('telepon') is-invalid @enderror" name="telepon" placeholder="Masukkan nomor telepon" required>
                    @error('telepon')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Nomor telepon wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">SINTA</label>
                    <input type="text" class="form-control @error ('sinta') is-invalid @enderror"  id="sinta" name="sinta" placeholder="Masukkan link SINTA">

                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Scopus</label>
                    <input type="text" class="form-control @error ('scopus') is-invalid @enderror" name="scopus" placeholder="Masukkan link Scopus">
                </div>
            </div>
            <div class="form group mt-4">
                <label for="title">Alamat</label>
                <input type="text" class="form-control @error ('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
                @error('alamat')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Alamat wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title">Pendidikan S1</label>
                <input type="text" class="form-control @error ('s1') is-invalid @enderror" id="s1" name="s1" placeholder="Masukkan pendidikan S1" required>
                @error('s1')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Pendidikan S1 wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title">Pendidikan S2</label>
                <input type="text" class="form-control @error ('s2') is-invalid @enderror" id="s2" name="s2" placeholder="Masukkan pendidikan S2" required>
                @error('s2')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Pendidikan S2 wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title">Pendidikan S3</label>
                <input type="text" class="form-control @error ('s3') is-invalid @enderror" id="s3" name="s3" placeholder="Masukkan pendidikan S3">
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Biografi Bahasa Indonesia</label>
                <textarea id="content_ina" class="form-control @error ('biografi_ina') is-invalid @enderror" name="biografi_ina" rows="8" required></textarea>
                @error('biografi_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Biografi Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Biografi Bahasa Inggris</label>
                <textarea id="content_ina" class="form-control @error ('biografi_eng') is-invalid @enderror" name="biografi_eng" rows="8" required></textarea>
                @error('nama')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Biografi Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="thumbnail">Foto Profil</label>
                <br>
                <input type="text" class="form-control" name="foto" id="foto" placeholder="url" hidden required>
                <img src="{{asset('assets/admin/img/profile.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                @error('foto')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Foto profil wajib diisi
                    </div>
                @enderror
                <div class="custom-file">
                    <button type="button" class="btn btn-primary btn-icon-split mt-1" data-target="#crop-image" data-toggle="modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-images"></i>
                        </span>
                        <span class="text">Pilih Foto Profil</span>
                    </button>
                </div>
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-staff-home')}}" class="btn btn-danger btn-icon-split">
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
            <h5 class="modal-title">Pilih Foto Profil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row" style="margin: 20px">
                <img  src="{{asset('')}}assets/admin/img/profile.png" id="image-preview"  width="100%" height="100%" alt="">
                <div class="custom-file" style="margin-top: 20px">
                    <input type="file" class="custom-file-input" id="profile-image" name="thumbnail" accept="images/*" required>
                    <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Foto</label>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function(e){
        var status;
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
						aspectRatio: 1,
						viewMode: 3,
						preview: '.preview'
					});
	            }
	            reader.readAsDataURL(this.files[0]);
	            var postData=new FormData();
	            postData.append('file', this.files[0]);
	        }
		});
		$('#crop-image').on('shown.bs.modal', function(){
			cropper = new Cropper(image, {
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
				width: 720,
				height: 1280,
			});
			canvas.toBlob(function(blob){
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
                
				reader.onloadend = function() {
                    $('#propic').attr('src', reader.result);
					var base64data = reader.result;
                    $('#foto').val(reader.result);
                    
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

    $('#sidebarManajemen').addClass("active");
</script>
@endsection