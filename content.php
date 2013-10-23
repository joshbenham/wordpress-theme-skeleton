<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

	<header class="article__header">

		<?php if (has_post_thumbnail()): ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>

		<h1 class="article__title">
			<?php if (is_single()): ?>
				<?php the_title(); ?>
			<?php else: ?>
				<a class="article__permalink" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'skeleton' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			<?php endif; ?>
		</h1>

	</header>

	<section class="article__section">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'skeleton' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'skeleton' ), 'after' => '</div>' ) ); ?>
	</section>

	<footer class="article__footer"></footer>

</article>
