<?php

//slider 
register_post_type('slider', array(
	'labels' => array(
		'name' => 'Sliders',
		'add_new_item' => 'Add New Slider',
		'featured_image' => 'Upload or Update Slider Image (1600x520)',
		'set_featured_image' => 'Set Slider Image',
	),
	'public' => true,
	'show_in_menu' => true,
	'menu_position' => 3,
	'menu_icon' => 'dashicons-image-flip-horizontal',
	'supports' => array('title' , 'editor', 'thumbnail')
));
	
?>