@extends('adminlayout.layout')
@section('title', 'Sosial Media')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Sosial Media</h1>
          <p class="mb-4">Daftar Sosial Media Fakultas Teknik Universitas Udayana</p>

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

      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sosial Media</h6>
          </div>
          <div class="card-body">
          <form id="form-product" method="post" action="/admin/setting/social/{{$data->id}}/store" enctype="multipart/form-data">
              @csrf
              <div class="form group mt-2">
                  <label for="facebook">Facebook</label>
                  <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="{{$data->facebook}}" required>
              </div>
              <div class="form group mt-2">
                  <label for="instagram">Instagram</label>
                  <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="{{$data->instagram}}" required>
              </div>
              <div class="form group mt-2">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="{{$data->twitter}}" required>
              </div>
              <div class="form group mt-2">
                  <label for="google">Google Plus</label>
                  <input type="text" class="form-control" id="google" name="google" placeholder="Google Plus" value="{{$data->google}}" required>
              </div>
              <div class="form-group mt-4">
                  <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Reset</button>
                  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
              </div>
          </form>
              </form>
          </div>
        </div>
          <!-- smpe sini -->
        
    
       
@endsection