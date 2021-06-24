@extends('layouts/UserLayout')

@section('content')
  @if (App::getLocale() == 'en')
    <div class="container mt-5 pt-5">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
          <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Documents</h1>
          <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route('Index', app()->getLocale() ) }}">Back</a></h1>
      </div>
      <hr class="border border-light dropdown-divider pt-0 mt-0">
    </div>
    <div class="container pt-5">
      <div class="row no-gutters">
        <div class="col-12">
          <ul class="list-group">
            @foreach($downloads as $download)
            <a href="{{$download->url_download}}" target="_blank" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> {{$download->title_eng}}</span>
              <span class="small"> Posted on {{ date('d M Y', strtotime($download->created_at)) }}</span>
            </a>
            @endforeach
          </ul>
        </div>
        <ul class="pagination bg-dark justify-content-center mt-5">
          @if($downloads->lastPage() > 1)
          <li class="page-item">
              <!--pagination-->
              <ul class="pagination bg-dark">
                <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($downloads->currentPage() == 1) style="display: none" @endif href="{{ $downloads->url($downloads->currentPage()-1) }}">Previous</a>
                  @for($i=1; $i <= $downloads->lastPage(); $i++)
                    <li class="page-item"><a @if($downloads->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $downloads->url($i)}}">{{ $i }}</a></li>
                  @endfor
                <a role="button" href="{{ $downloads->url($downloads->currentPage()+1) }}" @if($downloads->currentPage() == $downloads->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  @endif

  @if (App::getLocale() == 'id')
    <div class="container mt-5 pt-5">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
          <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Semua Dokumen</h1>
          <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route('Index', app()->getLocale() ) }}">Kembali</a></h1>
      </div>
      <hr class="border border-light dropdown-divider pt-0 mt-0">
    </div>
    <div class="container pt-5">
      <div class="row no-gutters">
        <div class="col-12">
          <ul class="list-group">
            @foreach($downloads as $download)
            <a href="{{$download->url_download}}" target="_blank" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> {{$download->title_ina}}</span>
              <span class="small"> Diposting pada {{ date('d M Y', strtotime($download->created_at)) }}</span>
            </a>
            @endforeach
          </ul>
        </div>
        <ul class="pagination bg-dark justify-content-center mt-5">
          @if($downloads->lastPage() > 1)
          <li class="page-item">
              <!--pagination-->
              <ul class="pagination bg-dark">
                <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($downloads->currentPage() == 1) style="display: none" @endif href="{{ $downloads->url($downloads->currentPage()-1) }}">Previous</a>
                  @for($i=1; $i <= $downloads->lastPage(); $i++)
                    <li class="page-item"><a @if($downloads->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $downloads->url($i)}}">{{ $i }}</a></li>
                  @endfor
                <a role="button" href="{{ $downloads->url($downloads->currentPage()+1) }}" @if($downloads->currentPage() == $downloads->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  @endif
@endsection