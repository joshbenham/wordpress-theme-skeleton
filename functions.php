<?php

function skeleton_scripts()
{
	wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr/modernizr-2.6.2.min.js', false, '2.6.2');
	wp_enqueue_script('modernizr');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery/jquery-1.9.1.min.js', false, '1.9.1' , true);
	wp_enqueue_script('jquery');

	wp_register_script('foundation', get_template_directory_uri() . '/js/vendor/foundation/foundation-4.1.2.min.js', array('jquery'), '4.0.9', true);
	wp_enqueue_script('foundation');

	wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'cookie'), false, true);
	wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'skeleton_scripts');


if (function_exists('register_sidebar'))
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>