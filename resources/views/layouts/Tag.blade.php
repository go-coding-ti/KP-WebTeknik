@if (App::getLocale() == 'en')
  <div class="row g-0 px-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
      <h1 class="h4 fw-bold text-light border-3 border-bottom border-danger p-2 pb-0 mb-0">Tags</h1>
    </div>
    <hr class="border border-light dropdown-divider mb-3 pt-0 mt-0">
    <ul class="list-inline px-2">
      @foreach($kategoris as $kategori)
        <li class="list-inline-item my-1">
          <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="btn btn-sm bg-red text-light fw-bold text-uppercase">{{$kategori->kategori_eng}}</a>
        </li>
      @endforeach
      {{-- <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-success text-light fw-bold text-uppercase">UKM Teknik</a>
      </li>
      <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-primary text-light fw-bold text-uppercase">Dies Natalis</a>
      </li>
      <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-warning text-light fw-bold text-uppercase">PKKMB Fakultas</a>
      </li>
      <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-red text-light fw-bold text-uppercase">Kejahatan Cyber</a> --}}
      </li>
    </ul>
  </div>
@endif

@if (App::getLocale() == 'id')
  <div class="row g-0 px-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
      <h1 class="h4 fw-bold text-light border-3 border-bottom border-danger p-2 pb-0 mb-0">Tags</h1>
    </div>
    <hr class="border border-light dropdown-divider mb-3 pt-0 mt-0">
    <ul class="list-inline px-2">
      @foreach($kategoris as $kategori)
        <li class="list-inline-item my-1">
          <a href="{{ route("Berita Kategori", ['language'=>app()->getLocale(), 'kategori' => $berita->kategori->kategori_lower]) }}" class="btn btn-sm bg-red text-light fw-bold text-uppercase">{{$kategori->kategori_ina}}</a>
        </li>
      @endforeach
      {{-- <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-success text-light fw-bold text-uppercase">UKM Teknik</a>
      </li>
      <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-primary text-light fw-bold text-uppercase">Dies Natalis</a>
      </li>
      <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-warning text-light fw-bold text-uppercase">PKKMB Fakultas</a>
      </li>
      <li class="list-inline-item my-1">
        <a href="" class="btn btn-sm bg-red text-light fw-bold text-uppercase">Kejahatan Cyber</a>
      </li> --}}
    </ul>
  </div>
@endif