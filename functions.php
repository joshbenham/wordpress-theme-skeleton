<?php


/* INCLUDE FILES ---------------------------------------------------- */


include('includes/foundation.php');
include('includes/functions.php');
include('includes/media.php');
include('includes/shortcodes.php');
include('includes/sidebars.php');
include('includes/widgets.php');


/* SHORTCODE EXTRAS ------------------------------------------------- */


remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );
add_filter('widget_text', 'do_shortcode');
