<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="dns-prefetch" href="//www.google-analytics.com">
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="dns-prefetch" href="//themes.googleusercontent.com">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/images/touch.png" rel="apple-touch-icon-precomposed">

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/vendor/respond/respond.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<header role="banner" class="header">
			<div class="row">

				<div class="small-12 large-4 columns">
					<a class="header__logo" href="<?php echo home_url('/'); ?>">
						<span class="hide"><?php bloginfo('name'); ?></span>
					</a>
				</div>

				<div class="small-12 large-8 columns">
					<nav role="navigation" class="navigation right-for-large">
						<?php wp_nav_menu( array(  'theme_location' => 'primary-menu', 'menu_class' => 'menu right-for-large', 'container' => false ) ); ?>
					</nav>
				</div>

			</div>
		</header>
