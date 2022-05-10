<?php

//news
register_post_type('news', array(
	'labels' => array(
		'name' => 'News',
		'add_new_item' => 'Add New News',
		'featured_image' => 'Upload or Update News Image (1600x520)',
		'set_featured_image' => 'Set news Image',
	),
	'public' => true,
	'show_in_menu' => true,
	'has_archive' => true,
	'menu_position' => 3,
	'menu_icon' => 'dashicons-image-flip-horizontal',
	'supports' => array('title' , 'editor', 'thumbnail')
));
add_action( 'pre_get_posts', 'archiveNews' );
// Show all news on news Archive Page
function archiveNews( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'news' ) ) {
            $query->set( 'posts_per_page', '12' );
    }
}
//event
register_post_type('event', array(
	'labels' => array(
		'name' => 'Event',
		'add_new_item' => 'Add New event',
		'featured_image' => 'Upload or Update event Image (1600x520)',
		'set_featured_image' => 'Set event Image',
	    ),
	'public' => true,
	'show_in_menu' => true,
	'menu_position' => 3,
	'has_archive' => true,
	'menu_icon' => 'dashicons-image-flip-horizontal',
	'supports' => array('title' , 'editor', 'thumbnail')
    )//array
);

add_action( 'pre_get_posts', 'archiveEvent' );
// Show all event on event Archive Page
function archiveEvent( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'event' ) ) {
            $query->set( 'posts_per_page', '12' );
    }
}
	
?>