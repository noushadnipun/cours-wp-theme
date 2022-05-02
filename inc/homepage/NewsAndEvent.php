<!-- News and Event Area Start Here -->
<div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area">
                <h2 class="title-default-left">Latest News</h2>
                <ul class="news-wrapper">
                <?php 
                $newsitems = new WP_Query(array(
                'post_type' => 'news',
                'posts_per_page' => '3',
                'order' => 'DESC'
                ));
                if ($newsitems->have_posts()) :
                    while ($newsitems->have_posts()) : $newsitems->the_post(); ?>
                    <li>
                        <div class="news-img-holder">
                            <a href="<?php the_permalink();?>">
                            <img src="<?php the_post_thumbnail_url();?>" class="img-responsive news-event" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h3>
                            <div class="post-date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div>
                            <p><?php excerpt(15)?></p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif;  
                    wp_reset_query(); ?> 
                </ul>
                <div class="news-btn-holder">
                    <a href="#" class="view-all-accent-btn">View All</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 news-inner-area">
                <h2 class="title-default-left">Upcoming Events</h2>
                <ul class="news-wrapper">
                    <?php 
                    $eventitem = new WP_Query(array(
                    'post_type' => 'event',
                    'posts_per_page' => '3',
                    'order' => 'DESC'
                    ));
                    if ($eventitem->have_posts()) :
                        while ($eventitem->have_posts()) : $eventitem->the_post(); ?>
                        <li>
                            <div class="news-img-holder">
                                <a href="<?php the_permalink();?>">
                                <img src="<?php the_post_thumbnail_url();?>" class="img-responsive news-event" alt="news"></a>
                            </div>
                            <div class="news-content-holder">
                                <h3><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h3>
                                <div class="post-date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div>
                                <p><?php excerpt(15)?></p>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php endif;  
                        wp_reset_query(); ?> 
                </ul>
                <div class="news-btn-holder">
                    <a href="#" class="view-all-primary-btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News and Event Area End Here -->