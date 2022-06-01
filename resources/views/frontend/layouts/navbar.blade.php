<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="{{ asset('frontend/assets/img/logo.png')}}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v4.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/"><img src="{{ asset('frontend/assets/img/logo.png')}}" alt=""
                            class="img-fluid"></a>
                    <a href="/">YooVis</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li class="dropdown"><a href="#services"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="service-smartphone">Service Smartphone</a></li>
                            <li><a href="service-laptop">Service Laptop</a></li>
                            <li><a href="service-printer">Service Printer</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @guest
                    @if (Route::has('login'))
                    <li>
                        <a class="getstarted" href="{{ route('login') }}">{{ __('Login | Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="dropdown">
                        <a href="#" class="getstartednew"><b><img
                                    src="{{ asset('frontend/assets/img/profil.png')}}">{{ Auth::user()-> name }}</b></a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <hr>
                            <li><a href="keranjang">Keranjang</a></li>
                            <hr>
                            <li><a href="#"> <a class="dropdown" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li><i class="fa fa-sign-out" aria-hidden="true"></i>
                                <form id="logout-form" action="{{ route('logout') }} " method="POST" class="d-none">
                                    @csrf
                                </form>

                    </li>
                    @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
