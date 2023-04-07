@extends('user.layout')
@section('content')

<div class="container">
    <div class="container-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="position-relative mb-3"><br/>
                        <h1 class="mt-5 text-primary font-weight-bold">Visi program studi</h1>
                        <div>
                            <div class="mb-4"><br/>
                                <a class="text-body" href="">Menjadi pusat pengembangan kualitas sumber daya manusia bidang teknologi informasi yang 
                                    berkelanjutan dan unggul di tingkat internasional pada tahun 2045 dengan berlandaskan pada nilai luhur budaya nasional.</a>  
                                <br/>
                            </div>
                            <img src="{{ url ('user/img/smt1.jpg') }}" height="750">
                            <br>
                            <img src="{{ url ('user/img/smt2.jpg') }}" height="600">
                            <br>
                            <img src="{{ url ('user/img/smt3.jpg') }}" height="700">
                            <br>
                            <img src="{{ url ('user/img/smt4.jpg') }}" height="700">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-5">
                        </div>
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
    <br>
</div>

@endsection