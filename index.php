<?php
/**
 * The main template file.
 *
 * @package joshbenham
 * @subpackage Skeleton
 * @since February 18th 2013
 */
?>

<?php get_header(); ?>

	<div class="row-fluid">
		<div class="container">

			<div role="main" class="main span8">
				<div class="inner">

					<?php if (have_posts()): ?>

						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>

					<?php else: ?>

						<article class="post no-results not-found">

							<header class="header">
								<h1><?php _e('Sorry, there are no posts.'); ?></h1>
							</header>

							<section class="content">
								<p><?php _e( 'Apologies, but no posts were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
								<?php get_search_form(); ?>
							</section>

							<footer class="meta"></footer>

						</article>

					<?php endif; ?>

				</div>
			</div>

			<div role="complementary" class="sidebar span4">
				<div class="inner">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); ?>