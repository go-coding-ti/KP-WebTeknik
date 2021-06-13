@extends('adminlayout.layout')
@section('title', 'Detail Agenda')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Agenda</h1>
    <p class="mb-4">Detail Agenda Fakultas Teknik Universitas Udayana</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Agenda</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-agenda-update', $agenda->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form group mt-1">
                <label for="title">Judul Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" value="{{$agenda->title_ina}}" required readonly>
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
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$agenda->title_eng}}" required readonly>
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
                  <label for="title">Kategori Agenda</label>
                  <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$agenda->kategori->kategori_ina}}" required readonly>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Berlangsung</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal Berlangsung" value="{{$agenda->tanggal}}" required readonly>
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
                    <input type="time" class="form-control @error ('waktu_mulai') is-invalid @enderror" name="waktu_mulai" placeholder="Waktu Mulai" value="{{$agenda->waktu_mulai}}" required readonly>
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
                    <input type="time" class="form-control @error ('waktu_akhir') is-invalid @enderror" name="waktu_akhir" placeholder="Waktu Akhir" value="{{$agenda->waktu_akhir}}" required readonly>
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
                <input type="text" class="form-control @error ('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Lokasi Agenda" value="{{$agenda->lokasi}}" required readonly>
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
                <input type="text" class="form-control" id="website" name="website" placeholder="Website Agenda" value="{{$agenda->website}}" readonly>
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
                    </div>
                @endif
            </div>
            <div class="form-group mt-4">
                <label for="lampiran">File Lampiran</label>
                <br>    
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="lampiran" name="lampiran" disabled>
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
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>
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

    });

    $('#content_ina').summernote("disable");
    $('#content_eng').summernote("disable");
    $('#sidebarAgenda').addClass("active");
</script>
@endsection