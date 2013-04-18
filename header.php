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


		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="/">Skeleton</a>
					<div class="nav-collapse collapse">
						<ul class="nav">

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<?php $categories = get_categories(array('order' => 'ASC')); ?>
									<?php foreach ((array)$categories as $category): ?>
											<li><a href="<?php echo get_category_link($category->term_id); ?>" rel="category"><?php echo $category->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tags <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<?php $tags = get_tags(array('orderby' => 'count', 'order' => 'ASC')); ?>
									<?php foreach ((array)$tags as $tag): ?>
											<li><a href="<?php echo get_tag_link($tag->term_id); ?>" rel="tag"><?php echo $tag->name; ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Archives <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li class="nav-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>

							<li class="">
								<a href="/about.html">About</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="container">
				<header class="header" role="banner">

					<div class="inner"></div>

				</header>
			</div>
		</div>