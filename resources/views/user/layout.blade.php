<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>D3 Teknik Informatika</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ url ('user/lib/animate/animate.min.css') }}"/>
    <link rel="stylesheet" href="{{ url ('user/lib/owlcarousel/assets/owl.carousel.min.css') }}"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ url ('user/css/bootstrap.min.css') }}"/>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ url ('user/css/style.css') }}"/>
</head>

<body>
    <!-- Back to Top -->

    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ url ('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-1000"><img src="{{ url ('user/img/logo-default.png') }}" height="45" alt="Image"> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!-- home -->
                <a href="{{ url ('/') }}" class="nav-link dropdown-toggle active">Beranda</a>
                <!-- about -->
                <div class="nav-item dropdown">
                <a href="courses.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/tentang') }}" class="dropdown-item">Tentang</a>
                        <a href="{{ url('/dosen') }}" class="dropdown-item">Dosen dan Staff</a>
                        
                    </div>
                </div>
<!-- akademik -->
                <div class="nav-item dropdown">
                <a href="courses.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Akademik</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/kalender-akademik') }}" class="dropdown-item">Kalender Akademik</a>
                        <a href="{{ url('/kurikulum') }}" class="dropdown-item">Kurikulum</a>
                        <a href="{{ url('/tugas-akhir') }}" class="dropdown-item">Tugas Akhir</a>
                        <a href="{{ url('/fasilitas') }}" class="dropdown-item">Fasilitas</a>
                        <a href="{{ url('/pusat-layanan-terpadu') }}" class="dropdown-item">Pusat Layanan Terpadu</a>
                    </div>
                </div>
<!-- alumni -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/forum-alumni') }}" class="dropdown-item">Forum Alumni</a>
                        <a href="{{ url('/tracer-alumni') }}" class="dropdown-item">Tracer Alummni</a>
                        
                    </div>
                </div>
<!-- Mahasiswa -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mahasiswa</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/prestasi-mahasiswa') }}" class="dropdown-item">Prestasi Mahasiswa</a>
                        <a href="{{ url('/emailkomp') }}" class="dropdown-item">Emailkomp</a>
                        
                    </div>
                </div>
<!-- Calon Mahasiswa -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Calon Mahasiswa</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="https://spmb.uns.ac.id/" class="dropdown-item">Pendaftaran</a>
                        <a href="#" class="dropdown-item">Prospek Karir</a>
                        
                    </div>
                </div>
<!-- Penelitian -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Penelitian</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ url('/penelitian-mahasiswa') }}" class="dropdown-item">Penelitian Mahasiswa</a>
                        <a href="{{ url('/penelitian-dosen') }}" class="dropdown-item">Penelitian Dosen</a>
                        <a href="{{ url('/penelitian-jurnal') }}" class="dropdown-item">Jurnal Dosen dan<br/>Mahasiswa</a>
                        <a href="{{ url('/penelitian-kerjasama') }}" class="dropdown-item">Pengabdian</a>
                        <a href="{{ url('/penelitian-pengabdian') }}" class="dropdown-item">Kerjasama</a>
                    </div>
                </div>
<!-- Kontak -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kontak</a>
                </div>

                
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Contact</h4>
                    <!-- <h2 class="text-primary mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2> -->
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Jend. Urip Sumoharjo No.112, Purwodiningratan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57129</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-warning me-1" href="https://www.facebook.com/d3tiuns/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-warning me-1" href="https://www.youtube.com/@teknikinformatikauns"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-warning me-0" href="https://www.instagram.com/d3tiuns/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url ('user/lib/wow/wow.min.js') }}"></script>
    <script src="{{ url ('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url ('user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url ('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ url ('user/js/main.js') }}"></script>
</body>

</html>