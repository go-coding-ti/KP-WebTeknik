@extends('adminlayout.layout')
@section('title', 'Edit Pages')
@section('content')


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Page {{$page->title_ina}}</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-page-update',$page->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Title Ina</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" value="{{$page->title_ina}}" required>
                        @error('title_ina')
                            <div class="invalid-feedback text-start">
                                {{$message}}
                            </div>
                        @enderror 
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Publish</label>
                        <input type="date" class="form-control" name="tanggal" value="{{$page->tanggal_publish}}">
                    </div>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Ina</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required>{{$page->content_ina}}</textarea>
                </div>
                <div class="form group mt-5">
                    <label for="title">Title Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" value="{{$page->title_eng}}" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Eng</label>
                    <textarea id="content_eng" class="summernote" name="content_eng" required>{{$page->content_eng}}</textarea>
                </div>
                <!-- <div class="form-group mt-4">
                    <label for="lampiran">File Lampiran</label>
                    <input type="file" class="form-control-file" id="lampiran" name="lampiran">
                </div> -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <label for="lampiran">Lampiran</label>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        @if($page->file_name != "")
                            <img style="height: 25px;" src="{{asset('assets/admin/img/document.png')}}"  alt="">
                            <a href="{{$page->file}}">{{$page->file_name}}</a>
                        @endif
                        <input type="file" class="form-control-file" id="galeri" name="galeri">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <label for="galeri">Galeri</label>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        @if($page->galeri != "")
                            <img style="max-height: 150px; max-width: 200px" src="{{url($page->galeri)}}" alt=""> 
                        @endif
                        <input type="file" class="form-control-file" id="galeri" name="galeri">
                    </div>
                </div>
                <div class="form group mt-5">
                    <label for="urlvideo">URL Video</label>
                    <input type="text" class="form-control" id="urlvideo" name="urlvideo" placeholder="URL Video">
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/pages" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
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
    });
</script>
@endsection