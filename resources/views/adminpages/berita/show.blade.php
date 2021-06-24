@extends('adminlayout.layout')
@section('title', $berita->title_ina)
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Berita</h1>
    <p class="mb-4">Detail Berita Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="/admin/news/{{$berita->id}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Judul Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" value="{{$berita->title_ina}}" placeholder="Masukkan judul Bahasa Indonesia" required readonly>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Tanggal Publish</label>
                    <input type="date" class="form-control @error ('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{$berita->tanggal_publish}}" required readonly>
                </div>
            </div>
            <div class="form-group form-group mt-4">
              <label for="title">Kategori Berita</label>
              <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" value="{{$berita->kategori->kategori_ina}}" placeholder="Masukkan judul Bahasa Inggris" required readonly>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Konten Bahasa Indonesia</label>
                <textarea id="content_ina" class="summernote" name="content_ina" required>{{$berita->content_ina}}</textarea>
            </div>
            <div class="form group mt-5">
                <label for="title">Judul Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" value="{{$berita->title_eng}}" placeholder="Masukkan judul Bahasa Inggris" required readonly>
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
                <label for="description">Konten Bahasa Inggris</label>
                <textarea id="content_eng" class="summernote" name="content_eng" required >{{$berita->content_eng}}</textarea>
            </div>
            <div class="form-group mt-4">
                <label for="thumbnail">Thumbnail</label>
                <br>
                @if($berita->thumbnail != "")
                    <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="url" hidden>
                    <img src="{{$berita->thumbnail}}" style="border: 2px solid #DCDCDC;padding: 5px;height:20%;width:20%;" id="propic">
                @endif
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-berita-home')}}" class="btn btn-danger btn-icon-split">
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

    $('#content_ina').summernote('disable');
    $('#content_eng').summernote('disable');
    $('#sidebarBerita').addClass("active");
</script>
@endsection