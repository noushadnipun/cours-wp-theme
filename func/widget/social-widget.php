<?php

class riptware_social_widget extends WP_Widget {

    public function __construct() {

    	parent::__construct('tritiyo_popular_post_tab_widget', 'Social Link', array(
            'description' => 'Social Link',
    	));
    }

    public function widget($args, $instance) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
        
        // This is where you run the code and display the output
        //echo __( 'Hello, World!', 'wpb_widget_domain' );
    ?>
     <?php    
      global $options; 
      $options= get_option ('my_framework');
    ?>





<ul class="footer-social">
    <?php if($options['fb-page-link']){?>
        <li><a href="<?php echo $options['fb-page-link'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if($options['fb-group-link']){?>
        <li><a href="<?php echo $options['fb-group-link'];?>"><i class="fa fa-users" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if($options['yt-link']){?>
        <li><a href="<?php echo $options['yt-link'];?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    <?php } ?>
    <?php if($options['linkedin-link']){?>
        <li><a href="<?php echo $options['linkedin-link'];?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <?php } ?>
</ul>
<?php
    echo $args['after_widget'];
    } // end widget function





    // Widget Backend
public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }
    else {
        $title = __( 'Connect us', 'wpb_widget_domain' );
    }
// Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
}

} // end Class





//call Function
function riptware_social_widget_func() {
	register_widget('riptware_social_widget');
}
add_action('widgets_init' , 'riptware_social_widget_func');

?>