@extends('adminlayout.layout')
@section('title', 'Dashboard Admin')
@section('content')
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
  <p class="mb-4">Dashboard Admin Fakultas Teknik Universitas Udayana</p>

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
    @if (session()->has('error'))
    <div class="row">
      <div class="col-sm-12 alert alert-danger alert-dismissible fade show" role="alert">
          {{session()->get('error')}}
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
    <!-- Content Row -->

    <!-- Content Row -->
    <div class="row" style="padding:0px">
    <!-- Earnings (Monthly) Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-berita-home')}}" style="padding-top:0px">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2" style="padding:0px">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Berita</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_berita}}</div>
            </div>
            <div class="col-auto" style="padding:0px">
              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-pengumuman-home')}}" style="padding-top:0px">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2" style="padding:0px">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengumuman</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_pengumuman}}</div>
            </div>
            <div class="col-auto" style="padding:0px">
              <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-agenda-home')}}" style="padding-top:0px">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2" style="padding:0px">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Agenda</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto" style="padding:0px">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_agenda}}</div>
                </div>
              </div>
            </div>
            <div class="col-auto" style="padding:0px">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Pending Requests Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-video-home')}}" style="padding-top:0px">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2" style="padding:0px">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Video</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_video}}</div>
            </div>
            <div class="col-auto" style="padding:0px">
              <i class="fas fa-video fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
    <!-- Content Row -->

    <!-- Content Row -->
    <div class="row" style="padding:0px">
      <!-- Earnings (Monthly) Card Example -->
      <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-galeri-home')}}" style="padding-top:0px">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2" style="padding:0px">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Galeri</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_galeri}}</div>
              </div>
              <div class="col-auto" style="padding:0px">
                <i class="fas fa-images fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
  
      <!-- Earnings (Monthly) Card Example -->
      <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-download-home')}}" style="padding-top:0px">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2" style="padding:0px">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dokumen</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_download}}</div>
              </div>
              <div class="col-auto" style="padding:0px">
                <i class="fas fa-download fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
  
      <!-- Earnings (Monthly) Card Example -->
      <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-page-home')}}" style="padding-top:0px">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2" style="padding:0px">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Page</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto" style="padding:0px">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_page}}</div>
                  </div>
                </div>
              </div>
              <div class="col-auto" style="padding:0px">
                <i class="fas fa-pager fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
  
      <!-- Pending Requests Card Example -->
      <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="{{route('admin-staff-home')}}" style="padding-top:0px">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2" style="padding:0px">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Staf Pengajar</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_staf}}</div>
              </div>
              <div class="col-auto" style="padding:0px">
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      </div>
      <!-- Content Row -->
      <!-- Content Row -->
    {{-- <div class="card shadow mb-4">
      <div class="card-header">
          <h6 class="m-0 font-weight-bold text-primary">Fakultas Teknik Universitas Udayana</h6>
      </div>
      <div class="card-body">
          <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;" src="{{asset('assets/admin/img/unud.png')}}" alt="">
          </div>
          <p style="text-align: justify">
            SIM Dosen adalah  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna metus, feugiat in nisl quis, gravida varius dolor. Cras vitae auctor orci. Nunc molestie sit amet est quis porttitor. Pellentesque congue lectus tellus, placerat bibendum ligula ultrices at. Duis nec urna facilisis erat pretium varius et eu nisl. Etiam dapibus, nulla nec sollicitudin luctus, ipsum odio porta erat, at euismod dui enim vitae metus. Aenean fermentum turpis in leo imperdiet, tempus gravida tellus finibus. Sed id augue id diam malesuada vestibulum at ultrices tortor. Aliquam lobortis sapien et purus rhoncus, nec pellentesque sapien elementum.
            Integer odio quam, hendrerit id placerat sed, mollis quis libero. Sed id tincidunt nunc. Vivamus sit amet dui auctor, tincidunt mauris et, malesuada lacus. Etiam arcu est, pulvinar eu maximus pretium, luctus et nulla. Sed mauris orci, congue eu nibh a, vulputate vehicula purus. Donec bibendum dolor vitae leo pulvinar tempus. Morbi et arcu rutrum, facilisis metus eget, condimentum tellus. Pellentesque efficitur massa sed lorem dignissim rhoncus. Praesent iaculis suscipit leo vel iaculis. Suspendisse ipsum risus, rhoncus tristique aliquam viverra, dapibus vitae nisi. Fusce varius ex sit amet sapien vestibulum consectetur. Suspendisse varius lorem a est tempor imperdiet. </p>
      </div>
    </div> --}}
</div>
@endsection