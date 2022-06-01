@extends('frontend/layouts.template')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                @if(session()->has('message'))
            <div class="container">
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            </div>
        @endif
                <h1 data-aos="fade-up">Selamat Datang di YooVis</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Pesan Sekarang Layanan Terbaik Dari Kami</h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#services" class="btn-get-started scrollto">Pesan Jasa</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src={{ asset('frontend/assets/img/hero-img.png')}} class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<!-- order -->
<div class="order">
    <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
        <section id="team" class="team section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Cara Memesan YooVis</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12" data-aos="fade-up">
                        <div class="text-center">
                            <img src="https://seekmi.com/images/icons/Hand.png" />
                            <div class="card-body">
                                Pilih Layanan YooVis
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12" data-aos="fade-up">
                        <div class="text-center">
                            <img src="https://seekmi.com/images/icons/Location.png" />
                            <div class="card-body">
                                Pilih Waktu dan Lokasi
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12" data-aos="fade-up">
                        <div class="text-center">
                            <img src="https://seekmi.com/images/icons/Broom.png" />
                            <div class="card-body">
                                Nikmati Pelayanan Terbaik dari YooVis
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- End order -->
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Service</h2>
            <p>YooVis menyediakan layanan servis yang dapat membantu masalah anda</p>
        </div>

        <div class="row" style="float: center;">
            <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-tab"></i></div>
                    <h4 class="title"><a href="service-smartphone">Smartphone</a></h4>
                    <p class="description">Memperbaiki semua masalah pada Smartphone anda</p>
                </div>
            </div>

            <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-laptop"></i></div>
                    <h4 class="title"><a href="service-laptop">Laptop</a></h4>
                    <p class="description">Memperbaiki semua masalah pada Laptop anda</p>
                </div>
            </div>

            <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-printer"></i></div>
                    <h4 class="title"><a href="service-printer">Printer</a></h4>
                    <p class="description">Memperbaiki semua masalah pada Printer anda
                    </p>
                </div>
            </div>

            <div class="home_hours text-center mt-5 d-none d-sm-block">
                Jam Kerja : Senin - Jumat : 08:00 - 19:00 WIB &nbsp;&nbsp;&nbsp;
                <span>Sabtu - Minggu Hari Libur : 09:00 - 18:00 WIB</span>
            </div>
        </div>

    </div>
</section><!-- End Services Section -->


<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Mengapa YooVis?</h2>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box"  data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="row">
                    <div class="col-4">
                    <span class="feature-icon">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </span>
                    </div>
                    <div class="col-8">
                    <div class="feature-text">
                        <h3>Terpercaya</h3>
                        <p align="justify">Teknisi dengan standar pelatihan khusus untuk memastikan pekerjaan terselesaikan.</p>
                        <!-- <p><a href="#">Learn More</a></p> -->
                    </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 animate-box"  data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="row">
                    <div class="col-4">
                    <span class="feature-icon">
                        <i class="bi bi-person-check-fill"></i>
                    </span>
                    </div>
                    <div class="col-8">
                    <div class="feature-text">
                        <h3>Kemudahan</h3>
                        <p align="justify">Cukup dengan beberapa sentuhan jari di smartphone teknisi akan menghampiri Anda.</p>
                        <!-- <p><a href="#">Learn More</a></p> -->
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box"  data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="row">
                    <div class="col-4">
                    <span class="feature-icon">
                        <i class="bi bi-tags"></i>
                    </span>
                    </div>
                    <div class="col-8">
                    <div class="feature-text">
                        <h3>Harga</h3>
                        <p align="justify">Dapatkan harga murah dengan garansi dan menerima pembayaran tunai atau transfer.</p>
                        <!-- <p><a href="#">Learn More</a></p> -->
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

</section><!-- End F.A.Q Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Testimoni dari para pelanggan YooVis</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Adam Malik</h3>
                            <h4>Pelajar</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Pelayanan Sangat Baik. Teknisi Handal sangat puas service HP disini, orangnya juga ramah ramah. Recommended dah..
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>W. Helmy</h3>
                            <h4>Mahasiswa</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Mas mas nya hebat, cepat tanggap, saya benerin LCD ke 3 HP saya disini semua. Sukses terus YooVis.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Ana Fijria</h3>
                            <h4>Guru</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Cukup 1x klik, teknisi langsung dateng ke rumah. Pelayanan OKE, Tepat Waktu, Mantap..... gak salah pilih YooVis.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Sony</h3>
                            <h4>Pelajar</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fast Respon, Teknisi profesional, pelayanan maksimal.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>Yuna Wijaya</h3>
                            <h4>Pengusaha</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Baru pertama kali ini, servis printer di YooVis. dan ternyata hasilnya memuaskan banget! bener2 sesuai harapan , akhirnya printer bisa dipakai lagi. Makasih
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->


</main><!-- End #main -->

@endsection
