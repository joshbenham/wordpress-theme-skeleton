<?php
/**
 * Template Name: Default Template /w Left Sidebar
 *
 * @package joshbenham
 * @subpackage Skeleton
 * @since February 18th 2013
 */
?>

<?php get_header(); ?>

	<div role="main" class="main row">

		<aside role="complementary" class="sidebar large-3 columns">
			<div class="inner">
				<?php get_sidebar(); ?>
			</div>
		</aside>

		<div class="content large-9 columns">
			<?php if (have_posts()): ?>

				<?php while (have_posts()) : the_post(); ?>
					<?php if (is_page()): ?>
						<?php get_template_part('content', 'page'); ?>
					<?php else: ?>
						<?php get_template_part('content'); ?>
					<?php endif; ?>
				<?php endwhile; ?>

			<?php elseif (is_404()): ?>

				<?php get_template_part('content', '404'); ?>

			<?php else: ?>

				<?php get_template_part('content', 'empty'); ?>

			<?php endif; ?>

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>

				<?php get_template_part('pagination'); ?>

			<?php endif; ?>
		</div>

	</div>

<?php get_footer(); ?>
