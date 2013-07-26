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
		add_shortcode('row', array($this, 'row'));
		add_shortcode('column', array($this, 'column'));

		add_shortcode('button', array($this, 'button'));
	}

	public function transform($string) {
		return esc_attr(str_replace('_', '-', $string));
	}


	/* SHORTCODES: GRID --------------------------------------------- */


	public function row($atts, $content = null) {
		return '<div class="row">'.do_shortcode($content).'</div>';
	}

	public function column($atts, $content = null) {
		$string = '';

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

		foreach ($column_classes as $key => $value) {
			$value = $$key;

			if (!empty($value) && in_array($value, $this->columns))
				$string .= $this->transform($key).'-'.$this->transform($value).' ';
		}

		return '<div class="'.esc_attr(trim($string)).' '.esc_attr(trim($class)).' columns">'.do_shortcode($content).'</div>';
	}


	/* SHORTCODES: BUTTON ------------------------------------------- */


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

}

new SkeletonFoundationShortcodes();
