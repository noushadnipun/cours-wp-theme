<!doctype html>
<?php 
    global $options;
    $options = get_option('my_framework');
?>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CoURS| Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="<?php assets();?>/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="<?php assets();?>/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php assets();?>/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?php assets();?>/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php assets();?>/vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/hover-min.css">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/reImageGrid.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/style.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css"> 
    <script src="<?php assets();?>/js/modernizr-2.8.3.min.js"></script>
    <?php wp_head();?>
</head>

<body>
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header4-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <div class="header-top-left">
                                    <div class="logo-area">
                                        <a href="<?php echo home_url();?>">
                                            <img class="img-responsive" src="<?php echo $options['upload-logo']['url'] ?>" alt="logo">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                <div class="header-top-right">
                                    <ul>
                                        <?php if($options['phone']) : ?>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:<?php echo $options['phone']; ?>"> <?php echo $options['phone']; ?> </a></li>
                                        <?php endif;?>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span class="__cf_email__"><?php echo $options['email']; ?></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-primary" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                <nav id="desktop-nav">
                                     <?php
                                    wp_nav_menu( array(
                                            'theme_location'  => 'primary',
                                            'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                            'container'       => 'ul',
                                            'container_class' => 'collapse navbar-collapse',
                                            'container_id'    => '',
                                            'menu_class'      => '',
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker(),
                                        ) );
                                    ?>
                                    <?php /*
                                    <ul>
                                        <li class="active"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                                <li class="active"><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="mega-menu-area">
                                                <li>
                                                    <a href="about1.html">About 1</a>
                                                    <a href="about2.html">About 2</a>
                                                    <a href="about3.html">About 3</a>
                                                    <a href="about4.html">About 4</a>
                                                </li>
                                                <li>
                                                    <a href="lecturers1.html">lecturers 1</a>
                                                    <a href="lecturers2.html">lecturers 2</a>
                                                    <a href="single-lecturers.html">lecturers Details</a>
                                                    <a href="pricing1.html">Pricing Plan 1</a>
                                                </li>
                                                <li>
                                                    <a href="pricing2.html">Pricing Plan 2</a>
                                                    <a href="shop1.html">Shop 1</a>
                                                    <a href="shop2.html">Shop 2</a>
                                                    <a href="single-shop.html">Shop Details</a>
                                                </li>
                                                <li>
                                                    <a href="account.html">Account</a>
                                                    <a href="registration.html">Registration</a>
                                                    <a href="faq.html">Faq</a>
                                                    <a href="404.html">404 Error</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Courses</a>
                                            <ul>
                                                <li><a href="courses1.html">Courses 1</a></li>
                                                <li><a href="courses2.html">Courses 2</a></li>
                                                <li><a href="courses3.html">Courses 3</a></li>
                                                <li><a href="single-courses1.html">Course Details 1</a></li>
                                                <li><a href="single-courses2.html">Course Details 2</a></li>
                                                <li><a href="single-courses3.html">Course Details 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul>
                                                <li><a href="research1.html">Research 1</a></li>
                                                <li><a href="research2.html">Research 2</a></li>
                                                <li><a href="research3.html">Research 3</a></li>
                                                <li><a href="single-research.html">Research Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul>
                                                <li class="has-child-menu"><a href="#">News</a>
                                                    <ul class="thired-level">
                                                        <li><a href="news1.html">News 1</a></li>
                                                        <li><a href="news2.html">News 2</a></li>
                                                        <li><a href="single-news.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-child-menu"><a href="#">Event</a>
                                                    <ul class="thired-level">
                                                        <li><a href="event.html">Event</a></li>
                                                        <li><a href="single-event.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="gallery1.html">Gallery 1</a></li>
                                                <li><a href="gallery2.html">Gallery 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a>
                                            <ul>
                                                <li><a href="contact1.html">Contact 1</a></li>
                                                <li><a href="contact2.html">Contact 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    */ ?>
                                </nav>
                            </div>
                            <?php /*
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="header-search">
                                    <form>
                                        <input type="text" class="search-form" placeholder="Search...." required="">
                                        <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </form>
                                </div>
                            </div>
                            */ ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <?php
                                    wp_nav_menu( array(
                                            'theme_location'  => 'primary',
                                            'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                            'container'       => 'ul',
                                            'container_class' => 'collapse navbar-collapse',
                                            'container_id'    => 'main-nav-container',
                                            'menu_class'      => 'nav navbar-nav',
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker(),
                                        ) );
                                    ?>
                                <?php /*    
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                                <li><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about1.html">About 1</a></li>
                                                <li><a href="about2.html">About 2</a></li>
                                                <li><a href="about3.html">About 3</a></li>
                                                <li><a href="about4.html">About 4</a></li>
                                                <li><a href="lecturers1.html">lecturers 1</a></li>
                                                <li><a href="lecturers2.html">lecturers 2</a></li>
                                                <li><a href="single-lecturers.html">lecturers Details</a></li>
                                                <li><a href="pricing1.html">Pricing Plan 1</a></li>
                                                <li><a href="pricing2.html">Pricing Plan 2</a></li>
                                                <li><a href="shop1.html">Shop 1</a></li>
                                                <li><a href="shop2.html">Shop 2</a></li>
                                                <li><a href="single-shop.html">Shop Details</a></li>
                                                <li><a href="account.html">Account</a></li>
                                                <li><a href="registration.html">Registration</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Courses</a>
                                            <ul>
                                                <li><a href="courses1.html">Courses 1</a></li>
                                                <li><a href="courses2.html">Courses 2</a></li>
                                                <li><a href="courses3.html">Courses 3</a></li>
                                                <li><a href="single-courses1.html">Course Details 1</a></li>
                                                <li><a href="single-courses2.html">Course Details 2</a></li>
                                                <li><a href="single-courses3.html">Course Details 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul>
                                                <li><a href="research1.html">Research 1</a></li>
                                                <li><a href="research2.html">Research 2</a></li>
                                                <li><a href="research3.html">Research 3</a></li>
                                                <li><a href="single-research.html">Research Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul>
                                                <li class="has-child-menu"><a href="#">News</a>
                                                    <ul class="thired-level">
                                                        <li><a href="news1.html">News 1</a></li>
                                                        <li><a href="news2.html">News 2</a></li>
                                                        <li><a href="single-news.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-child-menu"><a href="#">Event</a>
                                                    <ul class="thired-level">
                                                        <li><a href="event.html">Event</a></li>
                                                        <li><a href="single-event.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="gallery1.html">Gallery 1</a></li>
                                                <li><a href="gallery2.html">Gallery 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a>
                                            <ul>
                                                <li><a href="contact1.html">Contact 1</a></li>
                                                <li><a href="contact2.html">Contact 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    */ ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>