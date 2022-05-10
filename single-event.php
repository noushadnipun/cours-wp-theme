<?php get_header();?>
<div class="container">
    <div class="news-details-page-area">
        <h2 class=""><?php echo get_the_title();?></h2>
        <ul class="event-info-inline title-bar-sm-high">
            <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_field('date_of_event')?></li>
            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_field('time_of_event');?></li>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo get_field('place_of_event');?></li>
        </ul>
        <p><?php echo get_the_content();?> </p>
    </div>
</div>



<?php get_footer();?>