@extends('adminlayout.layout')
@section('title', 'Create Pages')
@section('content')


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Page</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-page-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group form-group mt-5">
                    <label for="title">Title Ina</label>
                    <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" placeholder="Title Ina" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Ina</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required></textarea>
                </div>
                <div class="form group mt-5">
                    <label for="title">Title Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" placeholder="Title Eng" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Eng</label>
                    <textarea id="content_eng" class="summernote" name="content_eng" required></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="lampiran">File Lampiran</label>
                    <br>    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lampiran" name="lampiran" required>
                        <label for="lampiran_label" id="lampiran_label" class="custom-file-label">Pilih Lampiran</label>
                    </div>
                    {{-- <input type="file" class="form-control-file" id="lampiran" name="lampiran"> --}}
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/pages" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Tambah</button>
                </div>
            </form>
                </form>
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
</script>
@endsection