<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_62776fbdd1b51',
	'title' => 'Events Field',
	'fields' => array(
		array(
			'key' => 'field_62776fcaee184',
			'label' => 'Date of Event',
			'name' => 'date_of_event',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 0,
		),
		array(
			'key' => 'field_62776ffaee185',
			'label' => 'Place of Event',
			'name' => 'place_of_event',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_62777063822f1',
			'label' => 'Time of Event',
			'name' => 'time_of_event',
			'type' => 'text',
			'instructions' => '4:00 AM to 6:00 PM',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'event',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;