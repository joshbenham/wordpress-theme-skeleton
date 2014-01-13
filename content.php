<?php if (have_posts()): ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php if (is_page()): ?>

			<?php get_template_part('content', 'page'); ?>

		<?php elseif (is_single()): ?>

			<?php get_template_part('content', 'article'); ?>

		<?php else: ?>

			<?php get_template_part('content', 'default'); ?>

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
