@extends('adminlayout.layout')
@section('title', 'Edit Agenda')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Agenda</h1>
    <p class="mb-4">Edit Agenda Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Edit Agenda</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-agenda-update', $agenda->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form group mt-1">
                <label for="title">Judul Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" value="{{$agenda->title_ina}}" required>
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
                <label for="title">Judul Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$agenda->title_eng}}" required>
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
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="kategori">Kategori Agenda</label>
                    <select class="form-control @error ('kategori') is-invalid @enderror" data-live-search="true" id="kategori" rows="3" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $kategori)
                            <option value="{{$kategori->id}}" @if($agenda->id_kategori==$kategori->id) selected @endif>{{$kategori->kategori_ina}}</option>
                        @endforeach
                    </select>  
                    @error('kategori')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Kategori agenda wajib dipilih
                        </div>
                    @enderror  
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Berlangsung</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal Berlangsung" value="{{$agenda->tanggal}}" required>
                    @error('tanggal')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Tanggal berlangsung wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Waktu Mulai</label>
                    <input type="time" class="form-control @error ('waktu_mulai') is-invalid @enderror" name="waktu_mulai" placeholder="Waktu Mulai" value="{{$agenda->waktu_mulai}}" required>
                    @error('waktu_mulai')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Waktu mulai wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Waktu Berakhir</label>
                    <input type="time" class="form-control @error ('waktu_akhir') is-invalid @enderror" name="waktu_akhir" placeholder="Waktu Akhir" value="{{$agenda->waktu_akhir}}" required>
                    @error('waktu_akhir')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Waktu berakhir wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form group mt-4">
                <label for="title">Lokasi</label>
                <input type="text" class="form-control @error ('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Lokasi Agenda" value="{{$agenda->lokasi}}" required>
                @error('lokasi')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Lokasi wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="title">Alamat Website</label>
                <input type="text" class="form-control" id="website" name="website" placeholder="Website Agenda" value="{{$agenda->website}}">
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Bahasa Indonesia</label>
                <textarea id="content_ina" class="summernote" name="content_ina" required>{{$agenda->content_ina}}</textarea>
                @error('content_ina')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Konten Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Bahasa Inggris</label>
                <textarea id="content_eng" class="summernote" name="content_eng" required>{{$agenda->content_eng}}</textarea>
                @error('content_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Konten Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group mt-4">
                <label for="thumbnail">Thumbnail</label>
                <br>
                @if($agenda->thumbnail != "")
                    <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="url" hidden>
                    <img src="{{$agenda->thumbnail}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                    <div class="custom-file">
                        <button type="button" class="btn btn-primary btn-icon-split mt-1" data-target="#crop-image" data-toggle="modal">
                            <span class="icon text-white-50">
                                <i class="fas fa-images"></i>
                            </span>
                            <span class="text">Ganti Thumbnail</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="form-group mt-4">
                <label for="lampiran">File Lampiran</label>
                <br>    
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="lampiran" name="lampiran">
                    <label for="lampiran_label" id="lampiran_label" class="custom-file-label">
                        @if($agenda->lampiran != NULL)
                            {{$agenda->lampiran_name}}
                        @else
                            Pilih Lampiran
                        @endif
                    </label>
                </div>
                {{-- <input type="file" class="form-control-file" id="lampiran" name="lampiran"> --}}
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-agenda-home')}}" class="btn btn-danger btn-icon-split">
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
            <h5 class="modal-title">Pilih Thumbnail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row" style="margin: 20px">
                <img  src="{{$agenda->thumbnail}}" id="image-preview"  width="100%" height="100%" alt="">
                <div class="custom-file" style="margin-top: 20px">
                    <input type="file" class="custom-file-input" id="profile-image" name="thumbnail" accept="images/*" required>
                    <label for="thumbnail_label" id="thumbnail_labell" class="custom-file-label">Pilih Thumbnail</label>
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
        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $(function(){
            $(".tanggal").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
        $('#propic').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }


    $("#lampiran").change(function() {
    document.getElementById('lampiran_label').innerHTML = document.getElementById('lampiran').files[0].name;
    });
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
                    $('#thumbnail').val(reader.result);
                    
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

    $('#sidebarAgenda').addClass("active");
</script>
@endsection