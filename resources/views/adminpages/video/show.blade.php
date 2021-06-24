@extends('adminlayout.layout')
@section('title', 'Detail Video')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Video</h1>
    <p class="mb-4">Detail Video Fakultas Teknik Universitas Udayana</p>
        
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Video</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-video-update',$video->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="form group mt-1">
                <label for="title">Judul Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Judul Video Bahasa Indonesia" value="{{$video->judul}}" required readonly>
                @error('judul')
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
                <input type="text" class="form-control @error ('judul_eng') is-invalid @enderror" id="judul_eng" name="judul_eng" placeholder="Judul Video Bahasa Inggris" value="{{$video->judul_eng}}" required readonly>
                @error('judul_eng')
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
                <label for="description">Deskripsi Bahasa Indonesia</label>
                <textarea id="deskripsi" class="form-control @error ('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi Video Bahasa Indonesia" rows="10" required readonly>{{$video->deskripsi}}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Deskripsi Bahasa Indonesia wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group form-group mt-4">
                <label for="description">Deskripsi Bahasa Inggris</label>
                <textarea id="deskripsi_deskripsi_eng" class="form-control @error ('deskripsi_eng') is-invalid @enderror" name="deskripsi_eng" placeholder="Deskripsi Video Bahasa Inggris" rows="10" required readonly>{{$video->deskripsi_eng}}</textarea>
                @error('deskripsi_eng')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Deskripsi Bahasa Inggris wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-4">
                <label for="urlvideo">URL Video</label>
                <input type="text" class="form-control @error ('urlvideo') is-invalid @enderror" id="urlvideo" name="urlvideo" placeholder="URL Video" value="{{$video->link}}" required readonly>
                @error('urlvideo')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        URL video wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-video-home')}}" class="btn btn-danger btn-icon-split">
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
<script>
    $('#sidebarVideo').addClass("active")
</script>
@endsection