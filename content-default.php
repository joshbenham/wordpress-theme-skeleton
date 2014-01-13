<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

	<header class="article__header">
		<?php if (has_post_thumbnail()): ?>
			<div class="article__thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<h1 class="article__title">
			<a class="article__permalink" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'skeleton' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
	</header>

	<section class="article__section">
		<?php the_excerpt(); ?>
	</section>

	<footer class="article__footer"></footer>

</article>
