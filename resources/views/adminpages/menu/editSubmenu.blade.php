@extends('adminlayout.layout')
@section('title', 'Edit Sub Menu')
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
              <h6 class="m-0 font-weight-bold text-primary">Edit Sub Menu</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-submenu-update', $submenu->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Sub Menu Ina</label>
                        <input type="text" class="form-control @error ('title_ina') is-invalid @enderror"  id="menu_ina" name="menu_ina" value="{{$submenu->menu_ina}}" placeholder="Judul Bahasa Indonesia" required>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <label for="title">Sub Menu Eng</label>
                        <input type="text" class="form-control" id="menu_eng" name="menu_eng" placeholder="Judul Bahasa Inggris" value="{{$submenu->menu_eng}}" required>
                    </div>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="header">Header</label>
                    <select class="form-control" data-live-search="true" id="header" rows="3" name="header" required>
                      <option value="">Pilih Header</option>
                        @foreach ($headers as $header)
                            <option value="{{$header->id}}" @if($header->id==$id_header) selected @endif>{{$header->header_ina}}</option>
                        @endforeach
                    </select>  
                </div>
                <div class="form-group form-group mt-4" id="menu_div">
                    <label for="menu">Menu</label>
                    <select class="form-control" data-live-search="true" id="menu" rows="3" name="menu" required>
                      <option value="">Pilih Menu</option>
                        @foreach ($menus as $menu)
                            <option value="{{$menu->id}}" @if($submenu->id_menu==$menu->id) selected @endif>
                            {{$menu->menu_ina}}</option>
                        @endforeach
                    </select>  
                </div>
                <div class="form-group form-group mt-4" id="page_div">
                    <label for="page">Pages</label>
                    <select class="form-control" data-live-search="true" id="page" rows="3" name="page">
                      <option value="">Pilih Pages</option>
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
                    <a href="/admin/menus" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
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
</script>
@endsection