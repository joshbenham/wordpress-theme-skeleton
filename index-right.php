<?php
/**
 * Template Name: Default Template /w Right Sidebar
 *
 * @package joshbenham
 * @subpackage Skeleton
 * @since February 18th 2013
 */
?>

<?php get_header(); ?>

	<div role="main" class="main">
		<div class="row">

		<div class="content large-9 columns">
			<?php get_template_part('content'); ?>
		</div>

		<aside role="complementary" class="sidebar large-3 columns">
			<?php get_sidebar(); ?>
		</aside>

		</div>
	</div>

<?php get_footer(); ?>
