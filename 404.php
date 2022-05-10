<?php 
get_header();
?>

<div class="error-page-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="error-top">
                    <img src="<?php echo $options['upload-logo']['url'] ?>" class="img-responsive" alt="404">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="error-bottom">
                    <h2>Sorry!!! Page Was Not Found</h2>
                    <p>The page you are looking is not available or has been removed. Try going to Home Page by using the button below.</p>
                    <a href="<?php echo home_url();?>" class="default-white-btn">Go To Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>