<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from live.envalab.com/html/hotte/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 01:19:10 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Hotte</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ asset('hotte/css/icofont.min.css') }}" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('hotte/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('hotte/css/slick-theme.css') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('hotte/css/bootstrap.min.css') }}" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('hotte/css/venobox.min.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('hotte/css/style.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('hotte/css/responsive.css') }}" />
</head>

<body>
    <!-- Goto TOP -->
    <div id="top-btn">
        <button class="btn top-btn"><i class="icofont-arrow-up"></i></button>
    </div>
    <!-- Preloader -->
    <div class="preloader-wrap">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- HEADER PART START -->
    <header>
        <div class="header py-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0 py-0">
                    <a class="navbar-brand" href="index.html">
                        <div class="logo">
                            <img src="{{ asset('hotte/img/luckroni/macaroni (4).png') }}" class="w-100 img-fluid"
                                alt="" />
                        </div>
                    </a>
                    <div class="open-time">
                        <h6><i class="icofont-clock-time"></i>Buka dari</h6>
                        <span>08:00 - 17:00</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icofont-navigation-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-custom">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>

                            <li class="nav-item last-menu-bg">
                                <span class="nav-link"><a href="#">+2 364 98 672</a></span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- HEADER PART END -->

    <!-- HERO SECTION START -->
    <div class="hero-section">
        <div class="bubble">
            <img src="{{ asset('hotte/img/bubble.png') }}" alt="bubble-images " class="img-fluid" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="hero-sec-content">
                        <h1>Tentang Kami</h1>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a><i class="icofont-double-right"></i></li>
                            <li>
                                <a href="{{ url('about') }}"><span>About</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    <!-- SERVICE SECTION START -->
    <div class="service-section">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="image-box clearfix border-right-dashed">
                        <div class="box-image float-left">
                            <img src="{{ asset('hotte/img/phone.png') }}" alt="" />
                            <!-- <img src="{{ asset('img/honney.png') }}" alt="" /> -->
                        </div>
                        <div class="image-text float-left contact-information">
                            <h2>Telepon</h2>
                            <p>00 863 578 774</p>
                            <p>88 725 705 344</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="image-box clearfix border-right-dashed">
                        <div class="box-image float-left">
                            <img src="{{ asset('hotte/img/email.png') }}" alt="" />
                            <!-- <img src="{{ asset('img/macaron.png') }}" alt="" /> -->
                        </div>
                        <div class="image-text float-left contact-information">
                            <h2>Email</h2>
                            <p>luqman123@gmail.com</p>
                            <p>dedenalif12345@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="image-box clearfix">
                        <div class="box-image float-left">
                            <img src="{{ asset('hotte/img/map.png') }}" alt="" />
                            <!-- <img src="{{ asset('img/dinner.png') }}" alt="" /> -->
                        </div>
                        <div class="image-text float-left contact-information">
                            <h2>Alamat</h2>
                            <p><a target="_blank" href="https://goo.gl/maps/C8ZF2nV4u4mtkGtk6">Taman Bunga
                                    Sukamukti<br>Desa Sukamukti</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SERVICE SECTION END -->

    <!-- ABOUT SECTION START -->
    <div class="about_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-6">
                    <div class="img-donat">
                        <img src="{{ asset('hotte/img/donut2.png') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="img-cutlary">
                        <img src="{{ asset('hotte/img/cutlery.png') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="tab">
                        <ul class="nav nav-pills custom-nav mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link show active custom-nav-link" id="thestory-tab" data-toggle="pill"
                                    href="#thestory" role="tab" aria-controls="thestory-tab" aria-selected="true">Profil
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-nav-link" id="our-mission-tab" data-toggle="pill"
                                    href="#our-mission" role="tab" aria-controls="our-mission"
                                    aria-selected="false">Tujuan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link custom-nav-link" id="our-vission-tab" data-toggle="pill"
                                    href="#our-vission" role="tab" aria-controls="our-vission"
                                    aria-selected="false">Visi dan Misi</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane custom-tab-pane text-center show active" id="thestory" role="tabpanel"
                                aria-labelledby="thestory-tab">
                                <h2>Profil Tentang Luckroni</h2>
                                <p>
                                    Luckroni merupakan brand jajanan makroni yang dikembangkan dari jajanan tradisional,
                                    yang akan ditawarkan ke para siswa dan siswi sebagai jajanan untuk mengganjal perut.
                                    Produk ini merupakan produk yang sudah ada sebelumnya yang nantinya akan
                                    dikembangkan lebih lanjut terkait variasi rasa dan lain sebagainya. Makanan ini
                                    nantinya akan memiliki target di berbagai kalangan.
                                </p>
                            </div>
                            <div class="tab-pane fade custom-tab-pane text-center" id="our-mission" role="tabpanel"
                                aria-labelledby="our-mission-tab">
                                <h2>Tujuan Kami</h2>
                                <p>
                                    Tujuan usaha makanan ini tidak lain adalah menawarkan sesuatu yang yang sering
                                    diminati oleh kalangan anak-anak di bidang bisnis makanan. Dengan membuka usaha ini,
                                    maka secara tidak langsung mengurangi jumlah pengangguran. Tujuan lainnya adalah
                                    untuk pembelajaran bagaimana berwirausaha.
                            </div>
                            <div class="tab-pane fade custom-tab-pane text-center" id="our-vission" role="tabpanel"
                                aria-labelledby="our-vission-tab">
                                <h2>Visi <span>dan</span> Misi</h2>
                                <p>
                                    <b>Visi</b> <br>
                                    Mewujudkan sebuah perusahaan makanan ringan terpercaya dan paling terkenal di
                                    seluruh dunia.
                                </p>
                                <p>
                                    <b>Misi</b> <br>
                                </p>
                                <ol style="font-size: 14px" class="ml-4 mr-4">
                                    <li>Selalu berinovasi dalam membuat produk baru yang sesuai dengan keinginan
                                        konsumen tanpa mengesampingkan kualitas.</li>
                                    <li>Memberikan kualitas pelayanan nomor satu untuk konsumen dan distributor.</li>
                                    <li>Membangun jaringan distribusi yang luas hingga ke pelosok negeri dan luar
                                        negeri.</li>
                                    <li>Mengedepankan kualitas sumber daya manusia agar menjadi perusahaan dengan SDM
                                        terbaik.</li>
                                    <li>Mengutamakan tanggung jawab, loyalitas, serta kemauan untuk terus belajar dan
                                        memahami teknologi yang berkembang saat ini.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6 col-xl-6">
                    <div class="about-img">
                        <img src="{{ asset('hotte/img/about_img.png') }}" class="img-fluid" alt="about-img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- CHEFS SECTION START -->
    <div class="chefs-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm 12 col-md-12 col-lg-12 col-xl-12">
                    <div class="chefs-head text-center">
                        <h2>Tim dari <span>Luckroni</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="chefs">
                        <div class="chefs-info row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="chefs-img text-center">
                                    <img src="{{ asset('hotte/img/chefs4.png') }}" alt="" class="w-100 img-fluid" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <div class="chefs-info-content">
                                    <h3><a href="#">Luqman Muhammad Syahidan</a></h3>
                                    <h4>Pendiri Luckroni</h4>
                                    <p>Luqman adalah seorang pendiri dari perusahaan luckroni. Nama Luckroni sendiri
                                        terinspirasi dari namanya yang sering dipanggil Luckman atau Roni</p>
                                </div>
                                <ul class="social-icon-list">
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li class="custom-icon-pinterest">
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </li>
                                    <li class="custom-icon-dribbble">
                                        <a href="#"><i class="icofont-dribbble"></i></a>
                                    </li>
                                    <li class="custom-icon-twitter">
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="chefs">
                        <div class="chefs-info row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="chefs-img text-center">
                                    <img src="{{ asset('hotte/img/chefs2.png') }}" alt="" class="w-100 img-fluid" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <div class="chefs-info-content">
                                    <h3><a href="#">Mohammad Reihan Zakya Alawi</a></h3>
                                    <h4>Sekretaris</h4>
                                    <p>Biasa dipanggil Reihan dia adalah seorang anggota rohis dan sekretaris yang ikut
                                        membantu mendirikan perusahaan luckroni ini.</p>
                                </div>
                                <ul class="social-icon-list">
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li class="custom-icon-pinterest">
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </li>
                                    <li class="custom-icon-dribbble">
                                        <a href="#"><i class="icofont-dribbble"></i></a>
                                    </li>
                                    <li class="custom-icon-twitter">
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="chefs">
                        <div class="chefs-info row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="chefs-img text-center">
                                    <img src="{{ asset('hotte/img/chefs3.png') }}" alt="" class="w-100 img-fluid" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <div class="chefs-info-content">
                                    <h3><a href="#">Deden Alif</a></h3>
                                    <h4>Chef Dunia</h4>
                                    <p>Deden adalah seorang chef handal yang tinggal di sompok. Dia memenangkan
                                        kejuaraan memasak di berbagai penjuru dunia.</p>
                                </div>
                                <ul class="social-icon-list">
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li class="custom-icon-pinterest">
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </li>
                                    <li class="custom-icon-dribbble">
                                        <a href="#"><i class="icofont-dribbble"></i></a>
                                    </li>
                                    <li class="custom-icon-twitter">
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="chefs">
                        <div class="chefs-info row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="chefs-img text-center">
                                    <img src="{{ asset('hotte/img/chefs6.png') }}" alt="" class="w-100 img-fluid" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <div class="chefs-info-content">
                                    <h3><a href="#">Gagan Nugraha</a></h3>
                                    <h4>Distributor</h4>
                                    <p>gagan adalah seorang petinju profesional ternama yang telah pensiun. Dia menjadi
                                        distributor luckroni karena gabut</p>
                                </div>
                                <ul class="social-icon-list">
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li class="custom-icon-pinterest">
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </li>
                                    <li class="custom-icon-dribbble">
                                        <a href="#"><i class="icofont-dribbble"></i></a>
                                    </li>
                                    <li class="custom-icon-twitter">
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CHEFS SECTION END -->

    @include('layouts.footer')

    <!-- jQuery File-->
    <script src="{{ asset('hotte/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('hotte/js/popper.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('hotte/js/slick.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('hotte/js/bootstrap.min.js') }}"></script>
    <!-- Venobox JS -->
    <script src="{{ asset('hotte/js/venobox.min.js') }}"></script>
    <!-- main.js -->
    <script src="{{ asset('hotte/js/main.js') }}"></script>
</body>

<!-- Mirrored from live.envalab.com/html/hotte/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 01:19:48 GMT -->

</html>
