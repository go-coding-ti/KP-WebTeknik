@extends('adminlayout.layout')
@section('title', 'Add Video')
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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Video</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-video-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form group mt-5">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Video" required>
                </div>
                <div class="form-group form-group mt-4">
                    <label for="description">Deskripsi</label>
                    <textarea id="deskripsi" class="form-control" name="deskripsi" placeholder="Deskripsi Video" rows="10" required></textarea>
                </div>
                <div class="form group mt-4">
                    <label for="urlvideo">URL Video</label>
                    <input type="text" class="form-control" id="urlvideo" name="urlvideo" placeholder="URL Video">
                </div>
                <div class="form-group mt-4">
                    <a href="/admin/videos" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Tambah</button>
                </div>
            </form>
                </form>
            </div>
          </div>
@endsection