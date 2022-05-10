<?php 
 $newsitems = new WP_Query(array(
                'post_type' => 'news',
                'posts_per_page' => '3',
                'order' => 'DESC'
            ));
 $eventitem = new WP_Query(array(
                'post_type' => 'event',
                'posts_per_page' => '3',
                'order' => 'DESC'
                ));

if ($eventitem->have_posts()) {
    $newsCol = '6';
 }else {
     $newsCol = '12';
 }
?>

<!-- News and Event Area Start Here -->
<div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-<?php echo  $newsCol;?> col-lg-<?php echo  $newsCol;?> col-md-<?php echo  $newsCol;?> col-sm-12 news-inner-area">
                <h2 class="title-default-left">Latest News</h2>
                <ul class="news-wrapper">
                <?php 
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
                    <a href="<?php echo home_url() ?>/?post_type=news" class="view-all-accent-btn">View All</a>
                </div>
            </div>
            <?php  if ($eventitem->have_posts()) : ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 event-inner-area">
                <h2 class="title-default-left">Upcoming Events</h2>

                <ul class="event-wrapper">
                    <?php 
                        while ($eventitem->have_posts()) : $eventitem->the_post(); ?>
                    <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <div class="event-calender-wrapper">
                            <div class="event-calender-holder">
                                <?php 
                                $exDate =  explode(' ', get_field('date_of_event'))?>
                                <h3><?php echo str_replace(',', '',$exDate[1]);?></h3>
                                <p><?php echo $exDate[0];?></p>
                                <span><?php echo $exDate[2];?></span>
                            </div>
                        </div>
                        <div class="event-content-holder">
                            <h3><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h3>
                            <p><?php excerpt(30)?></p>
                            <ul>
                                <?php if(get_field('time_of_event')): ?>
                                    <li><?php echo get_field('time_of_event');?></li>
                                <?php endif;?>
                                <?php if(get_field('place_of_event')): ?>
                                    <li><?php echo get_field('place_of_event');?></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </li>
                    <?php endwhile;
                    wp_reset_query(); ?> 
                </ul>

                <?php /*
                <ul class="news-wrapper">
                    <?php 
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
                        <?php endwhile;
                        wp_reset_query(); ?> 
                </ul>
                */ ?>
                <div class="event-btn-holder">
                    <a href="<?php echo home_url() ?>/?post_type=event" class="view-all-primary-btn">View All</a>
                </div>
            </div>
           <?php endif; ?>
        </div>
    </div>
</div>
<!-- News and Event Area End Here -->