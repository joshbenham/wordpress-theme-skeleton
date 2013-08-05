<?php

class SkeletonFoundationShortcodes {


	/* VARIABLES ---------------------------------------------------- */


	public $columns = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);


	/* CONSTRUCTOR -------------------------------------------------- */


	public function __construct() {
		add_action('init', array($this, 'add_shortcodes'));
	}


	/* GENERIC ------------------------------------------------------ */


	public function add_shortcodes() {
		/* GRID ----------------------------------------------------- */
		add_shortcode('row', array($this, 'row'));
		add_shortcode('column', array($this, 'column'));
		/* BLOCKS --------------------------------------------------- */
		add_shortcode('blocks', array($this, 'blocks'));
		add_shortcode('block', array($this, 'block'));
		/* BUTTONS -------------------------------------------------- */
		add_shortcode('button', array($this, 'button'));
		/* LABELS --------------------------------------------------- */
		add_shortcode('label', array($this, 'label'));
		/* ALERTS --------------------------------------------------- */
		add_shortcode('alert', array($this, 'alert'));
	}

	public function transform($string) {
		return esc_attr(str_replace('_', '-', $string));
	}

	public function classes_to_string($column_classes, $args) {
		$string = '';

		foreach ($column_classes as $key => $value) {
			$value = $args['atts'][$key];

			if (!empty($value) && in_array($value, $this->columns))
				$string .= $this->transform($key).'-'.$this->transform($value).' ';
		}

		return trim($string);
	}


	/* SHORTCODES: GRID --------------------------------------------- */


	public function row($atts, $content = null) {
		return '<div class="row">'.do_shortcode($content).'</div>';
	}

	public function column($atts, $content = null) {
		$column_classes = array(
			'small' => '',
			'small_offset' => '',
			'large' => '',
			'large_offset' => '',
			'push' => '',
			'pull' => '',
		);

		extract(shortcode_atts(array_merge(
			$column_classes,
			array('class' => '')
		), $atts));

		$classes = $this->classes_to_string($column_classes, get_defined_vars());

		return '<div class="'.esc_attr($classes).' '.esc_attr(trim($class)).' columns">'.do_shortcode($content).'</div>';
	}


	/* SHORTCODES: BLOCKS ------------------------------------------- */


	public function blocks($atts, $content = null) {
		$column_classes = array(
			'small_block_grid' => '',
			'large_block_grid' => '',
		);

		extract(shortcode_atts(array_merge(
			$column_classes,
			array('class' => '')
		), $atts));

		$classes = $this->classes_to_string($column_classes, get_defined_vars());

		return '<ul class="'.esc_attr($classes).' '.esc_attr(trim($class)).'">'.do_shortcode($content).'</ul>';
	}

	public function block($atts, $content = null) {
		return '<li>'.do_shortcode($content).'</li>';
	}


	/* SHORTCODES: BUTTONS ------------------------------------------ */


	public function button($atts, $content = null) {
		extract(shortcode_atts(array(
			'href' => '',
			'permalink' => '',
			'class' => ''
		), $atts));

		$link = (int)$permalink
			? get_permalink((int)$permalink)
			: $href;

		return '<a href="'.$link.'" class="'.esc_attr(trim($class)).' button">'.do_shortcode($content).'</a>';
	}


	/* SHORTCODES: LABELS --------------------------------------------- */


	public function label($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => ''
		), $atts));

		return '<span class="'.esc_attr(trim($class)).' label">'.do_shortcode($content).'</span>';
	}


	/* SHORTCODES: ALERTS -------------------------------------------- */


	public function alert($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => ''
		), $atts));

		return '<div data-alert class="'.esc_attr(trim($class)).' alert-box">'.do_shortcode($content).'<a href="#" class="close">&times;</a></div>';
	}


}

new SkeletonFoundationShortcodes();
