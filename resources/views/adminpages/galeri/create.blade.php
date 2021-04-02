@extends('adminlayout.layout')
@section('title', 'Add Galery')
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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Galeri</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-galeri-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form group mt-4">
                    <label for="title_ina">Judul Ina</label>
                    <input type="text" class="form-control" id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" required>
                </div>
                <div class="form group mt-4">
                    <label for="title_eng">Judul Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description_ina">Deskripsi Ina</label>
                    <textarea id="deskripsi_ina" class="form-control" name="deskripsi_ina" placeholder="Deskripsi Galeri Bahasa Indonesia" rows="10" required></textarea>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description_eng">Deskripsi Eng</label>
                    <textarea id="deskripsi_eng" class="form-control" name="deskripsi_eng" placeholder="Deskripsi Galeri Bahasa Inggris" rows="10" required></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="galeri">Galeri</label>
                    <br>
                    <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: solid 2px #DCDCDC; padding: 5px;height:20%;width:20%;" id="galeripic">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="galeri" name="galeri" required>
                        <label for="galeri_label" id="galeri_label" class="custom-file-label">Pilih Galeri</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/galery" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Tambah</button>
                </div>
            </form>
                </form>
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

$("#galeri").change(function() {
    readURL(this);
    document.getElementById('galeri_label').innerHTML = document.getElementById('galeri').files[0].name;
});
</script>
@endsection