@extends('user.layout')
@section('content')

<head>
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url ('user/css/box.css') }}">
</head>

<main>
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url ('user/img/vokasi.jpg') }}" height="600" style="object-fit: cover;" alt="sekolah vokasi">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <h1 class="display-4 text-light mb-8 animated slideInDown">Selamat Datang di D3 Teknik Informatika UNS</h1>
                                    {{-- <a href="" class="btn btn-primary py-sm-3 px-sm-5">Baca Lebih lanjut</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a> --}}
                                </div>
                                
                            </div><br><br><br>
                            <div class="container-fluid facts py-5 pt-lg-0">
                                <div class="container py-5 pt-lg-0">
                                    <div class="row gx-0">
                                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                            <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 btn-lg-square bg-primary">
                                                        <i class="fa fa-car text-white"></i>
                                                    </div>
                                                    <div class="ps-4">
                                                        <h5> Kampus Mesen </h5>
                                                        <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                            <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 btn-lg-square bg-primary">
                                                        <i class="fa fa-users text-white"></i>
                                                    </div>
                                                    <div class="ps-4">
                                                        <h5>Kampus Sekolah Vokasi</h5>
                                                        <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                            <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 btn-lg-square bg-primary">
                                                        <i class="fa fa-file-alt text-white"></i>
                                                    </div>
                                                    <div class="ps-4">
                                                        <h5>Kampus Utama</h5>
                                                        <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--   Image header -->


    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Berita & Event D3 Teknik Informatika</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ url ('user/img/news/weekly2News1.jpg') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ url ('user/img/news/weekly2News2.jpg') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ url ('user/img/news/weekly2News3.jpg') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ url ('user/img/news/weekly2News4.jpg') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ url ('user/img/news/weekly2News4.jpg') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <br><br>
    <br><br>
    <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Mitra Kerjasama D3 Teknik Informatika</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ url ('user/img/redhat.png') }}" alt="">
                                </div>
                        
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ url ('user/img/news/recent2.jpg') }}" alt="">
                                </div>
                                
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ url ('user/img/news/recent3.jpg') }}" alt="">
                                </div>
                                
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ url ('user/img/news/recent2.jpg') }}" alt="">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Gallery -->
    <div class="container box_1170">
        <div class="section-top-border">
            <h3>Image Gallery</h3>
            <div class="row gallery-item">
                <div class="col-md-4">
                    <a href="assets/img/elements/g1.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g1.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="assets/img/elements/g2.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g2.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="assets/img/elements/g3.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g3.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="assets/img/elements/g4.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g4.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="assets/img/elements/g5.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g5.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="assets/img/elements/g6.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g6.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="assets/img/elements/g7.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g7.jpg);"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="assets/img/elements/g8.jpg" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(user/img/elements/g8.jpg);"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Gallery -->

    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
    </main>

@endsection