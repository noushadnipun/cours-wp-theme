<?php 

function aftertheme_default_functions() {
    
    // Add Title Tag   
    add_theme_support ('title-tag');
	add_theme_support ('post-thumbnails');
    add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		
	//excerpt
	function excerpt($limit){
		$content = preg_replace("/<img(.*?)>/si", "", get_the_content());
		//$post_content = explode(" " , get_the_content());
		$post_content = explode(" " , $content);
		$less_content = array_slice ($post_content, 0, $limit);
		echo implode (" ", $less_content);
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

//Load Registered Post Type
require_once get_template_directory().'/func/slider.php';
require_once get_template_directory().'/func/NewsAndEvent.php';

?>