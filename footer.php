		<footer role="contentinfo" id="footer" class="large-12 columns">
			<div class="row">
				<div class="large-6 columns">
					<div class="navigation-inline">&copy; Copyright <?php wp_nav_menu( array( 'menu' => 'footer-nav', 'container_class' => 'menu-container' ) ); ?></div>
				</div>
				<div class="large-6 columns">
					<span class="right">by Josh Benham</span>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
