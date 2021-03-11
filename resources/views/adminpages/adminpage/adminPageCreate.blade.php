@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Page</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-page-create')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Title Ina</label>
                        <input type="text" class="form-control" id="titleina" name="titleina" placeholder="Title Ina" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Publish</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-fw fa-calendar"></span>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="telegram" placeholder="Tanggal Publish">
                        </div>
                    </div>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Ina</label>
                    <textarea id="contentina" class="summernote" name="contentina" required></textarea>
                </div>
                <div class="form group mt-5">
                    <label for="title">Title Eng</label>
                    <input type="text" class="form-control" id="titleeng" name="titleeng" placeholder="Title Eng" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Eng</label>
                    <textarea id="contenteng" class="summernote" name="contenteng" required></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="lampiran">File Lampiran</label>
                    <input type="file" class="form-control-file" id="lampiran" name="lampiran">
                </div>
                <div class="form-group mt-4">
                    <label for="galeri">Galeri</label>
                    <input type="file" class="form-control-file" id="galeri" name="galeri">
                </div>
                <div class="form group mt-5">
                    <label for="urlvideo">URL Video</label>
                    <input type="text" class="form-control" id="urlvideo" name="urlvideo" placeholder="URL Video">
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
    });
</script>
@endsection