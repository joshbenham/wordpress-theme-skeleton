<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>

	<header class="page__header">
		<h1 class="page__title"><?php the_title(); ?></h1>
	</header>

	<section class="page__section">
		<?php the_content(); ?>
	</section>

	<footer class="page__footer"></footer>

</article>
