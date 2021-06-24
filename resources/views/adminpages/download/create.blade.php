@extends('adminlayout.layout')
@section('title', 'Tambah Dokumen')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Dokumen</h1>
    <p class="mb-4">Tambah Dokumen Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Download</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-download-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form group mt-1">
                <label for="title">Dokumen Bahasa Indonesia</label>
                <input type="text" class="form-control @error ('title_ina') is-invalid @enderror" id="title_ina" name="title_ina" placeholder="Nama Dokumen Indonesia" required>
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
                <label for="title">Dokumen Bahasa Inggris</label>
                <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Nama Dokumen Inggris" required>
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
            <div class="form group mt-4">
                <label for="urlvideo">URL Dokumen</label>
                <input type="text" class="form-control @error ('urlfile') is-invalid @enderror" id="urlfile" name="urlfile" placeholder="URL Dokumen" required>
                @error('urlfile')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        URL dokumen wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form-group mt-5">
                <a href="{{route('admin-download-home')}}" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Batal</span>
                </a>
                <button  type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>
            </div>
        </form>
            </form>
        </div>
    </div>
</div>
@endsection
@section('custom_javascript')
<script>
    // Validasi Form
    (function () {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
    
    $('#sidebarDownload').addClass("active")
</script>
@endsection