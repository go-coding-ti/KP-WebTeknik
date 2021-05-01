@extends('adminlayout.layout')
@section('title', 'Add Agenda')
@section('content')

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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Agenda</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-agenda-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form group mt-4">
                    <label for="title">Judul Ina</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Judul Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" required>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" data-live-search="true" id="kategori" rows="3" name="kategori" required>
                          <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->kategori_ina}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Berlangsung</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Berlangsung" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Waktu Mulai</label>
                        <input type="time" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Waktu Berakhir</label>
                        <input type="time" class="form-control" name="waktu_akhir" placeholder="Waktu Mulai" required>
                    </div>
                </div>
                <div class="form group mt-4">
                    <label for="title">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Agenda" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Alamat Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Website Agenda">
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Ina</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required></textarea>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Eng</label>
                    <textarea id="content_eng" class="summernote" name="content_eng" required></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="thumbnail">Thumbnail</label>
                    <br>
                    <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="url" hidden>
                    <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                    <div class="custom-file">
                        <button type="button" class="btn btn-primary mt-1" data-target="#crop-image" data-toggle="modal"><i class="fa fa-images"></i> Pilih Thumbnail</button>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <label for="lampiran">File Lampiran</label>
                    <br>    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lampiran" name="lampiran">
                        <label for="lampiran_label" id="lampiran_label" class="custom-file-label">Pilih Lampiran</label>
                    </div>
                    {{-- <input type="file" class="form-control-file" id="lampiran" name="lampiran"> --}}
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/events" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Tambah</button>
                </div>
            </form>
                </form>
            </div>
          </div>

          {{-- CROPPER --}}
          <div class="modal fade" id="crop-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Pilih Thumbnail</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 20px">
                        <img  src="{{asset('')}}assets/admin/img/pictures_placeholder.png" id="image-preview"  width="100%" height="100%" alt="">
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
						viewMode: 1,
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
</script>
@endsection