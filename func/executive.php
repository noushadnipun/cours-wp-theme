<?php 

register_post_type('executive', array(
	'labels' => array(
		'name' => 'Executive Body',
		'add_new_item' => 'Add New Stuff',
		'featured_image' => 'Upload or Update Image',
		'set_featured_image' => 'Set Image',
	),
	'public' => true,
	'show_in_menu' => true,
	'menu_position' => 3,
    'has_archive' => true,
    'exclude_from_search' => true,
	'menu_icon' => 'dashicons-image-flip-horizontal',
	'supports' => array('title' , 'editor', 'thumbnail')
));

	//Portfolio Taxonomy
register_taxonomy('executive-category' ,'executive', array(
        'labels' =>  array(
        'name' => 'Category',
    ),
    'public' => true,
    'hierarchical' => true,
));

?>