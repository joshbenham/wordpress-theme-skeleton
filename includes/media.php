<?php


/* JAVASCRIPTS ------------------------------------------------------ */


add_action('wp_enqueue_scripts', 'skeleton_scripts');
function skeleton_scripts() {
	wp_register_script('modernizr', get_template_directory_uri() . '/foundation/js/vendor/custom.modernizr.js', false, '2.6.2');
	wp_enqueue_script('modernizr');

	wp_deregister_script('jquery');
	wp_register_script('main.min', get_template_directory_uri() . '/js/main.min.js', false, false, true);
	wp_enqueue_script('main.min');
}


/* STYLESHEETS ------------------------------------------------------ */


add_action('wp_enqueue_scripts', 'skeleton_styles');
function skeleton_styles() {

}
