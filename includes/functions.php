<?php


/* FUNCTIONS -------------------------------------------------------- */


/* CLEANUP HEAD META ------------------------------------------------ */


add_action('init', 'cleanup_head');
function cleanup_head() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
}

