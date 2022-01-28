<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from live.envalab.com/html/hotte/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 11:49:36 GMT -->

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
    <!--HEADER PART START-->
    <header>
        <div class="header py-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0 py-0">
                    <a class="navbar-brand" href="index.html">
                        <div class="logo">
                            <img src="{{ asset('hotte/img/luckroni/macaroni (4).png') }}" class="w-100 img-fluid" alt="" />
                        </div>
                    </a>
                    <div class="open-time">
                        <h6><i class="icofont-clock-time"></i> Open Now</h6>
                        <span>8AM - 10PM</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icofont-navigation-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-custom">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
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
    <!--HEADER PART END-->

    <!--HOME HERO SECTION START-->
    <div class="home-hero-section">
        <div class="bubble">
            <img src="{{ asset('hotte/img/bubble.png') }}" alt="bubble-images " class="w-100 img-fluid" />
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="home-hero-content">
                        <h1>LUCK<strong>RONI</strong></h1>
                        <p>Nyodok Bumbuna<span> <a href="contact.html">Enakeun Rasana</a></span></p>
                        <a class="btn menu-btn" href="#food-menu">Menu <i
                                class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="burger-img">
                        <img src="{{ asset('hotte/img/luckroni/macaroni (2).png') }}" class="w-100 img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--HOME HERO SECTION END-->

    <!--SPECIAL SECTION START-->
    <div class="special-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
                    <div class="special-img">
                        <img src="{{ asset('hotte/img/luckroni/pasta.png') }}" class="w-100" alt="" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
                    <div class="special-content text-center">
                        <div class="donut-icon m-auto">
                            <img src="{{ asset('hotte/img/donut.png') }}" class="w-100" alt="" />
                        </div>
                        <h2>
                            Acara Spesial
                            <span>Kejutan untuk kamu</span>
                        </h2>
                        <p>
                            pembelian 5x berturut-turut akan mendapatkan kejutan berupa makaroni gratis dari kami
                           
                        </p>
                        <div class="offer-info">
                            <div class="form-row justify-content-center align-items-center">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="item-price">
                                        <h3>Ayo Segera Beli</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--SPECIAL SECTION END-->

    <!--HOME SERVICES SECTION START-->
    <div class="home-services-section">
        <div class="container">
            <div class="home-services">
                <div class="form-row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="image-box clearfix">
                            <div class="box-image float-left">
                                <img src="{{ asset('hotte/img/honney.png') }}" alt="" />
                            </div>
                            <div class="image-text float-left">
                                <h2>Choose food</h2>
                                <p>It is a long establed fact will distracted readable looking at layou.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="image-box clearfix">
                            <div class="box-image float-left">
                                <img src="{{ asset('hotte/img/macaron.png') }}" alt="" />
                            </div>
                            <div class="image-text float-left">
                                <h2>place order</h2>
                                <p>It is a long establed fact will distracted readable looking at layou.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="image-box clearfix">
                            <div class="box-image float-left">
                                <img src="{{ asset('hotte/img/dinner.png') }}" alt="" />
                            </div>
                            <div class="image-text float-left">
                                <h2>Receive & go</h2>
                                <p>It is a long establed fact will distracted readable looking at layou.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SERVICES SECTION END-->

    <!--MENU SECTION START-->
    <div class="food-menu-section" id="food-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="menu-head text-center">
                        <h2>Menu di <span>Luckroni.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row food-box">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="{{ asset('hotte/img/luckroni/keju.png') }}" class="w-100" alt="" />
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2>Makroni Keju</h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="food-info text-left">
                                        <h3><span>Rp </span>2.000 - 5.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="{{ asset('hotte/img/luckroni/original.png') }}" class="w-100" alt="" />
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2>Makaroni Original</h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="food-info text-left">
                                        <h3><span>Rp </span>2.000 - 5.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="{{ asset('hotte/img/luckroni/seuhah.png') }}" class="w-100" alt="" />
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2>Makaroni Balado</h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="food-info text-left">
                                        <h3><span>Rp </span>2.000 - 5.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MENU SECTION END-->

    <!--CUSTOMER SECTION START-->
    <div class="customer-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg 12 col-xl-12">
                    <div class="customer-head text-center">
                        <h2>Some of Our Satisfied <span>Customer.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="images-position position-relative">
                    <div class="customer1-img">
                        <img src="{{ asset('hotte/img/customer1.png') }}" class="w-100 img-fluid" alt="" />
                    </div>
                    <div class="customer2-img">
                        <img src="{{ asset('hotte/img/customer2.png') }}" class="w-100 img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="testimonial-slider">
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="{{ asset('hotte/img/customer1.png') }}" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p>
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Kristyn Hairston</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="{{ asset('hotte/img/customer2.png') }}" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p>
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Antor Biswas</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="{{ asset('hotte/img/customer3.png') }}" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p>
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Marie Hairston</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="{{ asset('hotte/img/customer4.png') }}" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p>
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Hannah Hairston</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="images-position position-relative">
                    <div class="customer3-img">
                        <img src="{{ asset('hotte/img/customer3.png') }}" class="w-100 img-fluid" alt="" />
                    </div>
                    <div class="customer4-img">
                        <img src="{{ asset('hotte/img/customer4.png') }}" class="w-100 img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CUSTOMER SECTION END-->


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

    <script>
        $(".testimonial-slider").slick({
            autoplay: true,
            autoplaySpreed: 7000,
            arrows: true,
            prevArrow: '<i class="icofont-arrow-left"></i>',
            nextArrow: '<i class="icofont-arrow-right"></i>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>
</body>

<!-- Mirrored from live.envalab.com/html/hotte/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 11:50:14 GMT -->

</html>
