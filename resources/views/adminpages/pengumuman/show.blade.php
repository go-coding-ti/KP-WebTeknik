@extends('adminlayout.layout')
@section('title', 'Detail Pengumuman')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
    <p class="mb-4">Detail Pengumuman Fakultas Teknik Universitas Udayana</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pengumuman</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-pengumuman-update', $pengumuman->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Judul Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" value="{{$pengumuman->title_ina}}" required readonly>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Publish</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal Publish" value="{{$pengumuman->tanggal_publish}}" required readonly>
                </div>
            </div>
            <div class="form-group form-group mt-4">
              <label for="title">Kategori Pengumuman</label>
              <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$pengumuman->kategori->kategori_ina}}" required readonly>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Bahasa Indonesia</label>
                <textarea id="content_ina" class="summernote" name="content_ina" required>{{$pengumuman->content_ina}}</textarea>

            </div>
            <div class="form group mt-5">
                <label for="title">Judul Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$pengumuman->title_eng}}" required readonly>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Eng</label>
                <textarea id="content_eng" class="summernote" name="content_eng" required>{{$pengumuman->content_eng}}</textarea>
            </div>
            <div class="form-group mt-4">
                <label for="lampiran">File Lampiran</label>
                <br>    
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="lampiran" name="lampiran" disabled>
                    <label for="lampiran_label" id="lampiran_label" class="custom-file-label">
                        @if($pengumuman->lampiran == NULL)
                            Pilih Lampiran
                        @else
                            {{$pengumuman->lampiran_name}}
                        @endif
                        </label>
                </div>
                {{-- <input type="file" class="form-control-file" id="lampiran" name="lampiran"> --}}
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-pengumuman-home')}}" class="btn btn-danger btn-icon-split">
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
    $('#sidebarPengumuman').addClass("active");
</script>
@endsection