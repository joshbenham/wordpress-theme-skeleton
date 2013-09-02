<?php
/**
 * @package joshbenham
 * @subpackage Skeleton
 * @since February 18th 2013
 */
?>

<?php get_header(); ?>

	<div role="main" id="main">
		<div class="row">

			<div id="content" class="large-12 columns">
				<?php if (have_posts()): ?>

					<?php while (have_posts()) : the_post(); ?>
						<?php if (is_page()): ?>
							<?php get_template_part('content-page', get_post_format()); ?>
						<?php else: ?>
							<?php get_template_part('content', get_post_format()); ?>
						<?php endif; ?>
					<?php endwhile; ?>

				<?php elseif (is_404()): ?>

					<?php get_template_part('content-404'); ?>

				<?php else: ?>

					<?php get_template_part('content-empty'); ?>

				<?php endif; ?>

				<?php if ( $wp_query->max_num_pages > 1 ) : ?>

					<?php get_template_part('pagination'); ?>

				<?php endif; ?>
			</div>

		</div>
	</div>

<?php get_footer(); ?>
