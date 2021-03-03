<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- BOOTSTRAP CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                /* color: #636b6f; */
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .bg-black{
                background-color: #141414
            }

            .link-black{
                color: black
            }

            .link-black:hover{
                color: #F9ED20
            }

            .bg-dark-blue{
                background-color: #001427
            }

            .bg-orange-web{
                background-color: #F9ED20
            }

            .link:hover{
                color: #F9ED20
            }

            .bg-platinum{
                background-color: #E5E5E5
            }
            
            .dropdown-hover:hover{
                background-color: #F9ED20;
            }
        </style>
    </head>
    <body>

        {{-- NAVBAR --}}
        <nav class="d-none d-sm-block navbar navbar-expand-lg navbar-dark bg-dark-blue">
            <div class="container-fluid d-flex justify-content-end px-4">
                <a class="nav-link link-light fw-bold link" href="#"><strong>UNUD</strong></a>
                <a class="nav-link link-light fw-bold link" href="#"><strong>Fakultas Teknik</strong></a>
            </div>
        </nav>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-black shadow-sm">
            <div class="container-fluid px-4">
                <a class="navbar-brand" href="#">
                    <img src="https://3.bp.blogspot.com/-SG27FBypNGY/WLulxjX-ERI/AAAAAAAAF9Q/0G1m9FHSwbQJT66qlSSwX1FE2a_PVOMIACLcB/s1600/logo-fakultas-teknik-universitas-udayana-ft-unud-emas-jhonarendra.png" alt="" width="60" height="75" class="d-inline-block align-top">
                </a>

                {{-- Toggle Button in Small Screen to See Navbar Menu --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end text-end" id="navbarSupportedContent">
                    {{-- Navbar Menu in Large and Small Screen --}}
                    <a class="nav-link link-light h6 link" href="#">
                        <strong>Beranda</strong>
                    </a>
                    <div class="nav-item dropdown">
                        <a class="nav-link link-light h6 link d-none d-lg-block text-end" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                            <strong>Profile</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 35vh">
                            <a class="nav-link link-dark h4 fw-bold text-center">
                                <strong>Profile</strong>
                            </a>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Pimpinan</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Sejarah</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Visi dan Misi</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Tujuan dan Sasaran</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Dharma Perguruan Tinggi</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Rencana Strategis</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Perencanaan Pembangunan Jangka Panjang</a>
                            </div>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link link-light h6 link d-none d-lg-block text-end" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                            <strong>Akademik</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 80vh">
                            <a class="nav-link link-dark h4 fw-bold text-center">
                                <strong>Akademik</strong>
                            </a>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <div class="row align-items-center">
                                <div class="col">
                                    <a class="nav-link link-dark fw-bold text-start">
                                        <strong>Sarjana</strong>
                                    </a>
                                    <ul class="list-unstyled">
                                </div>
                                <div class="col">
                                    <a class="nav-link link-dark fw-bold text-center">
                                        <strong>Pascasarjana</strong>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="nav-link link-dark fw-bold text-end">
                                        <strong>Internasional</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Sipil</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Arsitektur</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Mesin</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Elektro</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknologi Informasi</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Lingkungan</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Industri</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col align-self-stretch">
                                    <ul class="list-unstyled text-center">
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Program S3 Ilmu Teknik</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Sipil</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Arsitektur</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Mesin</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Teknik Elektro</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col align-self-stretch">
                                    <ul class="list-unstyled text-end">
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Tropical Living</a>
                                        </li>
                                        <li>
                                            <a class="nav-link link-dark link lh-1" href="#">Sort Course (Global Engineering Program)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Penerimaan Mahasiswa Baru</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Pedoman Akademik</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">KRS Online</a>
                            </div>
                            <div class="text-center dropdown-hover">
                                <a class="text-decoration-none link-dark" href="">Kalender Akademik</a>
                            </div>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link link-light h6 link d-none d-lg-block text-end" href="#" id="navbarDropdown" data-bs-toggle="dropdown"><strong>Kemahasiswaan</strong></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 35vh">
                            <a class="nav-link link-dark h4 fw-bold text-center"><strong>Kemahasiswaan</strong></a>
                            <li><hr class="dropdown-divider"></li>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Organisasi Kemahasiswaan</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Satuan Kredit Partisipan (SKP)</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Senat Mahasiswa FT UNUD</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Kegiatan Kampus</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">PKKMB 2021</a></div>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link link-light h6 link d-none d-lg-block text-end" href="#" id="navbarDropdown" data-bs-toggle="dropdown"><strong>Bursa</strong></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 35vh">
                            <a class="nav-link link-dark h4 fw-bold text-center"><strong>Bursa</strong></a>
                            <li><hr class="dropdown-divider"></li>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Data Bursa SMFT</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Bursa SMFT</a></div>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link link-light h6 link d-none d-lg-block text-end" href="#" id="navbarDropdown" data-bs-toggle="dropdown"><strong>Alumni</strong></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 35vh">
                            <a class="nav-link link-dark h4 fw-bold text-center"><strong>Alumni</strong></a>
                            <li><hr class="dropdown-divider"></li>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Rencana Gedung Alumni</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">List Data Alumni</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Forum Alumni</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Tambah Data Alumni</a></div>
                            <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Survey Alumni</a></div>
                        </ul>
                    </div>
                    
                    {{-- Navbar Menu in Small end Mobile Screen --}}
                    <div class="accordion d-lg-none" id="accordionExample">
                        <div class="accordion-item">
                            <a class="nav-link link-light fw-bold text-end d-lg-none collapsed link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">Profil</a>
                            <div id="collapse" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="text-center">
                                        <a class="nav-link link-dark fw-bold text-center">
                                            <strong>Profile</strong>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Pimpinan</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Sejarah</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Visi dan Misi</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Tujuan dan Sasaran</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Dharma Perguruan Tinggi</a>
                                        </div>
                                        <div class="text-center dropdown-hover"><a class="text-decoration-none link-dark" href="">Rencana Strategis</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Perencanaan Pembangunan Jangka Panjang</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a class="nav-link link-light fw-bold text-end d-lg-none collapsed link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Akademik</a>
                            <div id="collapseOne" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="dropdown">
                                        <a class="nav-link link-dark fw-bold link" href="" id="akademikDropdown" data-bs-toggle="dropdown">Sarjana</a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAkademik" style="width: 35vh">
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Sipil</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Mesin</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Arsitektur</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Elektro</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknologi Informasi</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Lingkungan</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Industri</a>
                                            </div>
                                        </ul>
                                        <a class="nav-link link-dark fw-bold link" href="" id="akademikDropdown" data-bs-toggle="dropdown">Pascaarjana</a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAkademik" style="width: 35vh">
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">S3 Ilmu Teknik</a>
                                            </div>
                                            <div class="text-center dropdown-hover"><
                                                a class="text-decoration-none link-dark" href="">Teknik Sipil</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Mesin</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Arsitektur</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Teknik Elektro</a>
                                            </div>
                                        </ul>
                                        <a class="nav-link link-dark fw-bold link" href="" id="akademikDropdown" data-bs-toggle="dropdown">Internasional</a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAkademik" style="width: 35vh">
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Tropical Living</a>
                                            </div>
                                            <div class="text-center dropdown-hover">
                                                <a class="text-decoration-none link-dark" href="">Sort Course (Global Engineering Program)</a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a class="nav-link link-light fw-bold text-end d-lg-none collapsed link" type="button" data-bs-toggle="collapse" data-bs-target="#kamahasiswaan" aria-expanded="false" aria-controls="kamahasiswaan">Kemahasiswaan</a>
                            <div id="kamahasiswaan" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="text-center">
                                        <a class="nav-link link-dark fw-bold text-center">
                                            <strong>Kemahasiswaan</strong>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Organisasi Kemahasiswaan</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Satuan Kredit Partisipan (SKP)</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Senat Mahasiswa FT UNUD</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Kegiatan Kampus</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">PKKMB 2021</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a class="nav-link link-light fw-bold text-end d-lg-none collapsed link" type="button" data-bs-toggle="collapse" data-bs-target="#bursa" aria-expanded="false" aria-controls="bursa">Bursa</a>
                            <div id="bursa" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="text-center">
                                        <a class="nav-link link-dark fw-bold text-center">
                                            <strong>Bursa</strong>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Data Bursa SMFT</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Bursa SMFT</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a class="nav-link link-light fw-bold text-end d-lg-none collapsed link" type="button" data-bs-toggle="collapse" data-bs-target="#alumni" aria-expanded="false" aria-controls="alumni">Alumni</a>
                            <div id="alumni" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="text-center">
                                        <a class="nav-link link-dark fw-bold text-center">
                                            <strong>Alumni</strong>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Rencana Gedung Alumni</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">List Data Alumni</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Forum Alumni</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Tambah Data Alumni</a>
                                        </div>
                                        <div class="text-center dropdown-hover">
                                            <a class="text-decoration-none link-dark" href="">Survey Alumni</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Navbar Menu in Large and Small Screen --}}
                    <a class="nav-link link-light h6 link text-end" href="#">
                        <strong>Berita</strong>
                    </a>
                </div>
            </div>
        </nav>
        {{-- NAVBAR End --}}

        {{-- HERO PANEL --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        <div class="col p-0 m-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
                                    <div class="card-img-overlay d-flex justify-content-center align-content-end flex-wrap">
                                        <a class="nav-link link-black fw-bold text-start bg-dark-blue card" href=""
                                        style="background:  rgba(30, 51, 92, 0.9)">
                                            <h5 class="card-title fw-bold h3">Judul Berita Utama</h5>
                                            <p class="card-text">Paragraf ini berisikan deskripsi dari berita utama atau sub judul dari berita utama dada afdasas adasd dadas</p>
                                            <p class="card-text text-dark">Diposting pada 00 Mai 2020</p>
                                        </a>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="row row-cols-2">
                        <div class="col p-0 m-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
                                    <div class="card-img-overlay d-flex align-content-end flex-wrap">
                                        <a class="nav-link link-black fw-bold text-start bg-dark-blue card" href=""
                                        style="background:  rgba(30, 51, 92, 0.8)">
                                            <h5 class="card-title fw-bold h6">Judul Berita Utama</h5>
                                            <p class="card-text small text-dark">Diposting pada 00 Mai 2020</p>
                                        </a>	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
                                    <div class="card-img-overlay d-flex align-content-end flex-wrap">
                                        <a class="nav-link link-black fw-bold text-start bg-dark-blue card" href=""
                                        style="background:  rgba(30, 51, 92, 0.8)">
                                            <h5 class="card-title fw-bold h6">Judul Berita Utama</h5>
                                            <p class="card-text small text-dark">Diposting pada 00 Mai 2020</p>
                                        </a>	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
                                    <div class="card-img-overlay d-flex align-content-end flex-wrap">
                                        <a class="nav-link link-black fw-bold text-start bg-dark-blue card" href=""
                                        style="background:  rgba(30, 51, 92, 0.8)">
                                            <h5 class="card-title fw-bold h6">Judul Berita Utama</h5>
                                            <p class="card-text small text-dark">Diposting pada 00 Mai 2020</p>
                                        </a>	
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
                                    <div class="card-img-overlay d-flex align-content-end flex-wrap">
                                        <a class="nav-link link-black fw-bold text-start bg-dark-blue card" href=""
                                        style="background:  rgba(30, 51, 92, 0.8)">
                                            <h5 class="card-title fw-bold h6">Judul Berita Utama</h5>
                                            <p class="card-text small text-dark">Diposting pada 00 Mai 2020</p>
                                        </a>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- HERO PANEL End --}}

        {{-- TRENDING --}}
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                <h1 class="h4 fw-bold">Trending</h1>
                <div class="col-auto ml-auto text-right mt-n1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                            <li class="breadcrumb-item"><a class="text-decoration-none link-dark fw-bold card p-2 bg-platinum" href="" style="color: #1E335C">See All</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <hr class="dropdown-divider">
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 px-3 pt-2">
                <div class="col p-0 px-1 mb-3">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <a href="" class="link-black text-decoration-none card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </a href="">
                        <div class="card-footer">
                            <small class="text-muted">Diposting pada 00 Bulan 2021</small>
                        </div>
                    </div>
                </div>
                <div class="col p-0 px-1 mb-3">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <a href="" class="link-black text-decoration-none card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </a href="">
                        <div class="card-footer">
                            <small class="text-muted">Diposting pada 00 Bulan 2021</small>
                        </div>
                    </div>
                </div>
                <div class="col p-0 px-1 mb-3">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <a href="" class="link-black text-decoration-none card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        </a href="">
                        <div class="card-footer">
                            <small class="text-muted">Diposting pada 00 Bulan 2021</small>
                        </div>
                    </div>
                </div>
                <div class="col p-0 px-1 mb-3">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                        <a href="" class="link-black text-decoration-none card-body">
                            <h5 class="card-title fw-bold">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.. This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        </a href="">
                        <div class="card-footer">
                            <small class="text-muted">Diposting pada 00 Bulan 2021</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- TRENDING End --}}

        {{-- NEWS --}}
        <div class="container mt-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                <h1 class="h4 fw-bold">News</h1>
                <div class="col-auto ml-auto text-right mt-n1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                            <li class="breadcrumb-item"><a class="text-decoration-none link-dark card p-2 bg-orange-web" href="">See All</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <hr class="dropdown-divider bg-dark">
        </div>
        <div class="container">
            <div class="card-group">
                <div class="row row-cols-1 row-cols-lg-3 px-3">
                    <div class="col p-0 py-2 px-2">
                        <a href="" class="card link-black text-decoration-none p-0">
                            <img src="https://images.unsplash.com/photo-1599999905374-a7fdced81618?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Card title</h5>
                                <p class="card-text h6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </a>
                    </div>
                    <div class="col p-0 py-2 px-2">
                        <a href="" class="card link-black text-decoration-none p-0">
                            <img src="https://images.unsplash.com/photo-1599999905374-a7fdced81618?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-bold">Card title</h5>
                              <p class="card-text h6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </a>
                    </div>
                    <div class="col p-0 py-2 px-2">
                        <a href="" class="card link-black text-decoration-none p-0">
                            <img src="https://images.unsplash.com/photo-1599999905374-a7fdced81618?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-bold">Card title</h5>
                              <p class="card-text h6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </a>
                    </div>
                    <div class="col p-0 py-2 px-2">
                        <a href="" class="card link-black text-decoration-none p-0">
                            <img src="https://images.unsplash.com/photo-1599999905374-a7fdced81618?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-bold">Card title</h5>
                              <p class="card-text h6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </a>
                    </div>
                    <div class="col p-0 py-2 px-2">
                        <a href="" class="card link-black text-decoration-none p-0">
                            <img src="https://images.unsplash.com/photo-1599999905374-a7fdced81618?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-bold">Card title</h5>
                              <p class="card-text h6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </a>
                    </div>
                    <div class="col p-0 py-2 px-2">
                        <a href="" class="card link-black text-decoration-none p-0">
                            <img src="https://images.unsplash.com/photo-1599999905374-a7fdced81618?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDI0fGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-bold">Card title</h5>
                              <p class="card-text h6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>    	
        </div>
        {{-- NEWS End --}}

        {{-- NEWS LIST --}}
        {{-- <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                        <h1 class="h4 fw-bold">News</h1>
                    </div>
                    <hr class="dropdown-divider bg-dark">
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row px-3 p-0">
                <div class="col-lg-8 p-0 py-2 px-2">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                        <h1 class="h4 fw-bold">News</h1>
                    </div>
                    <hr class="dropdown-divider bg-dark">
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="card-body p-0">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-content-top flex-wrap">
                                <div class="card-body ms-1 px-2 ps-3 p-0">
                                    <a href="" class="card-title fw-bold text-decoration-none link-black h4">Card title</a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <a class="text-decoration-none link-black" href="">Hadi Darmawan - 00 Bulan 2021</a>
                                        </small>
                                    </p>
                                    <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-5">
                                    <div class="card-body p-0">
                                        <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                                    </div>
                            </div>
                            <div class="col-md-7 d-flex align-content-top flex-wrap">
                                <div class="card-body ms-1 px-2 ps-3 p-0">
                                    <a href="" class="card-title fw-bold text-decoration-none link-black h4">Card title</a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <a class="text-decoration-none link-black" href="">Abdi Purnawan - 00 Bulan 2021</a>
                                        </small>
                                    </p>
                                    <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-5">
                                    <div class="card-body p-0">
                                        <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                                    </div>
                            </div>
                            <div class="col-md-7 d-flex align-content-top flex-wrap">
                                <div class="card-body ms-1 px-2 ps-3 p-0">
                                    <a href="" class="card-title fw-bold text-decoration-none link-black h4">Card title</a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <a class="text-decoration-none link-black" href="">Hadi Darmawan - 00 Bulan 2021</a>
                                        </small>
                                    </p>
                                    <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="card-body p-0">
                                    <img src="https://images.unsplash.com/photo-1584722065001-ee7f49d903b1?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDIyfGFldTZyTC1qNmV3fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-content-top flex-wrap">
                                <div class="card-body ms-1 px-2 ps-3 p-0">
                                    <a href="" class="card-title fw-bold text-decoration-none link-black h4">Card title</a>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <a class="text-decoration-none link-black" href="">Abdi Purnawan - 00 Bulan 2021</a>
                                        </small>
                                    </p>
                                    <p class="card-text pt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 py-2 px-2 text-wrap">
                    <div class="row g-0 px-2">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                            <h1 class="h4 fw-bold">Tags</h1>
                        </div>
                        <hr class="dropdown-divider bg-dark">
                        <ul class="list-inline px-2">
                            <li class="list-inline-item btn bg-dark-blue text-white fw-bold mb-2">Teknologi</li>
                            <li class="list-inline-item btn bg-dark-blue text-white fw-bold mb-2">Kesenian</li>
                            <li class="list-inline-item btn bg-dark-blue text-white fw-bold mb-2">UKM Teknik</li>
                            <li class="list-inline-item btn bg-dark-blue text-white fw-bold mb-2">Dies Natalis</li>
                            <li class="list-inline-item btn bg-dark-blue text-white fw-bold mb-2">PMMB Fakultas</li>
                            <li class="list-inline-item btn bg-dark-blue text-white fw-bold mb-2">Kejahatan Cyber</li>
                        </ul>
                    </div>
                    <div class="row g-0">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5">
                            <h1 class="h4 fw-bold">Most Popular</h1>
                        </div>
                        <hr class="dropdown-divider bg-dark">
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="card-body p-0">
                                        <img src="https://images.unsplash.com/photo-1605719124118-58056ae4ed2a?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDM0fEo5eXJQYUhYUlFZfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex align-content-top flex-wrap">
                                    <div class="card-body ms-1 px-2 p-0">
                                        <a href="" class="card-title fw-bold text-decoration-none link-black">
                                            Judul Artiker Terpopuler
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    Abdi Purnawan - 00 Bulan 2021
                                                </small>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 border-0">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="card-body p-0">
                                        <img src="https://images.unsplash.com/photo-1605719124118-58056ae4ed2a?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDM0fEo5eXJQYUhYUlFZfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex align-content-top bg-danger flex-wrap">
                                    <div class="card-body ms-1 px-2 p-0">
                                        <a href="" class="card-title fw-bold text-decoration-none link-black">
                                            Judul Artiker Terpopuler
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    Abdi Purnawan - 00 Bulan 2021
                                                </small>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- NEWS LIST End --}}

        {{-- FOOTER --}}
        <footer class="text-muted py-5 mt-5 bg-dark">
            <div class="container">
              <p class="float-end">
                <a href="#" class="text-decoration-none link-light">Back to top</a>
              </p>
              <p class="">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
              <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>
        {{-- FOOTER End --}}

        {{-- BOOTSTRAP JC CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
</html>
