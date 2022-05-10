<?php 
    global $options;
    $options = get_option('my_framework');
?>
        <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <?php  dynamic_sidebar('footer_widget');?>
                        <?php /*
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <a href="index-2.html"><img class="img-responsive" src="img/logo-footer.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>Praesent vel rutrum purus. Nam vel dui eu sus duis dignissim dignissim. Suspenetey disse at ros tecongueconsequat.Fusce sit amet rna feugiat.</p>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <h3>Featured Links</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                            <li><a href="#">Graduation</a></li>
                                            <li><a href="#">Admissions</a></li>
                                            <li><a href="#">International</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="#">Courses</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Book store</a></li>
                                            <li><a href="#">Alumni</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <h3>Information</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone(01)800433633.html"> (01) 800 433 633 </a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="https://www.radiustheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6900070f06290b061a1d06070c08470a0604">[email&#160;protected]</a></li>
                                </ul>
                                <div class="newsletter-area">
                                    <h3>Newsletter</h3>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" placeholder="Enter your e-mail here" class="form-control">
                                        <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                </button>  
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box">
                                <h3>Flickr Photos</h3>
                                <ul class="flickr-photos">
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/1.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/2.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/3.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/4.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/5.jpg" alt="flickr"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img class="img-responsive" src="img/footer/6.jpg" alt="flickr"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        */ ?>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <p>
                                <?php echo $options['copyright-text'];?>
                            </p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    
    <script src="<?php assets();?>/js/jquery-2.2.4.min.js" type="text/javascript"></script>

    <!-- Bootstrap js -->
    <script src="<?php assets();?>/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Nivo slider js -->
    <script src="<?php assets();?>/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php assets();?>/vendor/slider/home.js" type="text/javascript"></script>

    <!-- Meanmenu Js -->
    <script src="<?php assets();?>/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="<?php assets();?>/js/jquery.scrollUp.min.js" type="text/javascript"></script>

    <!-- WOW JS -->
    <script src="<?php assets();?>/js/wow.min.js"></script>

    <?php /*
        <!-- Owl Cauosel JS -->
    <script src="<?php assets();?>/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- jquery.counterup js -->
    <script src="<?php assets();?>/js/jquery.counterup.min.js"></script>
    <script src="<?php assets();?>/js/waypoints.min.js"></script>
        <!-- Plugins js -->
    <script src="<?php assets();?>/js/plugins.js" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="<?php assets();?>/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="<?php assets();?>/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="<?php assets();?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="<?php assets();?>/js/jquery.gridrotator.js" type="text/javascript"></script>
     */ ?>
    <!-- Custom Js -->
    <script src="<?php assets();?>/js/main.js?<?php echo rand(0,999);?>" type="text/javascript"></script>

    <script>
         /*-------------------------------------
     jQuery MeanMenu activation code
     --------------------------------------*/
    $('nav#dropdown').meanmenu({ siteLogo: "<a href='<?php echo home_url();?>' class='logo-mobile-menu'><img style='width: 190px;' src='<?php echo $options['upload-logo']['url']?>' /></a>" });
    </script>
    <?php wp_footer();?>
</body>


</html>