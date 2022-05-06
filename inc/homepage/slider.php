 <!-- Slider 1 Area Start Here -->
<div class="slider1-area coverlay-default">
     <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides home_slider">
        <?php 
        $slideritems = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => '-1',
        ));
        if ($slideritems->have_posts()) :
            while ($slideritems->have_posts()) : $slideritems->the_post(); ?>
                <img class="tryover" src="<?php the_post_thumbnail_url();?>" alt="slider" title="#<?php echo get_the_ID();?>" />
            <?php endwhile; ?>
        <?php endif;  
        wp_reset_query(); ?> 
        </div>


        <?php 
        if ($slideritems->have_posts()) : while ($slideritems->have_posts()) : $slideritems->the_post(); ?>
        <div id="<?php echo get_the_ID();?>" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="title-container s-tb-c">
                    <!-- <div class="title1"><?php //echo get_the_title();?></div> -->
                    <p><?php echo get_the_content(); ?> </p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif;  
        wp_reset_query(); ?> 
    </div>

</div>