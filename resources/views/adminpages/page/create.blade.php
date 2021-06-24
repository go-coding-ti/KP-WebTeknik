@extends('adminlayout.layout')
@section('title', 'Tambah Page')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pages</h1>
    <p class="mb-4">Tambah Page Fakultas Teknik Universitas Udayana</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Page</h6>
        </div>
        <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-page-store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-group form-group mt-1">
                    <label for="title">Judul Bahasa Indonesia</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Judul Bahasa Indonesia" required>
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
                <div class="form-group form-group mt-4">
                    <label for="description">Konten Bahasa Indonesia</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required></textarea>
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
                <div class="form group mt-4">
                    <label for="title">Judul Bahasa Inggris</label>
                    <input type="text" class="form-control @error ('title_eng') is-invalid @enderror" id="title_eng" name="title_eng" placeholder="Judul Bahasa Inggris" required>
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
                    <textarea id="content_eng" class="summernote" name="content_eng" required></textarea>
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
                    <label for="lampiran">File Lampiran</label>
                    <br>    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lampiran" name="lampiran">
                        <label for="lampiran_label" id="lampiran_label" class="custom-file-label">Pilih Lampiran</label>
                    </div>
                    {{-- <input type="file" class="form-control-file" id="lampiran" name="lampiran"> --}}
                </div>
                <div class="form-group mt-4">
                    <a href="{{route('admin-page-home')}}" class="btn btn-danger btn-icon-split">
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

        $(function(){
            $(".tanggal").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });

        $('#blog_category-name').selectpicker();

        jQuery('#submitBlogCategory').click(function(e){
            jQuery.ajax({
                url: "{{url('admin/kategori')}}",
                type: "POST",
                data: {
                    _token: $('#signup-token').val(),
                    name: jQuery('#blogCategoryName').val(),
                },
                success: function(result){
                    $('.ganti').html(result.view);
                    $('#blog_category_name').selectpicker('refresh');
                    $('#addBlogCategory').modal('hide');
                    console.log(result.view);
                }
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                $('#propic').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#galeri").change(function() {
        readURL(this);
            document.getElementById('galeri_label').innerHTML = document.getElementById('galeri').files[0].name;
        });

        $("#lampiran").change(function() {
            document.getElementById('lampiran_label').innerHTML = document.getElementById('lampiran').files[0].name;
        });
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
    
    $('#sidebarPage').addClass("active")
</script>
@endsection