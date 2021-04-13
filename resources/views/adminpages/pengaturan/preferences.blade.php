@extends('adminlayout.layout')
@section('title', 'Preferences')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Preferences</h1>
          <p class="mb-4">Pengaturan Website Fakultas Teknik Universitas Udayana</p>

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
          <!-- DataTales Example -->
          <!-- Copy drisini -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Preferences</h6>
            </div>
            <div class="card-body">
                <div class="card-body col-12">
                    <form id="form-product" method="post" action="{{Route('admin-preference-store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_website_ina">Nama Website Ina</label>
                            <input type="text" class="form-control" id="nama_website_ina" name="nama_website_ina" value="{{$preference->nama_website_ina}}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="nama_website_eng">Nama Website Eng</label>
                            <input type="text" class="form-control" id="nama_website_eng" name="nama_website_eng" value="{{$preference->nama_website_eng}}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="logo">Logo Website</label>
                            <br>
                            <img src="{{$preference->logo}}" class="mb-3" style="height:20%;width:20%;" id="propic">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo" name="logo">
                                <label for="logo_label" id="logo_label" class="custom-file-label">Pilih Logo</label>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="footer_ina">Konten Alamat Ina</label>
                            <textarea id="footer_ina" class="summernote" name="footer_ina" required>{!! $preference->footer_ina !!}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label for="footer_eng">Konten Alamat Eng</label>
                            <textarea id="footer_eng" class="summernote" name="footer_eng" required>{!! $preference->footer_ina !!}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-danger" type="reset" id="btnReset">Reset</button>      
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>           
                  </div>
            </div>
          </div>
          <!-- smpe sini -->
        
        <!-- Content Row -->
        <div class="row">
        <form method="POST" enctype="multipart/form-data" action="/admin/profile">
        
        </form>
        </div>

        <!-- Content Row -->

        <div class="row">
          
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Content Column -->
          <div class="col-lg-6 mb-4">

            <!-- Color System -->
            <div class="row">
              <div class="card mb-4">
<!--                 <div class="card-header">
                  Default Card Example
                </div>
                <div class="card-body">
                  This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div> -->
              </div>
          </div>

          </div>

          <div class="col-lg-6 mb-4">

          </div>
        </div>

      </div>

      <!-- /.container-fluid -->
@endsection
@section('custom_javascript')
<script>
    $('.summernote').summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
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

    $("#logo").change(function() {
    readURL(this);
    document.getElementById('logo_label').innerHTML = document.getElementById('logo').files[0].name;
    });
</script>
@endsection