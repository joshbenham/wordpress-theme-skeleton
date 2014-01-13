<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

	<header class="article__header">
		<?php if (has_post_thumbnail()): ?>
			<div class="article__thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<h1 class="article__title"><?php the_title(); ?></h1>
	</header>

	<section class="article__section">
		<?php the_content(); ?>
	</section>

	<footer class="article__footer"></footer>

</article>
