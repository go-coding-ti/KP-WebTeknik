@extends('adminlayout.layout')
@section('title', 'Edit Agenda')
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
              <h6 class="m-0 font-weight-bold text-primary">Edit Agenda</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-agenda-update', $agenda->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form group mt-4">
                    <label for="title">Judul Ina</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" value="{{$agenda->title_ina}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Judul Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$agenda->title_eng}}" required>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" data-live-search="true" id="kategori" rows="3" name="kategori" required>
                          <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $kategori)
                                <option value="{{$kategori->id}}" @if($agenda->id_kategori==$kategori->id) selected @endif>{{$kategori->kategori_ina}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Berlangsung</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Berlangsung" value="{{$agenda->tanggal}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Waktu Mulai</label>
                        <input type="time" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai" value="{{$agenda->waktu_mulai}}" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Waktu Berakhir</label>
                        <input type="time" class="form-control" name="waktu_akhir" placeholder="Waktu Akhir" value="{{$agenda->waktu_akhir}}" required>
                    </div>
                </div>
                <div class="form group mt-4">
                    <label for="title">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Agenda" value="{{$agenda->lokasi}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Alamat Website</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Website Agenda" value="{{$agenda->website}}">
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Ina</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required>{{$agenda->content_ina}}</textarea>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Eng</label>
                    <textarea id="content_eng" class="summernote" name="content_eng" required>{{$agenda->content_eng}}</textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="thumbnail">Thumbnail</label>
                    <br>
                    <img src="{{$agenda->thumbnail}}" class="mb-3" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                        <label for="thumbnail_label" id="thumbnail_label" class="custom-file-label">{{$agenda->thumbnail_name}}</label>
                    </div>
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
                    <a href="/admin/events" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
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

    $("#thumbnail").change(function() {
    readURL(this);
    document.getElementById('thumbnail_label').innerHTML = document.getElementById('thumbnail').files[0].name;
    });

    $("#lampiran").change(function() {
    document.getElementById('lampiran_label').innerHTML = document.getElementById('lampiran').files[0].name;
    });
});
</script>
@endsection