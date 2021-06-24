@extends('layouts/UserLayout')

@section('content')
@if (App::getLocale() == 'en')
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-5">
                                    <img class="img-fluid p-4" src="{{asset('assets/admin/img/404-error-pana.svg')}}" alt="" />
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <a class="text-arrow-icon" href="{{ route("Index", app()->getLocale() ) }}">
                                        <i class="ml-0 mr-1" data-feather="arrow-left"></i>
                                        Return to Home
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endif
@if (App::getLocale() == 'id')
    <div id="layoutError">
        <div id="layoutError_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-5 mb-5">
                                <img class="img-fluid p-4 mt-5" src="{{asset('assets/admin/img/404-error-pana.svg')}}" alt="" />
                                <p class="lead">URL yang dituju tidak tersedia.</p>
                                <a class="text-arrow-icon" href="{{ route("Index", app()->getLocale() ) }}">
                                    <i class="ml-0 mr-1 mb-5" data-feather="arrow-left"></i>
                                    Kembali ke Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endif
@endsection
