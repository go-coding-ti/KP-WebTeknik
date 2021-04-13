@extends('adminlayout.layout')
@section('title', 'Add Staf')
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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Staf Pengajar</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-staff-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="nama" name="nama" placeholder="Masukkan Nama" required>
                        @error('title_ina')
                            <div class="invalid-feedback text-start">
                                {{$message}}
                            </div>
                        @enderror 
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">NIP</label>
                        <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal Lahir" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="prodi">Program Studi</label>
                        <select class="form-control" data-live-search="true" id="prodi" rows="3" name="prodi" required>
                        <option value="">Pilih Program Studi</option>
                            @foreach ($prodi as $prodi)
                                <option value="{{$prodi->id}}">{{$prodi->prodi_ina}}</option>
                            @endforeach
                        </select>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Email</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="email" name="email" placeholder="Masukkan Email" required>
                        @error('title_ina')
                            <div class="invalid-feedback text-start">
                                {{$message}}
                            </div>
                        @enderror 
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Nomor Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">SINTA</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="sinta" name="sinta" placeholder="Masukkan Link SINTA">
                        @error('title_ina')
                            <div class="invalid-feedback text-start">
                                {{$message}}
                            </div>
                        @enderror 
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Scopus</label>
                        <input type="text" class="form-control" name="scopus" placeholder="Masukkan Link Scopus">
                    </div>
                </div>
                <div class="form group mt-4">
                    <label for="title">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Pendidikan S1</label>
                    <input type="text" class="form-control" id="s1" name="s1" placeholder="Masukkan Pendidikan S1" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Pendidikan S2</label>
                    <input type="text" class="form-control" id="s2" name="s2" placeholder="Masukkan Pendidikan S2" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Pendidikan S3</label>
                    <input type="text" class="form-control" id="s3" name="s3" placeholder="Masukkan Pendidikan S3">
                </div>
                {{-- <div class="form-group form-group mt-4">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" data-live-search="true" id="kategori" rows="3" name="kategori" required>
                      <option value="">Pilih Kategori</option>
                        @foreach ($prodi as $prodi)
                            <option value="{{$prodi->id}}">{{$prodi->prodi_ina}}</option>
                        @endforeach
                    </select>  
                </div> --}}
                <div class="form-group form-group mt-4">
                    <label for="description">Biografi Ina</label>
                    <textarea id="content_ina" class="form-control" name="biografi_ina" rows="8" required></textarea>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Biografi Eng</label>
                    <textarea id="content_ina" class="form-control" name="biografi_eng" rows="8" required></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="thumbnail">Foto Profil</label>
                    <br>
                    <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto" required>
                        <label for="foto_label" id="foto_label" class="custom-file-label">Pilih Foto</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/pages" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Tambah</button>
                </div>
            </form>
                </form>
            </div>
          </div>
@endsection

@section('custom_javascript')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function(e){
        var status;

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
        $('#propic').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }

    $("#foto").change(function() {
    readURL(this);
    document.getElementById('foto_label').innerHTML = document.getElementById('foto').files[0].name;
    });
});
</script>
@endsection