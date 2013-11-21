		<footer role="contentinfo" class="footer">
			<div class="row">

				<div class="large-6 columns">
					<div class="navigation--inline">
						<span class="footer__copyright">&copy; Copyright </span>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'menu-container' ) ); ?>
					</div>
				</div>

				<div class="large-6 columns">
					<span class="footer__credits right-for-large">by Josh Benham</span>
				</div>

			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
