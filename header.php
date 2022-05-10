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
    <title>
       <?php      
        if (is_home()) { 

            bloginfo('name'); echo ' | '; bloginfo('description'); 

          } else { 

            wp_title('');
             echo ' | ';
            bloginfo('name');

          }
        ?>  
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $options['upload-favicon']['url'];?>">
     <?php /*
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/bootstrap.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="<?php assets();?>/css/font-awesome.min.css">
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
     <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/animate.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="<?php assets();?>/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php assets();?>/vendor/OwlCarousel/owl.theme.default.min.css">
   
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php assets();?>/css/style.css">
 */ ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css?<?php echo rand(0,999);?>"> 
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
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12  my-auto">
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
                                </nav>
                            </div>
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
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>