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

        <link rel="stylesheet" href="{{ url ('user/css2/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/ticker-style.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/flaticon.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/slicknav.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/themify-icon.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/slick.css') }}">
        <link rel="stylesheet" href="{{ url ('user/css2/nice-select.css') }}">

</head>

<br>
<div class="row">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- News Detail Start -->
                    <div class="position-relative mb-3"><br/>
                        <h1 class="mb-3 text-primary font-weight-bold">Emailkomp</h1>
                        <img src="{{ url ('user/img/emailkomp.jpg') }}" height="500">
                        <div>
                            <div class="mb-4"><br/>
                                <a class="text-body" href="">Emailkomp adalah organisasi internal D3 Teknik Informatika.</a><br>
                                <a class="text-body" href="">Berikut adalah link sosial media dari Emailkomp.</a>
                                <br/>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-square btn-outline-dark me-1" href="https://www.facebook.com/d3tiuns/"><i class="fab fa-facebook-f"></i></a><br>
                                    <a class="btn btn-square btn-outline-dark me-1" href="https://www.youtube.com/@teknikinformatikauns"><i class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-outline-dark me-0" href="https://www.instagram.com/d3tiuns/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="section-tittle mb-30">
                        <h3 class="mb-4 text-primary font-weight-bold">Berita seputar Emailkomp</h3>
                    </div>
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{{ url ('user/img/trending/trending_top.jpg') }}" alt="">
                            <div class="trend-top-cap">
                                
                                <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            <div class="col-lg-4">
                            <div class="single-bottom mb-35">
                                <div class="trend-bottom-img mb-30">
                                    <img src="{{ url ('user/img/trending/trending_bottom1.jpg') }}" alt="">
                                </div>
                                <div class="trend-bottom-cap">
                                    
                                    <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ url ('user/img/trending/trending_bottom2.jpg') }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        
                                        <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ url ('user/img/trending/trending_bottom3.jpg') }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                       
                                        <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ url ('user/img/trending/trending_bottom1.jpg') }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        
                                        <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url ('user/img/trending/trending_bottom1.jpg') }}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            
                                            <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ url ('user/img/trending/trending_bottom1.jpg') }}" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                
                                                <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
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
                            <h4 class="m-0 font-weight-bold"; style="color:#055570">Most Popular</h4><br/>
                            <div class="d-flex align-items-center mb-3" style="height: 110px;">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="font-weight-semi-bold p-1 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                    </div>
                                    <a class="h6 m-0 text-primary" href="">Kampus Baru Mesen untuk Prodi D3 Teknik Informatika</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="font-weight-semi-bold p-1 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                    </div>
                                    <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="font-weight-semi-bold p-1 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                    </div>
                                    <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class=" font-weight-semi-bold p-1 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                    </div>
                                    <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                </div>
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
                                    <a class=" font-weight-semi-bold p-1 mr-2"
                                        href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                </div>
                                <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                            <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                            <div
                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class=" font-weight-semi-bold p-1 mr-2"
                                        href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                </div>
                                <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  mb-3" style="height: 110px;">
                            <img class="img-fluid" src="{{ url('user/img/fotoside.jpg') }}" alt="">
                            <div
                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="font-weight-semi-bold p-1 mr-2"
                                        href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                                </div>
                                <a class="h6 m-0 text-primary" href="">Lorem ipsum dolor sit amet elit...</a>
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
                        <h4 class="m-0 text-uppercase font-weight-bold"; style="color:#055570">Tags</h4><br/>
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
        


@endsection