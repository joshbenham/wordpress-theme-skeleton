<?php


/* ADDITIONAL FILES ------------------------------------------------- */


include_once('includes/foundation.php');
include_once('includes/functions.php');
include_once('includes/shortcodes.php');


/* ADD THEME SUPPORT ------------------------------------------------ */


add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');


/* REMOVE DEFAULT SETTINGS ------------------------------------------ */


remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


/* ADD EXTRA SETTINGS ----------------------------------------------- */


add_filter('widget_text', 'do_shortcode');
add_filter('widget_text', 'shortcode_unautop');
add_filter('the_excerpt', 'do_shortcode');
add_filter('the_excerpt', 'shortcode_unautop');


/* SHORTCODE PARAGRAPH HACK ----------------------------------------- */


function clean_shortcodes($content) {
	$array = array (
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']'
	);

	return strtr($content, $array);
}

add_filter('the_content', 'clean_shortcodes');


/* SCRIPTS & STYLES ------------------------------------------------- */


function skeleton_enqueue_scripts() {
	wp_register_script('modernizr', get_template_directory_uri() . '/foundation/js/vendor/custom.modernizr.js', false, '2.6.2');
	wp_enqueue_script('modernizr');

	wp_deregister_script('jquery');
	wp_register_script('main.min', get_template_directory_uri() . '/js/main.min.js', false, false, true);
	wp_enqueue_script('main.min');
}

function skeleton_enqueue_styles() {
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');
	wp_enqueue_style('style');
}


add_action('wp_enqueue_scripts', 'skeleton_enqueue_scripts');
add_action('wp_enqueue_scripts', 'skeleton_enqueue_styles');


function skeleton_remove_media_version($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}

	return $src;
}

add_filter('style_loader_src', 'skeleton_remove_media_version');
add_filter('script_loader_src', 'skeleton_remove_media_version');


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
