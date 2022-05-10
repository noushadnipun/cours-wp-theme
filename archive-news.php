<?php 
get_header();?>
<div class="container">
    <div class="news-details-page-area">
        <h2 class="text-center">News</h2>
            <div class="row">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="news-box">
                        <div class="news-img-holder">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-responsive news-event-archive" alt="">
                        </div>
                        <h3 class="title-news-left-bold">
                            <a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
                        </h3>
                        <ul class="title-bar-high news-comments">
                            <li>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                            </li>
                        </ul>
                        <p><?php excerpt(50)?></p>
                    </div>
                </div>
                 <?php endwhile; ?>
                    <?php endif;  
                    wp_reset_query(); ?> 

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <?php echo bootstrap_pagination();?>
                </div>
            </div>
            
    </div>
</div>


<?php get_footer();?>