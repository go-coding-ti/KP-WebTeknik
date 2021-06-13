@extends('adminlayout.layout')
@section('title', 'Admin Password')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Password</h1>
    <p class="mb-4">Ganti Password Fakultas Teknik Universitas Udayana</p>

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

    @if (session()->has('statusInput'))
      <div class="row">
        <div class="col-sm-12 alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('statusInput')}}
            <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    @endif

    @if (session()->has('error'))
      <div class="row">
        <div class="col-sm-12 alert alert-danger alert-dismissible fade show" role="alert">
            {{session()->get('error')}}
            <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-password-update')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form group mt-2">
                <label for="title">Password Lama</label>
                <input type="password" class="form-control @error ('password_lama') is-invalid @enderror" id="password_lama" name="password_lama" placeholder="Masukkan password lama" required>
                @error('password_lama')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Password lama wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-2">
                <label for="title">Password Baru</label>
                <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password baru" required>
                @error('password')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Password baru wajib diisi
                    </div>
                @enderror
            </div>
            <div class="form group mt-2">
                <label for="title">Ulangi Password Baru</label>
                <input type="password" class="form-control @error ('repeat_password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru" required>
                @error('password_confirmation')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Password baru wajib diulang
                    </div>
                @enderror
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-home')}}" class="btn btn-danger btn-icon-split">
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
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
</script>
@endsection