<?php

/*===========
===Core WP======
=============*/
/**nemove emoji */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_generator');
// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // Wordpress core
wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
}
class Alter_WP_Scripts extends WP_Scripts{
    function do_item( $handle, $group = false ){       
    	if( 'panda-pods-repeater-scripts' == $handle ){
    		$handle = false;
    	}
        return parent::do_item( $handle, $group );    	
    }
}
if( !is_admin() ){
	add_action( 'wp_loaded', function() {
	    $GLOBALS['wp_scripts'] = new Alter_WP_Scripts;
	});
}

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );


/**=========
 * Purify==
 * =========
 * /

/* Remove inline <style> blocks. */
function start_html_buffer() {
    // buffer output html
    ob_start();
}
function end_html_buffer() {
    // get buffered HTML
    $wpHTML = ob_get_clean();

    // remove <style> blocks using regular expression
    $wpHTML = preg_replace("/<style[^>]*>[^<]*<\/style>/m",'', $wpHTML);

    echo $wpHTML;
}
if ($purifyCssEnabled) {
    add_action('template_redirect', 'start_html_buffer', 0); // wp hook just before the template is loaded
    add_action('wp_footer', 'end_html_buffer', PHP_INT_MAX); // wp hook after wp_footer()
}

function enqueue_pure_styles() {
    $suffix = '';
    if (is_front_page()) {
       $suffix = '.front-page';
    } else if (is_page()) {
       $suffix = '.pages';
    } else if (is_single()) {
       $suffix = '.blog';
    } else if (is_archive()) {
       $suffix = '.archives';
    }
    wp_enqueue_style('pure-styles', get_stylesheet_directory_uri().'/styles'.$suffix.'.pure.css');
}

if ($purifyCssEnabled) {
    // enqueue our purified css file
    add_action('wp_print_styles', 'enqueue_pure_styles', PHP_INT_MAX);
}