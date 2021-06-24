@extends('adminlayout.layout')
@section('title', 'Edit Sub Menu')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Sub Menu</h1>
    <p class="mb-4">Edit Sub Menu Fakultas Teknik Universitas Udayana</p>

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
            <h6 class="m-0 font-weight-bold text-primary">Edit Sub Menu</h6>
        </div>
        <div class="card-body">
        <form id="form-product" method="post" action="{{route('admin-submenu-update', $submenu->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Sub Menu Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('menu_ina') is-invalid @enderror"  id="menu_ina" name="menu_ina" value="{{$submenu->menu_ina}}" placeholder="Judul Bahasa Indonesia" required>
                    @error('menu_ina')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Sub menu Bahasa Indonesia wajib diisi
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="title">Sub Menu Bahasa Inggris</label>
                    <input type="text" class="form-control @error ('menu_eng') is-invalid @enderror" id="menu_eng" name="menu_eng" placeholder="Judul Bahasa Inggris" value="{{$submenu->menu_eng}}" required>
                    @error('menu_eng')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                    @else
                        <div class="invalid-feedback">
                            Sub menu Bahasa Inggris wajib diisi
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group form-group mt-4">
                <label for="header">Header</label>
                <select class="form-control @error ('header') is-invalid @enderror" data-live-search="true" id="header" rows="3" name="header" required>
                    <option value="">Pilih header</option>
                    @foreach ($headers as $header)
                        <option value="{{$header->id}}" @if($header->id==$id_header) selected @endif>{{$header->header_ina}}</option>
                    @endforeach
                </select>
                @error('header')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        Header wajib dipilih
                    </div>
                @enderror  
            </div>
            <div class="form-group form-group mt-4" id="menu_div">
                <label for="menu">Menu</label>
                <select class="form-control @error ('menu') is-invalid @enderror" data-live-search="true" id="menu" rows="3" name="menu" required>
                    <option value="">Pilih menu</option>
                    @foreach ($menus as $menu)
                        <option value="{{$menu->id}}" @if($submenu->id_menu==$menu->id) selected @endif>
                        {{$menu->menu_ina}}</option>
                    @endforeach
                </select>  
                @error('menu')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @else
                    <div class="invalid-feedback">
                        menu wajib dipilih
                    </div>
                @enderror 
            </div>
            <div class="form-group form-group mt-4" id="page_div">
                <label for="page">Pages</label>
                <select class="form-control" data-live-search="true" id="page" rows="3" name="page">
                    <option value="">Pilih pages</option>
                    @foreach ($pages as $page)
                        <option value="{{$page->id}}" @if($submenu->id_page==$page->id) selected @endif>{{$page->title_ina}}</option>
                    @endforeach
                </select>  
            </div>
            <div class="form group mt-4" id="url_eksternal_div">
                <label for="title">Url Eksternal</label>
                <input type="text" class="form-control" id="url_menu" name="url_menu" value="{{$submenu->menu_url}}" placeholder="URL Eksternal Header">
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

        $('#header').change(function() {
            if($('#header').val() != ""){ 
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '/admin/menus/menus/get/'+id,
                    success: function (response){
                        $('#menu').empty();
                        $('#menu').append('<option value="">Pilih Menu</option>');
                        response.forEach(element => {
                            $('#menu').append('<option value="' + element['id'] + '"' +'>' + element['menu_ina'] + '</option>');
                        });
                    }
                });
                $('#menu_div').fadeIn();
            } 
        });

        $('#url_menu').on("input", function() {
            if($('#url_menu').val() != ""){
                $('#page_div').hide(); 
            }else if($('#page').val() == ""){
                $('#page_div').fadeIn(); 
            }
        });


        //cekheader
        if($('#header option:selected').val() != ""){
            $('#menu_div').fadeIn();

        }else if($('#header option:selected').val() == ""){
            $('#menu_div').fadeOut(); 
        }

        //cekpage
        if($('#page option:selected').val() != ""){
            $('#url_eksternal_div').fadeOut(); 
        }else if($('#page option:selected').val() == ""){
            $('#url_eksternal_div').fadeIn();
        }
    });

    function getHeader(){
        return $('#header').val();
    }

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