<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php /* Facebook:
		<meta property="og:title" content="" />
		<meta property="og:type" content="" />
		<meta property="og:image" content="" />
		<meta property="og:description" content="" />
		<meta property="fb:admins" content="" />
		*/ ?>

		<?php /* Twitter:
		<meta name="twitter:card" content="">
		<meta name="twitter:site" content="">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:url" content="">
		*/ ?>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

		<?php wp_head(); ?>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->


		<div class="row">
			<header role="banner" class="header large-12 columns">
				<div class="row">
					<div class="large-6 columns">
						<h1><?php bloginfo('name'); ?></h1>
					</div>
					<div class="large-6 columns">
						<span class="phone right">Phone Number</span>
					</div>
				</div>
			</header>

			<nav role="navigation" class="navigation large-12 columns">
				<?php wp_nav_menu( array( 'menu' => 'primary-nav', 'container_class' => 'menu-container' ) ); ?>
			</nav>
		</div>