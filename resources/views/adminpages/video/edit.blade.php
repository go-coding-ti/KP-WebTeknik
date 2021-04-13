@extends('adminlayout.layout')
@section('title', 'Edit Video')
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
              <h6 class="m-0 font-weight-bold text-primary">Edit Video</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-video-update',$video->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form group mt-5">
                    <label for="title">Judul Ina</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$video->judul}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Judul Eng</label>
                    <input type="text" class="form-control" id="judul_eng" name="judul_eng" value="{{$video->judul_eng}}" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Deskripsi Ina</label>
                    <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi Video" rows="10" required>{{$video->deskripsi}}</textarea>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Deskripsi Eng</label>
                    <textarea id="deskripsi_deskripsi_eng" class="form-control" name="deskripsi_eng" placeholder="Deskripsi Video" rows="10" required></textarea>
                </div>
                <div class="form group mt-4">
                    <label for="urlvideo">URL Video</label>
                    <input type="text" class="form-control" id="urlvideo" name="urlvideo" value="{{$video->link}}">
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/videos" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                </div>
            </form>
                </form>
            </div>
          </div>
@endsection