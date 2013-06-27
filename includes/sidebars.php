<?php


/* SIDEBARS --------------------------------------------------------- */


if (function_exists('register_sidebar')) {

	$defaults = array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	);

	register_sidebar($defaults);

	register_sidebar(array_merge(array(
		'name' => 'Footer Column One',
		'id' => 'footer-column-one',
		'description' => 'Sidebar that appears on the footer at column one',
	), $defaults));

	register_sidebar(array_merge(array(
		'name' => 'Footer Column Two',
		'id' => 'footer-column-two',
		'description' => 'Sidebar that appears on the footer at column two',
	), $defaults));

	register_sidebar(array_merge(array(
		'name' => 'Footer Column Three',
		'id' => 'footer-column-three',
		'description' => 'Sidebar that appears on the footer at column three',
	), $defaults));

}
