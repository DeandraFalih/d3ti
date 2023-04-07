@extends('user.layout')
@section('content')

<br>
<div class="container box_1170">
    <div class="col-lg-12">
        <div class="position-relative mb-3"><br/>
            <br>
            <h1 class="mb-4 text-primary font-weight-bold align-center">Kalender Akademik Periode Februari - Juli 2023</h1><br>
            <a class="text-body">Berikut adalah kalender akademik tahun 2023</a><br><br>
            <div class="align-content-center">
            <img class="mb-4" src="{{ url ('user/img/kalender2.png') }}" width="800" alt=""><br>
            </div>
            <div>
                <div><br/>
                    <a class="text-body">Apabila anda ingin melihat lebih lengkap,silahkan </a>
                    <a class="text-body" href="https://uns.ac.id/id/wp-content/uploads/kaldik-uns-2022-a.pdf"> Download Disini.</a>
                    <br/>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection