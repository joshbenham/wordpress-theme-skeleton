<?php

function skeleton_scripts()
{
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap-2.2.2.min.js', array( 'jquery' ) );
	wp_enqueue_script('bootstrap');
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