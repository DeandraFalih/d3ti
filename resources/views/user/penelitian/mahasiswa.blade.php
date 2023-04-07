@extends('user.layout')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
        {{-- <link rel="stylesheet" href="{{ url ('user/css2/bootstrap.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ url('user/css2/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('user/css2/ticker-style.css') }}">
        <link rel="stylesheet" href="{{ url('user/css2/flaticon.css') }}">
        <link rel="stylesheet" href="{{ url('user/css2/slicknav.css') }}">
        {{-- <link rel="stylesheet" href="{{ url ('user/css2/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/magnific-popup.css') }}"> --}}
        <link rel="stylesheet" href="{{ url('user/css2/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ url('user/css2/themify-icon.css') }}">
        <link rel="stylesheet" href="{{ url('user/css2/slick.css') }}">
        <link rel="stylesheet" href="{{ url('user/css2/nice-select.css') }}">
        {{-- <link rel="stylesheet" href="{{ url ('user/css2/style.css') }}"> --}}
    </head>
    <!-- News With Sidebar Start -->
    <br>
    <div class="trending-area fix">
        <div class="container mt-50">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-12">
                            <div class="section-title">
                                <br>
                                <h4 class="m-0 font-weight-bold"; style="color:#055570">Penelitian Mahasiswa</h4>
                                {{-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> --}}
                            </div>
                        </div>
                        <br>
                        <!-- Trending Top -->
                        <div class="border border-top-1 p-3">
                            <div class="trend-top-img">
                                <img src="{{ url('user/img/watugambir.jpg') }}" style="height: 400px ; width:750px ;" alt="">
                                <div class="trend-top-cap">

                                    <h2><a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                        DESA WISATA BERBASIS WEB DAN MOBILE</a></h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="border border-top-1 p-3">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('user/img/watugambir.jpg') }}" alt=""
                                                style="height: 160px ;" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">

                                            <h6><a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                                DESA WISATA BERBASIS WEB DAN MOBILE</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border border-top-1 p-3">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('user/img/watugambir.jpg') }}" alt=""
                                                style="height: 160px ;">
                                        </div>
                                        <div class="trend-bottom-cap">

                                            <h6>
                                                <a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                                    DESA WISATA BERBASIS WEB DAN MOBILE</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border border-top-1 p-3">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('user/img/watugambir.jpg') }}" alt=""
                                                style="height: 160px ;" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">

                                            <h6><a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                                DESA WISATA BERBASIS WEB DAN MOBILE</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border border-top-1 p-3">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('user/img/watugambir.jpg') }}" alt=""
                                                style="height: 160px ;" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">

                                            <h6><a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                                DESA WISATA BERBASIS WEB DAN MOBILE</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border border-top-1 p-3">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('user/img/watugambir.jpg') }}" alt=""
                                                style="height: 160px ;" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">

                                            <h6><a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                                DESA WISATA BERBASIS WEB DAN MOBILE</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="border border-top-1 p-3">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('user/img/watugambir.jpg') }}" alt=""
                                                style="height: 160px ;" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">

                                            <h6><a href="details.html">PROMOSI DESA WISATA WATU GAMBIR MELALUI DIGITALISASI
                                                DESA WISATA BERBASIS WEB DAN MOBILE</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Popular News Start -->
                        <div class="mb-3">
                            <div class="border border-top-1 p-3">
                                <h4 class="m-0 font-weight-bold"; style="color:#055570">Most Popular</h4><br />
                                <div class="d-flex align-items-center mb-3" style="height: 110px;">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Kampus Baru Mesen untuk Prodi D3
                                            Teknik Informatika</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet
                                            elit...</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet
                                            elit...</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class=" font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet
                                            elit...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Popular News End -->

                        <!-- Popular News Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                            </div>
                            <div class="border border-top-1 p-3">
                                <h4 class="m-0 text-uppercase font-weight-bold" ; style="color:#055570">Hot News</h4><br>
                                <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class=" font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet
                                            elit...</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class=" font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet
                                            elit...</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                        </div>
                                        <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet
                                            elit...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popular News End -->

                        <!-- Tags Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                            </div>
                            <div class="border border-top-1 p-3">
                                <h4 class="m-0 text-uppercase font-weight-bold"; style="color:#055570">Tags</h4><br />
                                <div class="d-flex flex-wrap m-n1">
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tags End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
