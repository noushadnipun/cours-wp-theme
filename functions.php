<?php 

function aftertheme_default_functions() {
    
    // Add Title Tag   
    add_theme_support ('title-tag');
	add_theme_support ('post-thumbnails');
    add_theme_support('html5', ['gallery', 'caption']);
	add_post_type_support('page', 'excerpt');
		
	//excerpt
	function excerpt($limit){
		$content = preg_replace("/<img(.*?)>/si", "", get_the_content());
		$post_content = wp_trim_words(get_the_content(), $limit);
		$post_content = apply_filters('the_content', $post_content);
		$post_content = str_replace(']]>',']]&gt;', $post_content);
		$post_content = explode(" " , $content);
		$less_content = array_slice ($post_content, 0, $limit);
		//echo implode (" ", $less_content);
		echo wp_trim_words(get_the_content(), $limit);
	}	
	function tnews_custom_excerpt_length( $length ) {
    	return 20;
    }
    add_filter( 'excerpt_length', 'tnews_custom_excerpt_length', 999 );
}
add_action('after_setup_theme' , 'aftertheme_default_functions');


function assets(){
 echo get_template_directory_uri().'/assets';
}

//Load Nav Menu
register_nav_menus( array(
	'primary' => __( 'Primary Menu', '' ),
    'footer' => __( 'Footer Menu', '' ),
) );
require_once get_template_directory().'/func/nav-walker.php';
//Load framework
include_once get_template_directory(). '/framework/init.php';
include_once get_template_directory(). '/framework/options.php';


//Load meta Fields

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/metafields/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/metafields/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}

//Load saved Metabox
require_once get_template_directory().'/func/acf/events.php';
require_once get_template_directory().'/func/acf/executive-body.php';


//Load Registered Post Type

require_once get_template_directory().'/func/slider.php';
require_once get_template_directory().'/func/NewsAndEvent.php';
require_once get_template_directory().'/func/executive.php';

//Load Paginate
require_once get_template_directory().'/func/paginition.php';


/** Widget  */
function register_widgets(){
	register_sidebar([
		'id' => 'footer_widget',
		'name' => 'Footer Widget',
		'before_widget' => '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12"><div class="footer-box">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'description' => ''
	]);
}
add_action('widgets_init', 'register_widgets');

//Load Widget
require_once get_template_directory().'/func/widget/social-widget.php';

//core
require_once get_template_directory().'/func/wp-core.php';