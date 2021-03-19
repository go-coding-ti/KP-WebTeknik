@extends('adminlayout.layout')
@section('title', 'Edit Post')
@section('content')

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
              <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Title Ina</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="title_ina" name="title_ina" value="{{$post->title_ina}}" required>
                        @error('title_ina')
                            <div class="invalid-feedback text-start">
                                {{$message}}
                            </div>
                        @enderror 
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Tanggal Publish</label>
                        <input type="date" class="form-control" name="tanggal" value="{{$post->tanggal_publish}}" required>
                    </div>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="kategori">Category</label>
                    <select class="form-control" data-live-search="true" id="kategori" rows="3" name="kategori" required>
                        @foreach ($kategori as $kategori)
                            <option value="{{$kategori->id}}" @if($post->id_kategori==$kategori->id) selected @endif>
                            {{$kategori->kategori_ina}}</option>
                        @endforeach
                    </select>  
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Ina</label>
                    <textarea id="content_ina" class="summernote" name="content_ina" required>{{$post->content_ina}}"</textarea>
                </div>
                <div class="form group mt-5">
                    <label for="title">Title Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" value="{{$post->title_eng}}" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Content Eng</label>
                    <textarea id="content_eng" class="summernote" name="content_eng" required>{{$post->content_eng}}"</textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                </div>
                <div class="form-group mt-4">
                    <label for="lampiran">File Lampiran</label>
                    <input type="file" class="form-control-file" id="lampiran" name="lampiran" required>
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

        // $('#blog_category-name').selectpicker();

        // jQuery('#submitBlogCategory').click(function(e){
        //     jQuery.ajax({
        //         url: "{{url('admin/kategori')}}",
        //         type: "POST",
        //         data: {
        //             _token: $('#signup-token').val(),
        //             name: jQuery('#blogCategoryName').val(),
        //         },
        //         success: function(result){
        //             $('.ganti').html(result.view);
        //             $('#blog_category_name').selectpicker('refresh');
        //             $('#addBlogCategory').modal('hide');
        //             console.log(result.view);
        //         }
        //     });
        // });
    });
</script>
@endsection