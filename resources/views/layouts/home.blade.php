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
                            <img src="{{ asset('hotte/img/logo.png') }}" class="w-100 img-fluid" alt="" />
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
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="singlepost.html">Single Post</a>
                                    <a class="dropdown-item" href="error.html">404_Error</a>
                                </div>
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
                        <h1>Take <strong>Food</strong> & <strong>Let’s</strong> <span>Go.</span></h1>
                        <p>Have any food on your mind?<span> <a href="contact.html">Just order now!</a></span></p>
                        <a class="btn menu-btn" href="#food-menu">Today's Menu <i
                                class="icofont-double-right"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="burger-img">
                        <img src="{{ asset('hotte/img/burger1.png') }}" class="w-100 img-fluid" alt="" />
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
                        <img src="{{ asset('hotte/img/Todayspecialimg.png') }}" class="w-100" alt="" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
                    <div class="special-content text-center">
                        <div class="donut-icon m-auto">
                            <img src="{{ asset('hotte/img/donut.png') }}" class="w-100" alt="" />
                        </div>
                        <h2>
                            Today’s Special
                            <span>Surprise For You</span>
                        </h2>
                        <p>
                            It is a long established fact that a will distracted readable content of a page when looking
                            at its the layout using Lorem Ipsum is that it has a normal distribution
                            <span> as opposed to using making it look like.</span>
                        </p>
                        <div class="offer-info">
                            <div class="form-row justify-content-center align-items-center">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="item-price">
                                        <h3><span>$</span>89.00</h3>
                                        <span><i class="icofont-clock-time"></i> 25 min away</span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="item-number">
                                        <div class="item-quantity">
                                            <button><i class="icofont-plus"></i></button>
                                            <span>02</span>
                                            <button><i class="icofont-minus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <a href="#" class="btn order-btn">Order Now</a>
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
                        <h2>Regular Menu’s of <span>Hotte.</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but majority have suffered
                            alteration injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row food-box">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="{{ asset('hotte/img/food1.png') }}" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2>Chicken Burger</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3><span>$</span>89.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="{{ asset('hotte/img/food2.png') }}" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2>Special Beef Burger</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3><span>$</span>95.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="{{ asset('hotte/img/food3.png') }}" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2>Chicken Fry Pack</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3><span>$</span>74.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order Now</a>
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


    <!--FOOTER TOP SECTION START-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="footer-top-content">
                        <div class="logo">
                            <img src="img/logo.png" class="w-100 img-fluid" alt="" />
                        </div>
                        <p>If you are going to use a passage of need to be sure there isn't anything hidden in the
                            middle text.</p>
                        <span>If you are going to use a passage of need to be sure there isn't</span>
                        <ul class="social-icon-list">
                            <li>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </li>
                            <li class="social-icon custom-icon-pinterest">
                                <a href="#"><i class="icofont-pinterest"></i></a>
                            </li>
                            <li class="social-icon custom-icon-dribbble">
                                <a href="#"><i class="icofont-dribbble"></i></a>
                            </li>
                            <li class="social-icon custom-icon-twitter">
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="contact-content">
                        <h3>Contact Us</h3>
                        <img src="img/border.png" alt="" />
                        <div class="contact-info d-flex align-items-center">
                            <div class="icon"><i class="icofont-phone"></i></div>
                            <div class="info">
                                <a href="#">+880 659 468</a>
                                <a href="#">02 697 86456</a>
                            </div>
                        </div>
                        <div class="contact-info d-flex align-items-center">
                            <div class="icon"><i class="icofont-email"></i></div>
                            <div class="info">
                                <a href="#">support@gmail.com</a>
                                <a href="#">hotte24@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-info d-flex align-items-center">
                            <div class="icon"><i class="icofont-google-map"></i></div>
                            <div class="info">
                                <a href="#">855 Road, Brooklyn Street New York 600, Wisconsin(WI)</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                    <div class="opening-hours">
                        <div class="opening-content">
                            <h3>Opening Hours:</h3>
                            <div class="row mt-4">
                                <div class="col-4 mt-2">
                                    <span>Sunday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line2.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span class="closeing-day">Closeing Day</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span>Monday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line2.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span>8AM - 10PM</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span>Tuesday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line2.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span>8AM - 10PM</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span>Wednesday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line2.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span>8AM - 10PM</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span class="custom-date-span">Thursday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line3.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span class="custom-date-span">8AM - 10PM</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span>Friday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line2.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span>8AM - 10PM</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <span>Saturday</span>
                                </div>
                                <div class="col-4 mt-2">
                                    <img src="img/line2.png" alt="" />
                                </div>
                                <div class="col-4 mt-2">
                                    <span>8AM - 10PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER TOP SECTION END-->

    <!--FOOTER BOTTOM START-->
    <div class="footer-bootom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="copyright-txt">
                        <p>Copyright 2020. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="terms">
                        <span><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER BOTTOM END-->

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
