<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>HMTI | Himpunan Mahasiswa Teknik Informatika</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{ url('/') }}">
                            <!-- <h1 class="text-white display-4">HMTI</h1> -->
                            <img src="{{ asset('img/logo/top.gif') }}" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="dopenav">
                                <ul id="nav">
                                    <li>
                                        <a href="#banner-section">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="#paa">PAA</a>
                                    </li>
                                    <li>
                                        <a href="#bidang">Bidang</a>
                                    </li>
                                    <li>
                                        <a href="#event">Event</a>
                                    </li>
                                    <li>
                                        <a href="#hubungi_kami">Hubungi Kami</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Start header section -->

    <!-- Start banner section -->
    <section class="banner-section relative section-gap-full" id="banner-section">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 banner-left">
                    <h1 data-aos="fade-up">Himpunan
                        Mahasiswa <br>Teknik Informatika</h1>
                    <h3 data-aos="fade-down" data-aos-delay="300" class="text-transpert mt-5">
                        Bridging
                        the
                        gap between theory
                        and practical in campus</h3>
                </div>
                <div data-aos="fade-up" data-aos-delay="700" class="col-md-6 banner-right text-center">
                    <img class="img-fluid" src="{{ asset('img/banner_img.png') }}" alt="Gambar Banner">
                </div>
            </div>
        </div>
        <div class="wave">
            <svg class="nectar-shape-divider" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
                preserveAspectRatio="none">
                <path
                    d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z">
                </path>
                <path
                    d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z">
                </path>
                <path
                    d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z">
                </path>
            </svg>
        </div>
    </section>
    <!-- End banner section -->

    <!-- Start about section -->
    <section class="about-section section-gap-half relative" id="paa">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-12 about-left">
                    <div data-aos="fade-up" class="embed-responsive embed-responsive-16by9">
                        <video playsinline muted autoplay="autoplay" loop controlslist="nodownload">
                            <source src="{{ asset('video/event/paa/paa.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 about-right">
                    <h1 data-aos="fade-up" data-aos-delay="500">Pembekalan Anggota Aktif</h1>
                    <p data-aos="fade-up" data-aos-delay="700">Hai teman-teman, tau ga sih HMTI setiap tahunnya selalu
                        mengadakan kegiatan
                        Pembekalan Anggota
                        Aktif, kegiatan ini bertujuan untuk
                        memberdayakan dan mengembangkan mahasiswa Teknik Informatika Udinus menjadi mahasiswa yang aktif
                        dan berpengalaman dalam berorganisasi.Oleh karena itu, Pembekalan Anggota Aktif tahun ini
                        mengangkat tema "Opportunity, Developing, Achieving Goals".
                    </p>

                </div>
            </div>
        </div>

    </section>
    <!-- End about section -->

    <!-- Start feature section -->
    <section class="feature-section section-gap-bidang" id="bidang">
        <div class="container">
            <div class="row align-items-center feature-wrap">
                <div class="col-lg-12">
                    <h1 class="text-center" data-aos="fade-up">Bidang Kami</h1>
                    <div class="row features-wrap mt-5">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-desktop"></span>
                                <h3>IPTEK</h3>
                                <p>
                                    Ilmu Pengetahuan dan Teknologi.
                                </p>
                                <p>
                                    Bidang yang fokus pada pengembangan technical skill di Software maupun Hardware.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-bookmark-alt"></span>
                                <h3>LITBANG</h3>
                                <p>
                                    Penelitian dan Pengembangan.
                                </p>
                                <p>
                                    Bidang yang fokus pada pengembangan Softskill baik dalam Internal maupun ke
                                    Eksternal.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-location-arrow"></span>
                                <h3>INFOKOM</h3>
                                <p>
                                    Informasi dan Komunikasi.
                                </p>
                                <p>
                                    Bidang yang fokus pada pengembangan Desain dan penyampaian Informasi yang efektif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->




    <!-- Start testimonial section -->
    <section class="testimonial-section section-gap-half" id="event">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 testimonial-left">
                    <h2 data-aos="fade-up">Event Kami</h2>
                    <p class="text-bigger" data-aos="fade-up" data-aos-delay="300">Nantikan event kami selanjutnya untuk
                        mengikuti update teknologi terbaru.</p>
                </div>
                <div class="col-lg-8 testimonial-right">
                    <div class="testimonial-carusel owl-carousel" id="testimonial-carusel" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="single-testimonial item">
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('img/events/paa.png') }}" alt="">
                                </div>
                                <div class="details">
                                    <h4>PAA</h4>
                                    <p>Pembekalan Anggota Aktif</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('img/events/itc.png') }}" alt="">
                                </div>
                                <div class="details">
                                    <h4>ITC</h4>
                                    <p>Informatic Technology Competition</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('img/events/hitech.png') }}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Hi Tech</h4>
                                    <p>Hi Technology</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('img/events/semnasti.png') }}" alt="">
                                </div>
                                <div class="details">
                                    <h4>SEMNASTI</h4>
                                    <p>Seminar Nasional Teknik Informatika</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial item">
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('img/events/cja.png') }}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Code Jam Academy</h4>
                                    <p>Pelatihan Web Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('img/events/cl.png') }}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Creative Labs</h4>
                                    <p>Lab kreatif biadng infokom</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->

    <!-- Start screenshot section -->
    <section class="screenshot-section section-gap-half" id="pengurus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center mb-5" data-aos="fade-up">Pengurus Harian HMTI</h1>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid p-5" src="{{ asset('img/pengurus/fathil.png') }}" alt="" data-aos="fade-up"
                        data-aos-delay="300">
                    <h2 class="text-center" data-aos="fade-up" data-aos-delay="600">Fathil Arham</h2>
                    <p class="text-center text-black text-biggers mb-5" data-aos="fade-up" data-aos-delay="600">Ketua
                        Umum</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid p-5" src="{{ asset('img/pengurus/hesti.png') }}" alt="" data-aos="fade-up"
                        data-aos-delay="900">
                    <h2 class="text-center" data-aos="fade-up" data-aos-delay="1200">Hesti Putri W</h2>
                    <p class="text-center text-black text-biggers mb-5" data-aos="fade-up" data-aos-delay="1200">
                        Sekretaris Umum</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid p-5" src="{{ asset('img/pengurus/lisa.png') }}" alt="" data-aos="fade-up"
                        data-aos-delay="1500">
                    <h2 class="text-center" data-aos="fade-up" data-aos-delay="1800">Lisa Aryanti</h2>
                    <p class="text-center text-black text-biggers mb-5" data-aos="fade-up" data-aos-delay="1800">
                        Bendahara Umum</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End screenshot section -->

    <!-- Start faq section -->
    <section class="home-faq-section faq-section" id="hubungi_kami">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <h1 class="text-center mb-5" data-aos="fade-up">Hubungi Kami</h1>
                </div>
                <div class="col-lg-12">
                    <form id="contact-form" action="#" autocomplete="off" data-aos="fade-up" data-aos-delay="300">
                        <div class="row contact-form-wrap justify-content-center">
                            <div class="col-md-6 contact-name form-col">
                                <input name="name" id="name" class="form-control" type="text"
                                    placeholder="Nama saya ...">
                            </div>
                            <div class="col-md-6 contact-email form-col">
                                <input name="mail" id="mail" class="form-control" type="email"
                                    placeholder="E-mail saya ...">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="comment" id="comment" class="form-control" rows="4"
                                    placeholder="Isi pesannya ..."></textarea>
                            </div>
                            <input type="submit" class="primary-btn" value="Kirim Masukan" id="submit-message">
                            <div id="msg" class="message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End faq section -->

    <!-- Start download section -->
    <section class="download-section section-gap-colab" id="download-section">
        <div class="container">
            <div class="row download-wrap justify-items-between align-items-center">
                <div class="col-lg-12">
                    <h1 class="text-center" data-aos="fade-up">Bekerja Sama Dengan</h1>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('img/brand/google.png') }}" alt="" data-aos="fade-up"
                        data-aos-delay="300">
                </div>
                <div class="col-lg-6 d-flex flex-wrap align-items-center">
                    <img class="img-fluid" height="50px" src="{{ asset('img/brand/dsc_logo.png') }}" alt=""
                        data-aos="fade-up" data-aos-delay="600">
                </div>
            </div>
        </div>
    </section>
    <!-- End download section -->

    <!-- Start footer section -->
    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 footer-left">
                    <a href="#">
                        <img src="{{ asset('img/logo/bottom.gif') }}" alt="">
                    </a>
                    <p class="copyright-text">&copy; 2019 Made By
                        <a href="https://hmtiudinus.org" target="_blank">Project Labs HMTI</a>
                    </p>
                </div>
                <div class="col-lg-7">
                    <ul id="social">
                        <li>
                            <a target="_blank" href="https://facebook.com/hmti.udinus/">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/hmtiudinus">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="mailto:udinus.hmti@gmail.com">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/hmtiudinus/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>

    <!--
JS
============================================= -->
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('js/dopeNav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out-quart',
            once: true,
        });
    </script>
</body>

</html>
