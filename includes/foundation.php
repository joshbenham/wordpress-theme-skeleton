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
	}

	public function transform($string) {
		return esc_attr(str_replace('_', '-', $string));
	}

	/* SHORTCODES --------------------------------------------------- */


	public function row($atts, $content = null) {
		return '<div class="row">'.do_shortcode($content).'</div>';
	}

	public function column($atts, $content = null) {
		$string = 'columns ';

		$column_classes = array(
			'small' => '',
			'small_offset' => '',
			'large' => '',
			'large_offset' => '',
			'push' => '',
			'pull' => '',
		);

		$generic_classes = array(
			'small_centered' => '',
			'large_centered' => '',
			'classes' => ''
		);

		extract(shortcode_atts(array_merge(
			$column_classes,
			$generic_classes
		), $atts));

		foreach ($column_classes as $key => $value) {
			$value = $$key;

			if (!empty($value) && in_array($value, $this->columns))
				$string .= $this->transform($key).'-'.$this->transform($value).' ';
		}

		foreach ($generic_classes as $key => $value) {
			$value = $$key;

			if (!empty($value))
				$string .= ($key == 'classes' ? $value : $this->transform($key)).' ';
		}

		return '<div class="'.esc_attr(trim($string)).'">'.do_shortcode($content).'</div>';
	}

}

new SkeletonFoundationShortcodes();
