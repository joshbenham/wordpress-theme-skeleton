<?php


/* JAVASCRIPTS ------------------------------------------------------ */


add_action('wp_enqueue_scripts', 'skeleton_scripts');
function skeleton_scripts() {
	wp_register_script('modernizr', get_template_directory_uri() . '/foundation/js/vendor/custom.modernizr.js', false, '2.6.2');
	wp_enqueue_script('modernizr');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/foundation/js/vendor/jquery.js', false, '1.10.2', true);
	wp_enqueue_script('jquery');

	wp_register_script('foundation', get_template_directory_uri() . '/foundation/js/foundation/foundation.js', array('jquery'), '4.2.3', true);
	wp_enqueue_script('foundation');

	wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
	wp_enqueue_script('main');
}


/* STYLESHEETS ------------------------------------------------------ */


add_action('wp_enqueue_scripts', 'skeleton_styles');
function skeleton_styles() {

}
