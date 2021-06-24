@extends('adminlayout.layout')
@section('title', 'Tambah Header')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Header</h1>
    <p class="mb-4">Tambah Header Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Header</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-header-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Header Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('header_ina') is-invalid @enderror"  id="header_ina" name="header_ina" placeholder="Header Bahasa Indonesia" required>
                    @error('header_ina')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Header Bahasa Indonesia wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Header Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('header_eng') is-invalid @enderror" id="header_eng" name="header_eng" placeholder="Header Bahasa Inggris" required>
                    @error('header_eng')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Header Bahasa Inggris wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group form-group mt-4" id="page_div">
                <label for="page">Pages</label>
                <select class="form-control" data-live-search="true" id="page" rows="3" name="page">
                    <option value="">Pilih pages</option>
                    @foreach ($pages as $page)
                        <option value="{{$page->id}}">{{$page->title_ina}}</option>
                    @endforeach
                </select>  
            </div>
            <div class="form group mt-4" id="url_eksternal_div">
                <label for="title">Url Eksternal</label>
                <input type="text" class="form-control" id="url_header" name="url_header" placeholder="URL eksternal header">
            </div>
            <div class="form-group mt-4">
                <a href="{{route('admin-menu-home')}}" class="btn btn-danger btn-icon-split">
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
    $(document).ready(function(e){
        $('#page').change(function() {
            if($('#page').val() != ""){
                $('#url_eksternal_div').fadeOut(); 
            }else if($('#page').val() == ""){
                $('#url_eksternal_div').fadeIn();
            } 
        });

        $('#url_header').on("input", function() {
            if($('#url_header').val() != ""){
                $('#page_div').fadeOut(); 
            }else if($('#page').val() == ""){
                $('#page_div').fadeIn(); 
            }
        });

        if($('#page option:selected').val() != ""){
            $('#url_eksternal_div').fadeOut(); 
        }else if($('#page option:selected').val() == ""){
            $('#url_eksternal_div').fadeIn();
        }else if($('#url_header').val() != ""){
            $('#page_div').fadeOut(); 
        }else if($('#page').val() == ""){
            $('#page_div').fadeIn(); 
        }
    });

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

    $('#sidebarPengaturan').addClass("active");
</script>
@endsection