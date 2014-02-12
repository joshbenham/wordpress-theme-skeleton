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

			loaded: function($el) {
				var $parent = $el.closest('.rimg');

				if ($el.height() > 0) {
						$parent.attr('style', '');
						$el.fadeIn('1000');
				} else {
					$el.load(function() {
						$parent.attr('style', '');
						$el.fadeIn('1000');
					});
				}
			},

			trigger: function(e) {
				/* jshint validthis:true */
				$(this).attr('data-picture','');
				picturefill();

				$(this).unbind('enterviewport');
				rimg.loaded($(this).find('img'));
			}

		};

		rimg.init();

		$('.rimg:not([data-picture])')
			.on('enterviewport', rimg.trigger)
			.bullseye();

	});

}(jQuery, window, document));
