/* ------------------------------------------------------------------ *\
Component: Main;
Author: Josh Benham;
Author URI: http://github.com/joshbenham;

Base styles for the modules
\* ------------------------------------------------------------------ */

/* globals picturefill, console */

;(function($, window, document, undefined) {
	'use strict';


/* GENERIC ---------------------------------------------------------- */


	$(document).foundation();


/* ON READY --------------------------------------------------------- */


	$(function() {


		/* RESPONSIVE IMAGE ----------------------------------------- */


		var rimg = {

			init: function(e) {
				$('.rimg').each(function() {
					var $i = $(this);
					var height = $i.data('height') / $i.data('width') * $i.parent().width();
					$i.css('height', height);
				});
			},

			trigger: function(e) {
				/* jshint validthis:true */
				$(this).attr('data-picture','');
				picturefill();

				if (!$('.rimg:not([data-picture])').length) {
					$('.rimg').unbind('enterviewport');
				}
			}

		};

		rimg.init();

		$('.rimg:not([data-picture])')
			.on('enterviewport', rimg.trigger)
			.bullseye();

	});

}(jQuery, window, document));
