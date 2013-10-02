<?php


/* ADDITIONAL FILES ------------------------------------------------- */


include_once(get_template_directory_uri().'/includes/foundation.php');
include_once(get_template_directory_uri().'/includes/functions.php');
include_once(get_template_directory_uri().'/includes/shortcodes.php');


/* THEME SETUP ------------------------------------------------------ */


add_theme_support('menus');
add_theme_support('post-thumbnails');

function skeleton_cleanup_head() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
}

add_action('init', 'skeleton_cleanup_head');


/* SCRIPTS & STYLES ------------------------------------------------- */


function skeleton_scripts() {
	wp_register_script('modernizr', get_template_directory_uri() . '/foundation/js/vendor/custom.modernizr.js', false, '2.6.2');
	wp_enqueue_script('modernizr');

	wp_deregister_script('jquery');
	wp_register_script('main.min', get_template_directory_uri() . '/js/main.min.js', false, false, true);
	wp_enqueue_script('main.min');
}

function skeleton_styles() {
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');
	wp_enqueue_style('style');
}


add_action('wp_enqueue_scripts', 'skeleton_scripts');
add_action('wp_enqueue_scripts', 'skeleton_styles');


/* MENU LOCATIONS --------------------------------------------------- */


function skeleton_menus() {
	register_nav_menus(array(
		'primary-menu' => __('Primary Menu'),
		'footer-menu' => __('Footer Menu')
	));
}

add_action('after_setup_theme', 'skeleton_menus');


/* SIDEBARS --------------------------------------------------------- */


$defaults = array(
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
);

register_sidebar($defaults);

register_sidebar(array_merge(array(
	'name' => 'Footer One',
	'id' => 'footer-one',
	'description' => 'Sidebar that appears on the footer at one',
), $defaults));

register_sidebar(array_merge(array(
	'name' => 'Footer Two',
	'id' => 'footer-two',
	'description' => 'Sidebar that appears on the footer at two',
), $defaults));

register_sidebar(array_merge(array(
	'name' => 'Footer Three',
	'id' => 'footer-three',
	'description' => 'Sidebar that appears on the footer at three',
), $defaults));


/* EXTRAS ----------------------------------------------------------- */


remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );
add_filter('widget_text', 'do_shortcode');
