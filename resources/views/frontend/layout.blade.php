<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/fev-icon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>newspaper</title>
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Scrollbar css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/jquery.mCustomScrollbar.css" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/owl-carousel/owl.transitions.css" />
    <!-- youtube css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/RYPP.css" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <!-- fonts css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/Pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/flaticon.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <style>
        .container-fluid {
            width: 90% !important;
        }
    </style>
</head>

<body>
    <div class="se-pre-con"></div>
    <header>
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
            <nav class="mobile-menu" id="mobile-menu">
                <div class="sidebar-nav">
                    <ul class="nav side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn mobile-menu-btn" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">All pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Home <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="home-style-one.html">Home style one</a> </li>
                                        <li><a href="home-style-two.html">Home style two</a></li>
                                        <li><a href="home-style-three.html">Home style three</a></li>
                                        <li><a href="home-style-four.html">Home style four</a></li>
                                        <li><a href="home-style-five.html">Home style five</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Categories <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="category-style-one.html">Category style one</a> </li>
                                        <li><a href="category-style-two.html">Category style two</a></li>
                                        <li><a href="category-style-three.html">Category style three</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Archive <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="archive-one.html">Archive style one</a> </li>
                                        <li><a href="archive-two.html">Archive style two</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">News <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="details-style-one.html">News post one</a> </li>
                                        <li><a href="details-style-two.html">News post two</a></li>
                                        <li><a href="details-style-three.html">News post three</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Contact <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="contact-style-one.html">Contact style one</a> </li>
                                        <li><a href="contact-style-two.html">Contact style two</a></li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li><a href="login%26registration.html">Login & Registration</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a href="#">International</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li>
                            <a href="#">Contact<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="contact-style-one.html">Contact style one</a> </li>
                                <li><a href="contact-style-two.html">Contact style two</a></li>
                            </ul>
                        </li>
                        <!-- social icon -->
                        <li>
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                                    <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="top_header_icon">
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                    </span>
                    <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                    </span>
                </div>
                <div id="showLeft" class="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- Mobile Menu End -->
        <!-- top header -->
        <div class="top_header hidden-xs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="top_header_menu_wrap">
                            <ul class="top-header-menu">
                                <li><a href="login%26registration.html">REGISTER</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="login-inner">
                                                <input type="text" class="form-control" id="name_email"
                                                    name="name_email" placeholder="username or emaile">
                                                <hr>
                                                <input type="password" class="form-control" id="pass"
                                                    name="pass" placeholder="*******">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="">Remember me</label>
                                                <button type="button" class="btn btn-lr btn-active">LOGIN</button>
                                                <button type="button" class="btn btn-lr">REGISTR</button>
                                                <div class="foeget"><a href="#">Forget username/password?</a>
                                                </div>
                                                <div class="social_icon">
                                                    <div class="social_icon_box social_icon_box_1">
                                                        <div class="icon facebook-icon"></div>
                                                        <span class="social_info">Login with facebook</span>
                                                    </div>
                                                </div>
                                                <div class="social_icon">
                                                    <div class="social_icon_box social_icon_box_2">
                                                        <div class="icon twitter-icon"></div>
                                                        <span class="social_info">Login with twitter</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-style-two.html">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--breaking news-->
                    <div class="col-sm-8 col-md-7">
                        <div class="newsticker-inner">
                            <ul class="newsticker">
                                <li><span class="color-1">Fashion</span><a href="#">Etiam imperdiet volutpat
                                        libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                                <li><span class="color-2">International</span><a href="#">Curabitur porttitor
                                        ante eget hendrerit adipiscing.</a></li>
                                <li><span class="color-3">Health</span><a href="#">Praesent ornare nisl lorem,
                                        ut condimentum lectus gravida ut.</a></li>
                                <li><span class="color-4">technology</span><a href="#">Nunc ultrices tortor eu
                                        massa placerat posuere.</a></li>
                                <li><span class="color-1">Travel</span><a href="#">Etiam imperdiet volutpat
                                        libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                            </ul>
                            <div class="next-prev-inner">
                                <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                                <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="top_header_icon">
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Facebook"><i
                                        class="fa fa-facebook"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Google"><i
                                        class="fa fa-google-plus"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                            </span>
                            <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Pintereset"><i
                                        class="fa fa-pinterest-p"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_banner_wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-sm-4">
                        <div class="header-logo">
                            <!-- logo -->
                            <a href="home-style-one.html">
                                <img class="td-retina-data img-responsive" src="{{ asset('frontend') }}/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                        <div class="header-banner">
                            <a href="#"><img class="td-retina img-responsive" src="{{ asset('frontend') }}/images/top-bannner.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- navber -->
        <div class="container-fluid hidden-xs">
            <nav class="navbar">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/" class="category01">HOME</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">INTERNATIONAL
                                <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu menu-slide">
                                <li><a href="#">Another</a></li>
                                <li class="dropdown-submenu"><a href="#">Something</a>
                                    <ul class="dropdown-menu zoomIn">
                                        <li><a href="#">Style one</a></li>
                                        <li><a href="#">Style two</a></li>
                                        <li><a href="#">Style three</a></li>
                                        <li><a href="#">Style four</a></li>
                                        <li><a href="#">Style five</a></li>
                                        <li><a href="#">Style six</a></li>
                                        <li><a href="#">Style seven</a></li>
                                    </ul>
                                </li>
                                <!--<li class="divider"></li>-->
                                <li><a href="#">Separated</a></li>
                                <li><a href="#">One more</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Separated</a></li>
                                <li><a href="#">One more</a></li>
                                <li><a href="#">Separated</a></li>
                            </ul>
                        </li>
                        <li><a href="category-style-two.html" class="category04">FASHION</a></li>
                        <li><a href="category-style-one.html" class="category05">TRAVEL</a></li>
                        <li><a href="#" class="category06">FOOD</a></li>
                        <li><a href="#" class="category07">TECHNOLOGY</a></li>
                        <li><a href="#" class="category08">LIFESTYLE</a></li>
                        <li><a href="contact-style-one.html" class="category08">CONTACT</a></li>
                    </ul>
                </div>
                <!-- navbar-collapse -->
            </nav>
        </div>
    </header>
    <!-- header news Area
        ============================================ -->

    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">RECENT NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_01.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum
                                        available</a></h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                        </ul>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                                        as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                            <!-- item-2 -->
                            <div class="item home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_02.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_sev">I</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum
                                        available</a></h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                        </ul>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                                        as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                            <!-- item-3 -->
                            <div class="item home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_03.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">There are many variations of passages of Lorem Ipsum
                                        available</a></h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                        </ul>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                                        as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rn_block">
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_04.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_05.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_nine">p</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_06.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_04.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_05.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_nine">p</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 padd">
                            <div class="home2-post">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <!-- image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="{{ asset('frontend') }}/images/recent_news_06.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --
                                            </li>
                                            <li><a title="" href="#">Oct 6, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Politics Area
                    ============================================ -->
                <section class="politics_wrapper">
                    <h3 class="category-headding ">POLITICS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide-2" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="home2-post">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/images/politics_01.jpg" class="img-responsive"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem
                                                        Ipsum available</a></h3>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="date">
                                                    <ul>
                                                        <li>By <a title="" href="#"><span>Naeem
                                                                    Khan</span></a> --</li>
                                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                        <li><a title="" href="#"><span>275
                                                                    Comments</span></a></li>
                                                    </ul>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                                    predefined chunks as necessary, making this the first true <a
                                                        href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_02.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_03.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_04.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_05.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item-2 -->
                            <div class="item">
                                <div class="row">
                                    <!-- main post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="home2-post">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/images/politics_01.jpg" class="img-responsive"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of Lorem
                                                        Ipsum available</a></h3>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="date">
                                                    <ul>
                                                        <li>By <a title="" href="#"><span>Naeem
                                                                    Khan</span></a> --</li>
                                                        <li><a title="" href="#">11 Nov 2015</a> --</li>
                                                        <li><a title="" href="#"><span>275
                                                                    Comments</span></a></li>
                                                    </ul>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                                    predefined chunks as necessary, making this the first true <a
                                                        href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- right side post -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="row rn_block">
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_02.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_03.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_04.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                <div class="home2-post">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/politics_05.jpg" class="img-responsive"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2 pedestrians in
                                                                Banani</a></h5>
                                                        <div class="date">
                                                            <ul>
                                                                <li><a title="" href="#"><span>Naeem
                                                                            Khan</span></a> --</li>
                                                                <li><a title="" href="#">Oct 6, 2016</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.Politics -->
                <div class="ads">
                    <a href="#"><img src="{{ asset('frontend') }}/images/top-bannner2.jpg" class="img-responsive center-block"
                            alt=""></a>
                </div>


            </div>
            <!-- /.left content inner -->
            <div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..."
                        name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                <!-- social icon -->
                <h3 class="category-headding ">SOCIAL PIXEL</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span>
                            </a>
                        </li>
                        <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a>
                        </li>
                        <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a>
                        </li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a>
                        </li>
                    </ul>
                </div>
                <!-- /.social icon -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="{{ asset('frontend') }}/images/ad-banner.jpg" class="img-responsive center-block"
                            alt=""></a>
                </div>
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">POPULAR</a></li>
                        <li><a href="#">MOST VIEWED</a></li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            <div class="box-item wow fadeIn" data-wow-duration="1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_01.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                        <a href="#">SPORTS</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that
                                            a
                                            reader will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_02.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is
                                            therefore</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_03.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum
                                            used since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_04.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free
                                            from</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                        <div class="tab-item-inner">
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_01.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-5">
                                        <a href="#">BUSINESS</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that
                                            a
                                            reader will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_02.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                        <a href="#">TECHNOLOGY </a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is
                                            therefore</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_03.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                        <a href="#">HEALTH</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum
                                            used since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('frontend') }}/images/popular_news_04.jpg" alt="" height="80"
                                            width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                        <a href="#">FASHION</a>
                                    </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free
                                            from</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <!-- / tab -->
                <!-- comments -->
                <div class="latest-comments-inner">
                    <h3 class="category-headding ">LATEST COMMENT</h3>
                    <div class="headding-border"></div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="{{ asset('frontend') }}/images/comment-01.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="{{ asset('frontend') }}/images/comment-02.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>
    <!-- container-fluid end -->

    <!-- second content -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="row">
                        <!-- business Area
                            ============================================ -->
                        <div class="col-sm-6 col-md-6">
                            <div class="buisness">
                                <h3 class="category-headding ">BUSINESS</h3>
                                <div class="headding-border bg-color-5"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem
                                            Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{ asset('frontend') }}/images/business-01.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                        </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true <a
                                            href="#">Read more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/business-02.jpg" alt="" height="70"
                                                width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/business-03.jpg" alt="" height="70"
                                                width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- international Area
                            ============================================ -->
                        <div class="col-sm-6 col-md-6">
                            <div class="international">
                                <h3 class="category-headding ">INTERNATIONAL</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">There are many variations of passages of Lorem
                                            Ipsum available</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="{{ asset('frontend') }}/images/international.jpg" class="img-responsive"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13
                                        </div>
                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary, making this the first true <a
                                            href="#">Read more...</a></p>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/international-2.jpg" alt="" height="70"
                                                width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('frontend') }}/images/international-3.jpg" alt="" height="70"
                                                width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h3 class="td-module-title"><a href="#">Lorem Ipum therefore
                                                always free from repetition</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                13 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.international -->
                        </div>
                    </div>
                    <!-- technology Area
                        ============================================ -->
                    <section class="politics_wrapper">
                        <h3 class="category-headding ">TECHNOLOGY</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-3" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages
                                                        of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/images/technology/tecnology-01.jpg"
                                                            class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                        13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to
                                                    repeat predefined chunks as necessary, making this the
                                                    first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-02.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-03.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-04.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.5s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-05.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item-2 -->
                                <div class="item">
                                    <div class="row">
                                        <!-- left side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages
                                                        of Lorem Ipsum available</a></h3>
                                                <!-- post image -->
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/images/technology/tecnology-01.jpg"
                                                            class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-title-author-details">
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                        13 </div>
                                                </div>
                                                <p>All the Lorem Ipsum generators on the Internet tend to
                                                    repeat predefined chunks as necessary, making this the
                                                    first true <a href="#">Read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- right side post -->
                                        <div class="col-sm-6 col-md-6">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-02.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-03.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.3s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-04.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                    <!-- post image -->
                                                    <div class="post-thumb wow fadeIn" data-wow-duration="1s"
                                                        data-wow-delay="0.4s">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend') }}/images/technology/tecnology-05.jpg"
                                                                class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <!-- post image -->
                                                        <h5><a href="#">Microbus runs over 2
                                                                pedestrians in Banani</a></h5>
                                                        <div class="post-editor-date">
                                                            <!-- post date -->
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                                            </div>
                                                            <!-- post comment -->
                                                            <div class="post-author-comment"><i
                                                                    class="pe-7s-comment"></i> 13 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </section>
                </div>
                <!-- second content aside -->
                <div class="col-md-4 col-sm-4 left-padding">
                    <aside>
                        <!-- online vote -->
                        <div class="online-vote">
                            <h3 class="category-headding ">ONLINE VOTE</h3>
                            <div class="headding-border"></div>
                            <div class="vote-inner">
                                <p>All the Lorem Ipsum generators the Internet tend repeat predefined chunks
                                    as necessary, making this the first true Internet. </p>
                                <div class="radio-btn">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">Yes</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">No</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">No comment</label>
                                </div>
                                <button type="button" class="btn btn-style">Success</button>
                            </div>
                        </div>
                        <!-- /.online vote -->
                        <!-- social icon -->
                        <h3 class="category-headding ">SOCIAL PIXEL</h3>
                        <div class="headding-border"></div>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i
                                            class="fa  fa-facebook"></i><span>3987</span> </a></li>
                                <li><a href="#" class="twitter"><i
                                            class="fa  fa-twitter"></i><span>3987</span></a></li>
                                <li><a href="#" class="google"><i
                                            class="fa  fa-google-plus"></i><span>3987</span></a></li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span>
                                    </a></li>
                            </ul>
                        </div>
                        <!-- /.social icon -->
                        <!-- video -->
                        <div class="video-headding">Streaming Videos</div>
                        <div id="rypp-demo-4" class="RYPP r16-9"
                            data-playlist="PLw8TejMbmHM6IegrJ4iECWNoFuG7RiCV_">
                            <div class="RYPP-video">
                                <div class="RYPP-video-player">
                                    <!-- Will be replaced -->
                                </div>
                            </div>
                            <div class="RYPP-playlist">
                                <header>
                                    <h2 class="_h1 RYPP-title">Playlist title</h2>
                                    <p class="RYPP-desc">Playlist subtitle <a href="#"
                                            target="_blank">#hashtag</a></p>
                                </header>
                                <div class="RYPP-items"></div>
                            </div>
                        </div>
                        <!-- /.video -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- second content end -->
    <!-- Video News Area
        ============================================ -->
    <section class="video-post-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="category-headding ">VIDEO POST</h3>
                    <div class="headding-border"></div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="{{ asset('frontend') }}/images/video-02.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="{{ asset('frontend') }}/images/comment-02.jpg" class="img-responsive" alt="">
                                    </li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="{{ asset('frontend') }}/images/video-03.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="{{ asset('frontend') }}/images/comment-01.jpg" class="img-responsive" alt="">
                                    </li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post-style1">
                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <!-- post image -->
                            <a href="#" class="video-img-icon">
                                <i class="fa fa-play"></i>
                                <img src="{{ asset('frontend') }}/images/video-04.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <!-- post title -->
                        <h3><a href="#">There are many variations of passages of.</a></h3>
                        <div class="post-title-author-details">
                            <div class="date">
                                <ul>
                                    <li><img src="{{ asset('frontend') }}/images/comment-02.jpg" class="img-responsive" alt="">
                                    </li>
                                    <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                    <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                    <li><a title="" href="#"><span>275 Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Article Post
        ============================================ -->
    <section class="article-post-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="articale-list">
                        <h3 class="category-headding ">Latest News</h3>
                        <div class="headding-border"></div>
                        <!--Post list-->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-11.jpg" alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">It uses a dictionary of over 200 Latin words,
                                        combined with</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-01.jpg" class="img-responsive"
                                                alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!--Post list-->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-12.jpg" alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">Lorem Ipsum is simply dummy text of the
                                        printing
                                        .</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-02.jpg" class="img-responsive"
                                                alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!-- Post list -->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-13.jpg" alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">If you are going to use a passage of Lorem
                                        Ipsum
                                        .</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-01.jpg" class="img-responsive"
                                                alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!-- Post list -->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-14.jpg" alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">Check Out the Amazing Photos of Lauren
                                        Conradâ€™s
                                        Trip</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-02.jpg" class="img-responsive"
                                                alt="">
                                        </li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                        <!-- Post list -->
                        <div class="post-style2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <a href="#"><img src="{{ asset('frontend') }}/images/category/category-post-15.jpg" alt=""></a>
                            <div class="post-style2-detail">
                                <h3><a href="#" title="">Many desktop publishing packages and web
                                        page.</a></h3>
                                <div class="date">
                                    <ul>
                                        <li><img src="{{ asset('frontend') }}/images/comment-01.jpg" class="img-responsive"
                                                alt=""></li>
                                        <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                                <button type="button" class="btn btn-style">Reade more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 left-padding">
                    <!-- online vote -->
                    <div class="online-vote">
                        <h3 class="category-headding ">ONLINE VOTE</h3>
                        <div class="headding-border"></div>
                        <div class="vote-inner">
                            <p>All the Lorem Ipsum generators the Internet tend repeat predefined chunks as necessary,
                                making this the . </p>
                            <div class="radio-btn">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">No</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">No comment</label>
                            </div>
                            <button type="button" class="btn btn-style">Success</button>
                        </div>
                    </div>
                    <!-- /.online vote -->
                    <!-- slider widget -->
                    <div class="widget-slider-inner">
                        <h3 class="category-headding ">Slider Widget</h3>
                        <div class="headding-border"></div>
                        <div id="widget-slider" class="owl-carousel owl-theme">
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-1.jpg" alt=""></a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders...</p>
                            </div>
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-2.jpg" alt=""></a>
                                <h4><a href="#">Dog invason sparks chaos at IPL match</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                            </div>
                            <!-- widget item -->
                            <div class="item">
                                <a href="#"><img src="{{ asset('frontend') }}/images/slider-widget-3.jpg" alt=""></a>
                                <h4><a href="#">For good results must be make good plan</a></h4>
                                <div class="date">
                                    <ul>
                                        <li>By<a title="" href="#"><span>Jone Kilna</span></a> --</li>
                                        <li><a title="" href="#">Oct 6, 2016</a></li>
                                    </ul>
                                </div>
                                <p>Dhaka: Dhaka Metropolitan Sessions a Judge Court on Wednesday issued warrants for the
                                    arrest of 29 BNP leaders, including some ina senior leaders ...</p>
                            </div>
                        </div>
                    </div>
                    <!-- twitter feed -->
                    <h3 class="category-headding ">TWITTER FEED</h3>
                    <div class="headding-border"></div>
                    <div class="feed-inner">
                        <p>It is a long established fact that a reader will be distracted by the.</p>
                        <div class="feed-footer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                            <span class="feed-date">2 hours ago</span>
                        </div>
                        <hr>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        <div class="feed-footer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                            <span class="feed-date">2 hours ago</span>
                        </div>
                        <hr>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is.</p>
                        <div class="feed-footer">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
                            <span class="feed-date">2 hours ago</span>
                        </div>
                    </div>
                    <!-- /.twitter feed -->
                </div>
            </div>
        </div>
    </section>
    <!-- pagination
        ============================================ -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <ul class="pagination">
                    <li>
                        <a href="#" class="prev">
                            <i class="pe-7s-angle-left"></i>
                        </a>
                    </li>
                    <li> <a href="#">1</a></li>
                    <li> <a href="#" class="active">2</a></li>
                    <li> <a href="#">3</a></li>
                    <li> <a href="#">4</a></li>
                    <li> ... </li>
                    <li> <a href="#">15</a></li>
                    <li>
                        <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <div class="banner">
                    <img src="{{ asset('frontend') }}/images/top-bannner2.jpg" class="img-responsive center-block" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- footer Area
        ============================================ -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-box footer-logo-address">
                        <!-- address  -->
                        <img src="{{ asset('frontend') }}/images/footer-logo.png" class="img-responsive" alt="">
                        <address>
                            14L.E Goulburn St, Sydney 2000NSW
                            <br> Tell: 01922296392
                            <br> Email: bdtask@gmail.com
                        </address>
                    </div>
                    <!-- /.address  -->
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-box">
                                <h3 class="category-headding">categories</h3>
                                <div class="headding-border bg-color-4"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Newsletter</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Pressroom</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Advertise online</a>
                                    </li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Language</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Being Part</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-box">
                                <h3 class="category-headding">POPULAR CATEGORY</h3>
                                <div class="headding-border bg-color-5"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Digital Edition</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Site Map</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">About Ads</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">Give a Gift</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-box">
                        <!-- featured news -->
                        <h3 class="category-headding ">FEATURED NEWS</h3>
                        <div class="headding-border bg-color-2"></div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb"
                                        src="{{ asset('frontend') }}/images/popular_news_01.jpg" alt="" height="80"
                                        width="100"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-1">
                                    <a href="#">SPORTS</a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">It is a long established fact that a
                                        reader will</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="img-thumb">
                                <a href="#" rel="bookmark"><img class="entry-thumb"
                                        src="{{ asset('frontend') }}/images/popular_news_02.jpg" alt="" height="80"
                                        width="100"></a>
                            </div>
                            <div class="item-details">
                                <h6 class="sub-category-title bg-color-2">
                                    <a href="#">TECHNOLOGY </a>
                                </h6>
                                <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is
                                        therefore</a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.featured news -->
                </div>
            </div>
        </div>
    </footer>
    <div class="sub-footer">
        <!-- sub footer -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p><a href="#" class="color-1">bdtask</a> Theme | All right Reserved 2016</p>
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                            <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                            <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.sub footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/metisMenu.min.js"></script>
    <!-- Scrollbar js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- animate js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <!-- Newstricker js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.newsTicker.js"></script>
    <!--  classify JavaScript -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/classie.js"></script>
    <!-- owl carousel js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/owl-carousel/owl.carousel.js"></script>
    <!-- youtube js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/RYPP.js"></script>
    <!-- jquery ui js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
    <!-- form -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/form-classie.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/custom.js"></script>
</body>


</html>
