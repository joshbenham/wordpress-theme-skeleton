<?php

function skeleton_scripts()
{

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