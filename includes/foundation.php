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
		/* SECTIONS ------------------------------------------------- */
		add_shortcode('sections', array($this, 'sections'));
		add_shortcode('section', array($this, 'section'));
		/* BUTTONS -------------------------------------------------- */
		add_shortcode('button', array($this, 'button'));
		/* TOOLTIP -------------------------------------------------- */
		add_shortcode('tooltip', array($this, 'tooltip'));
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

		return '<div class="columns '.esc_attr($classes).' '.esc_attr(trim($class)).'">'.do_shortcode($content).'</div>';
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


	/* SHORTCODES: SECTIONS ----------------------------------------- */


	public function sections($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => '',
			'type' => 'accordion',
			'options' => ''
		), $atts));

		return '<div data-section="'.esc_attr(trim($type)).'" data-options="'.esc_attr(trim($options)).'" class="section-container '.esc_attr(trim($type)).' '.esc_attr(trim($class)).'">'.do_shortcode($content).'</div>';
	}

	public function section($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => '',
			'title' => ''
		), $atts));

		return '<section class="'.esc_attr(trim($class)).'">
			<p class="title" data-section-title><a href="#">'.esc_attr(trim($title)).'</a></p>
			<div class="content" data-section-content>'.do_shortcode($content).'</div>
		</section>';
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

		return '<a href="'.$link.'" class="button '.esc_attr(trim($class)).'">'.do_shortcode($content).'</a>';
	}


	/* SHORTCODES: TOOLTIPS ----------------------------------------- */


	public function tooltip($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => '',
			'title' => '',
			'width' => '',
			'options' => ''
		), $atts));

		return '<span data-tooltip data-options="'.esc_attr(trim($options)).'" data-width="'.esc_attr(trim($width)).'" class="has-tip '.esc_attr(trim($class)).'" title="'.esc_attr(trim($title)).'">'.do_shortcode($content).'</span>';
	}


	/* SHORTCODES: LABELS --------------------------------------------- */


	public function label($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => ''
		), $atts));

		return '<span class="label '.esc_attr(trim($class)).'">'.do_shortcode($content).'</span>';
	}


	/* SHORTCODES: ALERTS -------------------------------------------- */


	public function alert($atts, $content = null) {
		extract(shortcode_atts(array(
			'class' => ''
		), $atts));

		return '<div data-alert class="alert-box '.esc_attr(trim($class)).'">'.do_shortcode($content).'<a href="#" class="close">&times;</a></div>';
	}


}

new SkeletonFoundationShortcodes();
