@extends('adminlayout.layout')
@section('title', $video->judul)
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Video</h1>
          <p class="mb-4">Video {{$video->judul}}</p>

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
          <!-- DataTales Example -->
          <!-- Copy drisini -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail Video</h6>
            </div>
            <div class="card-body">
                <div class="col px-5 mb-3">
                    <div class="card border-0 bg-grey hover">
                        <div class="card-body text-center">
                        <iframe src="{{$video->link}}" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-dark fw-bold">{{$video->judul}}</h5>
                            <p class="card-text lh-sm text-dark">{{$video->deskripsi}}</p>
                            <a href="{{$video->link}}" class="card-text text-black small text-decoration-none text-link"><i class="fab fa-youtube"></i> See on YouTube</a>
                        </div>
                        <div class="form-group mt-4">
                            <a href="/admin/videos" class="btn btn-danger"><i class="fa sm fa-arrow-left"></i>   Kembali</a>
                        </div>
                    </div>
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
