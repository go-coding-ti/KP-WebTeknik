@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
            </div>
            <div class="card-body">
              <form action="{{route('admin-berita-store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <table class="table table-borderless">
                        <tbody>
                            
                            <tr>
                                <td><label for="judul">Judul Berita</label></td>
                                <td>
                                    <textarea type="date" class="form-control" name="judul" id="judul" rows="1" placeholder="Judul Berita"></textarea>
                                    <!-- @if($errors->has('judul'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('judul') }}</strong>
                                        </span> 
                                    @endif -->
                                </td>
                            </tr>
                            <tr>
                                <td><label for="konten">Isi Berita</label></td>
                                <td>
                                    <textarea class="form-control" name="konten" id="konten" rows="10" placeholder="Isi Berita"></textarea>
                                    <!-- @if($errors->has('konten'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('konten') }}</strong>
                                        </span> 
                                    @endif -->
                                </td>
                            </tr>
                            <tr>
                                <td><label for="gambar">Gambar</label></td>
                                <td><input type="file" name="gambar" id="gambar"></td>
                            </tr>
                        </tbody>
                        
                    </table>
                    <a href="/admin/berita" class="btn btn-danger"><i class="fa fa-times"></i> Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Tambah Berita</button>
                </form>
            </div>
          </div>
@endsection

@section('custom_javascript')
<script src="{{asset('/assets/admin/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('konten')
        })
    </script>
@endsection