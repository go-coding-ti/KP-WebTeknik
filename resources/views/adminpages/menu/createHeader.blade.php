@extends('adminlayout.layout')
@section('title', 'Add Header')
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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Header</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-header-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Header Ina</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="header_ina" name="header_ina" placeholder="Judul Bahasa Indonesia" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Header Eng</label>
                        <input type="text" class="form-control" id="header_eng" name="header_eng" placeholder="Judul Bahasa Inggris" required>
                    </div>
                </div>
                <div class="form-group form-group mt-4" id="page_div">
                    <label for="page">Pages</label>
                    <select class="form-control" data-live-search="true" id="page" rows="3" name="page">
                      <option value="">Pilih Pages</option>
                        @foreach ($pages as $page)
                            <option value="{{$page->id}}">{{$page->title_ina}}</option>
                        @endforeach
                    </select>  
                </div>
                <div class="form group mt-4" id="url_eksternal_div">
                    <label for="title">Url Eksternal</label>
                    <input type="text" class="form-control" id="url_header" name="url_header" placeholder="URL Eksternal Header">
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/menus" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
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
</script>
@endsection