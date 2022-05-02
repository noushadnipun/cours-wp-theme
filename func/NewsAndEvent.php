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
	'menu_position' => 3,
	'menu_icon' => 'dashicons-image-flip-horizontal',
	'supports' => array('title' , 'editor', 'thumbnail')
));
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
	'menu_icon' => 'dashicons-image-flip-horizontal',
	'supports' => array('title' , 'editor', 'thumbnail')
    )//array
);
	
?>