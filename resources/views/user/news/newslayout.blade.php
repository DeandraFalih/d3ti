@extends('user.layout')
@section('content')
    <style>
      h1, h2, h3, h4, h5, h6 {
        color: black;
      }

    .post-content img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }
    </style>
    <!-- News With Sidebar Start -->
    <br>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- News Detail Start -->
                    <div class="position-relative mb-3"><br/>
                    @foreach ($data_post['data'] as $data)
                        @php
                            $dateString = $data['post_date'];
                            $date = new DateTime($dateString);
                            $formattedDate = $date->format('F j, Y h:i A');
                        @endphp
                    <small><a class="" href="{{ url('/') }}">Home</a> > <a class="" href="#">News</a> > <a class="">{{ $data['post_title'] }}</a></small>
                        
                        <h1 class="mb-3 text-primary font-weight-bold">{{ $data['post_title'] }}</h1>
                        <img class="img-fluid w-100" src="{{ url('post/featured_image/'.$data['post_featured_image']) }}" style="object-fit: cover;">
                        <div>
                            <div class="mb-4"><br/>
                                By <b><a href="">{{ $data['post_author'] }}</a></b>
                                <a class="text-body"> - {{ $formattedDate }}</a>
                                <br/>
                            </div>
                            <div class="post-content" style="color: black;">
                                {!! $data['post_content'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- mulai side bar --}}
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
    </div>
    <!-- News With Sidebar End -->
@endsection
