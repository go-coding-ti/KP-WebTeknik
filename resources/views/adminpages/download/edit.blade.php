@extends('adminlayout.layout')
@section('title', 'Edit Dokumen')
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
              <h6 class="m-0 font-weight-bold text-primary">Edit Download</h6>
            </div>
            <div class="card-body">
            <form id="form-product" method="post" action="{{route('admin-download-update', $download->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form group mt-5">
                    <label for="title">Nama Dokumen Ina</label>
                    <input type="text" class="form-control" id="title_ina" name="title_ina" placeholder="Nama Dokumen Indonesia" value="{{$download->title_ina}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="title">Nama Dokumen Eng</label>
                    <input type="text" class="form-control" id="title_eng" name="title_eng" placeholder="Nama Dokumen Inggris" value="{{$download->title_eng}}" required>
                </div>
                <div class="form group mt-4">
                    <label for="urlvideo">URL File</label>
                    <input type="text" class="form-control" id="urlfile" name="urlfile" placeholder="URL Dokumen" value="{{$download->url_download}}" required>
                </div>
                <div class="form-group mt-5">
                    <a href="/admin/downloads" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
                </div>
            </form>
                </form>
            </div>
          </div>
@endsection