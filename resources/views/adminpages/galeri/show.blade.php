@extends('adminlayout.layout')
@section('title', 'Detail Galeri')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Galeri</h1>
    <p class="mb-4">Detail Galeri Fakultas Teknik Universitas Udayana</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Galeri</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-galeri-update', $galeri->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="form group mt-1">
                <label for="title_ina">Judul Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('title_ina') is-invalid @enderror" id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" value="{{$galeri->title_ina}}" required readonly>
            </div>
            <div class="form group mt-4">
                <label for="title_eng">Judul Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" value="{{$galeri->title_eng}}" required readonly>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description_ina">Deskripsi Bahasa Indonesia</label>
                <textarea id="deskripsi_ina" class="form-control @error ('deskripsi_ina') is-invalid @enderror" name="deskripsi_ina" placeholder="Deskripsi Galeri Bahasa Indonesia" rows="10" required readonly>{{$galeri->deskripsi_ina}}</textarea>
            </div>
            <div class="form-group form-group mt-4">
                <label for="description_eng">Deskripsi Bahasa Inggris</label>
                <textarea id="deskripsi_eng" class="form-control @error ('deskripsi_eng') is-invalid @enderror" name="deskripsi_eng" placeholder="Deskripsi Galeri Bahasa Inggris" rows="10" required readonly>{{$galeri->deskripsi_eng}}</textarea>
            </div>
            <div class="form-group mt-4">
                <label for="thumbnail">Galeri</label>
                <br>
                @if($galeri->galeri != "")
                    <input type="text" class="form-control" name="galeri" id="galeri" placeholder="url" hidden>
                    <img src="{{$galeri->galeri}}" style="border: 2px solid #DCDCDC;padding: 5px;height:50%;width:50%;" id="propic">
                    <div class="custom-file">
                    </div>
                @endif
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-galeri-home')}}" class="btn btn-danger btn-icon-split">
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
    $('#sidebarGaleri').addClass("active");
</script>
@endsection