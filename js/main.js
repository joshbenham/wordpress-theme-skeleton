/* ------------------------------------------------------------------ *\
Component: Main;
Version: 1.0.0;
Author: Josh Benham;
Author URI: http://github.com/joshbenham;

Base styles for the modules
\* ------------------------------------------------------------------ */

/* globals picturefill */

;(function($) {
	'use strict';


/* GENERIC ---------------------------------------------------------- */


	$(document).foundation();


/* RESPONSIVE IMAGE ------------------------------------------------- */


	var triggerPicturefill = function(e) {
		/* jshint validthis:true */
		$(this).attr('data-picture','').removeClass('rimg-block');
		picturefill();

		if (!$('.rimg:not([data-picture])').length) {
			$('.rimg').unbind('enterviewport');
		}
	};

	$('.rimg:not([data-picture])')
		.on('enterviewport', triggerPicturefill)
		.bullseye()
		.addClass('rimg-block');


/* ON READY --------------------------------------------------------- */


	$(function() {

	});

}(jQuery));
