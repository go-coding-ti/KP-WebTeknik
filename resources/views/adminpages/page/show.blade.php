@extends('adminlayout.layout')
@section('title', 'Detail Page')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pages</h1>
    <p class="mb-4">Detail Page Fakultas Teknik Universitas Udayana</p>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Page</h6>
        </div>
        <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-page-update',$page->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group form-group mt-1">
                    <label for="title">Judul Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" value="{{$page->title_ina}}" placeholder="Judul Bahasa Indonesia" required readonly>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Bahasa Indonesia</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required>{{$page->content_ina}}</textarea>
                </div>
                <div class="form group mt-4">
                    <label for="title">Judul Bahasa Inggris</label>
                    <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" value="{{$page->title_eng}}" placeholder="Judul Bahasa Inggris" required readonly>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Bahasa Inggris</label>
                    <textarea id="content_eng" class="summernote" name="content_eng" required>{{$page->content_eng}}</textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="lampiran">File Lampiran</label>
                    <br>    
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="lampiran" name="lampiran" disabled>
                            <label for="lampiran_label" id="lampiran_label" class="custom-file-label">@if($page->file != ""){{$page->file_name}}@else Pilih Lampiran @endif</label>
                        </div>
                </div>
                <div class="form-group mt-4">
                    <a href="{{route('admin-page-home')}}" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                </div>
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
    $('#sidebarPage').addClass("active")
</script>
@endsection