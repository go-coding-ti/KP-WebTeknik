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
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
          </ul>
        </div>
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
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
            <a href="#" class="list-group-item bg-grey link-light list-group-item-action list-group-item-dark d-flex justify-content-between align-items-center">
              <span class="fs-5"><i class="fas fa-file-download me-3"></i> A simple primary list group item</span>
              <span class="small"> Diposting pada: 15 Mar 2020</span>
            </a>
          </ul>
        </div>
      </div>
    </div>
  @endif
@endsection