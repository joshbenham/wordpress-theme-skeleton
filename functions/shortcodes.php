<?php


/* GENERIC ---------------------------------------------------------- */


add_shortcode('button', 'jb_button');
function jb_button($atts) {
	extract(shortcode_atts(array(
		'id' => '1',
		'text' => 'Submit'
	), $atts));

	return sprintf(
		'<a href="%s" class="button">%s</a>',
		get_permalink($id),
		$text
	);
}
