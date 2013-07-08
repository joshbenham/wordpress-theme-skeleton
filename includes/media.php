<?php


/* JAVASCRIPTS ------------------------------------------------------ */


add_action('wp_enqueue_scripts', 'skeleton_scripts');
function skeleton_scripts() {
	wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr/modernizr-2.6.2.min.js', false, '2.6.2');
	wp_enqueue_script('modernizr');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery/jquery-1.10.2.min.js', false, '1.10.2', true);
	wp_enqueue_script('jquery');

	wp_register_script('foundation', get_template_directory_uri() . '/js/vendor/foundation/foundation-4.2.3.min.js', array('jquery'), '4.2.3', true);
	wp_enqueue_script('foundation');

	wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
	wp_enqueue_script('main');
}


/* STYLESHEETS ------------------------------------------------------ */


add_action('wp_enqueue_scripts', 'skeleton_styles');
function skeleton_styles() {
	wp_register_style('normalize', get_template_directory_uri() . '/css/vendor/normalize/normalize-2.1.1.css');
	wp_enqueue_style('normalize');

	wp_register_style('foundation', get_template_directory_uri() . '/css/vendor/foundation/foundation-4.2.3.css');
	wp_enqueue_style('foundation');

	wp_register_style('helpers', get_template_directory_uri() . '/css/helpers.css');
	wp_enqueue_style('helpers');

	wp_register_style('layout', get_template_directory_uri() . '/css/layout.css');
	wp_enqueue_style('layout');

	wp_register_style('forms', get_template_directory_uri() . '/css/forms.css');
	wp_enqueue_style('forms');

	wp_register_style('modules', get_template_directory_uri() . '/css/modules.css');
	wp_enqueue_style('modules');

	wp_register_style('custom', get_template_directory_uri() . '/css/custom.css');
	wp_enqueue_style('custom');
}
