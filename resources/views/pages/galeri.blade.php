@extends('layouts/UserLayout')

@section('content')
    @if (App::getLocale() == 'en')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Galery</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Back</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($galeris as $galeri)
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$galeri->id}}">
                                <img src="{{$galeri->galeri}}" class="card-img-top" alt="...">
                                <div class="card-body my-auto">
                                    <p class="text-center my-auto">{{$galeri->title_eng}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- Modal Start --}}
                    <div class="modal fade" id="staticBackdrop{{$galeri->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content bg-grey text-light">
                                <div class="modal-header border border-dark">
                                    <h5 class="modal-title fw-bold fs-4" id="staticBackdropLabel">{{$galeri->title_eng}}</h5>
                                    <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img id="imageGaleriModal" src="{{$galeri->galeri}}" style="width:50%; height:50%" alt="...">
                                </div>
                                <div class="modal-footer d-block border border-dark my-auto">
                                    <p class="text-center my-auto fs-5" id="deskripsiGaleriModal">{{$galeri->deskripsi_eng}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal End --}}
                    @endforeach
                    <ul class="pagination bg-dark justify-content-center mt-5">
                        @if($galeris->lastPage() > 1)
                        <li class="page-item">
                            <!--pagination-->
                            <ul class="pagination bg-dark">
                              <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($galeris->currentPage() == 1) style="display: none" @endif href="{{ $galeris->url($galeris->currentPage()-1) }}">Previous</a>
                                @for($i=1; $i <= $galeris->lastPage(); $i++)
                                  <li class="page-item"><a @if($galeris->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $galeris->url($i)}}">{{ $i }}</a></li>
                                @endfor
                              <a role="button" href="{{ $galeris->url($galeris->currentPage()+1) }}" @if($galeris->currentPage() == $galeris->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
                            </ul>
                          </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if (App::getLocale() == 'id')
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="h4 fw-bold text-light border-2 border-bottom border-danger p-2">Galeri</h1>
            <h1 class="h6 fw-bold pb-1"><a class="text-decoration-none fw-bold card bg-red text-white p-2" href="{{ route("Index", app()->getLocale() ) }}">Kembali</a></h1>
            </div>
            <hr class="border border-light dropdown-divider">
        </div>
        <div class="container">
            <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($galeris as $galeri)
                    <div class="col">
                        <div class="card bg-grey text-light">
                            <a href="" class="text-decoration-none link-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$galeri->id}}">
                                <img src="{{$galeri->galeri}}" class="card-img-top" alt="...">
                                <div class="card-body my-auto">
                                    <p class="text-center my-auto">{{$galeri->title_ina}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- Modal Start --}}
                    <div class="modal fade" id="staticBackdrop{{$galeri->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content bg-grey text-light">
                                <div class="modal-header border border-dark">
                                    <h5 class="modal-title fw-bold fs-4" id="staticBackdropLabel">{{$galeri->title_ina}}</h5>
                                    <button type="button" class="btn btn-dark text-white" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img id="imageGaleriModal" src="{{$galeri->galeri}}"style="width:50%; height:50%"  alt="...">
                                </div>
                                <div class="modal-footer d-block border border-dark my-auto">
                                    <p class="text-center my-auto fs-5" id="deskripsiGaleriModal">{{$galeri->deskripsi_ina}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal End --}}
                    @endforeach
                    <ul class="pagination bg-dark justify-content-center mt-5">
                        @if($galeris->lastPage() > 1)
                        <li class="page-item">
                            <!--pagination-->
                            <ul class="pagination bg-dark">
                              <a class="page-link pagination bg-black link-light border-light" tabindex="-1" aria-disabled="true" @if($galeris->currentPage() == 1) style="display: none" @endif href="{{ $galeris->url($galeris->currentPage()-1) }}">Previous</a>
                                @for($i=1; $i <= $galeris->lastPage(); $i++)
                                  <li class="page-item"><a @if($galeris->currentPage() == $i) class="page-link pagination bg-light link-dark link-bold" @else class="page-link pagination bg-black link-light" @endif href="{{ $galeris->url($i)}}">{{ $i }}</a></li>
                                @endfor
                              <a role="button" href="{{ $galeris->url($galeris->currentPage()+1) }}" @if($galeris->currentPage() == $galeris->lastPage()) style="display: none"  @endif class="page-link pagination bg-black link-light border-light text-center">Next</a>
                            </ul>
                          </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection