@extends('adminlayout.layout')
@section('title', 'Edit Staf')
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
              <h6 class="m-0 font-weight-bold text-primary">Edit Staf Pengajar</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-staff-update', $staf->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control"  id="nama" name="nama" value="{{$staf->nama}}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">NIP</label>
                        <input type="text" class="form-control" name="nip" value="{{$staf->nip}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal" value="{{$staf->tanggal_lahir}}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="prodi">Program Studi</label>
                        <select class="form-control" data-live-search="true" id="prodi" rows="3" name="prodi" required>
                        <option value="">Pilih Program Studi</option>
                            @foreach ($prodis as $prodi)
                                <option value="{{$prodi->id}}" @if($prodi->id == $staf->id_prodi) selected @endif>{{$prodi->prodi_ina}}</option>
                            @endforeach
                        </select>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$staf->email}}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Nomor Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="{{$staf->nomor_telepon}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">SINTA</label>
                        <input type="text" class="form-control"  id="sinta" name="sinta" value="{{$staf->sinta}}" >
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Scopus</label>
                        <input type="text" class="form-control" name="scopus" value="{{$staf->scopus}}" >
                    </div>
                </div>
                <div class="form group mt-4">
                    <label for="title">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$staf->alamat}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Pendidikan S1</label>
                    <input type="text" class="form-control" id="s1" name="s1" value="{{$staf->pendidikan_s1}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Pendidikan S2</label>
                    <input type="text" class="form-control" id="s2" name="s2" value="{{$staf->pendidikan_s2}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Pendidikan S3</label>
                    <input type="text" class="form-control" id="s3" name="s3" value="{{$staf->pendidikan_s3}}">
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Biografi Ina</label>
                    <textarea id="content_ina" class="form-control" name="biografi_ina" rows="8" required>{{$staf->biografi_ina}}</textarea>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Biografi Eng</label>
                    <textarea id="content_ina" class="form-control" name="biografi_eng" rows="8" required>{{$staf->biografi_eng}}</textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="thumbnail">Foto Profil</label>
                    <br>
                    <input type="text" class="form-control" name="foto" id="foto" placeholder="url" hidden>
                    <img src="{{$staf->foto}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                    <div class="custom-file">
                        <button type="button" class="btn btn-primary mt-1" data-target="#crop-image" data-toggle="modal"><i class="fa fa-images"></i> Pilih Foto Profil</button>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/pages" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                </div>
            </form>
                </form>
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
                        <img  src="{{$staf->foto}}" id="image-preview"  width="100%" height="100%" alt="">
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
						viewMode: 1,
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
</script>
@endsection