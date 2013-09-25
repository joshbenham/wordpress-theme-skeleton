<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri() . '/js/vendor/respond/respond.js';?>"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<header role="banner" class="header row">
			<div class="small-12 large-4 columns">
				<a class="logo" href="<?php echo home_url( '/' ); ?>"><span><?php bloginfo('name'); ?></span></a>
			</div>
			<div class="small-12 large-8 columns">
				<nav role="navigation" class="navigation right-for-large">
					<?php wp_nav_menu( array(  'menu' => 'primary-nav', 'menu_class' => 'menu right-for-large', 'container' => false ) ); ?>
				</nav>
			</div>
		</header>
