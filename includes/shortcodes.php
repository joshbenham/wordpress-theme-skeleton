<?php


/* GENERIC ---------------------------------------------------------- */


/* USER ACCESS ------------------------------------------------------ */


add_shortcode('is_admin', 'user_is_admin');
function user_is_admin($atts, $content = null) {
	if (!is_user_logged_in() && !is_admin())
		return '';

	return do_shortcode($content);
}

add_shortcode('is_logged_in', 'user_is_logged_in');
function user_is_logged_in($atts, $content = null) {
	if (!is_user_logged_in())
		return '';

	return do_shortcode($content);
}


/* RESPONSIVE IMAGES ------------------------------------------------ */


function screen_resolutions() {
	return array(
		'480',
		'748',
		'1024'
	);
}

add_shortcode('rimg', 'responsive_image');
function responsive_image($atts) {

	if (!function_exists('wpthumb')) {
		echo '<div style="background:red;padding:10px;margin:10px;color:#FFF;font-weight:bold;border-radius:4px;">WPThumb needs to be installed</div>';
		return;
	}

	extract(shortcode_atts(array(
		'src' => '',
		'alt' => '',
		'retina' => '1',
		'class' => ''
	), $atts));

	$headers = @get_headers($src);

	if ($headers[0] == 'HTTP/1.1 200 OK') {
		list($width, $height, $type, $attr) = getimagesize($src);

		$loop = 0;
		$string = '<span data-alt="'.$alt.'" class="rimg rimg-placeholder '.$class.'" data-width="'.$width.'" data-height="'.$height.'">';
		foreach (screen_resolutions() as $resolution) {

			if ($resolution <= $width) {
				$resized_image = wpthumb($src, 'width='.$resolution.'&crop=0');

				if (!$loop) {
					$string .= '<span data-src="'.$resized_image.'"></span>';
				}

				$string .= '<span data-src="'.$resized_image.'" data-media="(min-width: '.$resolution.'px)"></span>';


				if ($retina && ($resolution * 2) <= $width) {
					$resized_image = wpthumb($src, 'width='.($resolution * 2).'&crop=0');
					$media = '(min-width: '.$resolution.'px) and (min-device-pixel-ratio: 2.0)';
					$string .= '<span data-src="'.$resized_image.'" data-media="'.$media.'"></span>';
				}
			}
			else if (!$loop) {
				$string .= '<span data-src="'.$src.'"></span>';
			}

			$loop++;
		}
		$string .= '<noscript><img src="'.$src.'" alt="'.$alt.'"></noscript>';
		$string .= '</span>';

		return $string;
	}

	return;
}
