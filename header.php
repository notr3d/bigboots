<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic&subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700&subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<div class="site-header__wrapper">
		<a href="home" class="site-logo">
			<span class="site-logo__img"></span>
			<span class="site-logo__text">Big boots</span>
		</a>
		<?php wp_nav_menu(array(
			'theme_location' => 'site-nav',
			'container_class' => 'site-nav',
			'menu_class' => 'site-header__menu'
		)); ?>
		<?php wp_nav_menu(array(
			'theme_location' => 'user-info',
			'container_class' => 'user-info',
			'menu_class' => 'site-header__menu'
		)); ?>
		<?php //get_search_form(); ?>	
		<?php //woocommerce_mini_cart(); ?>		
		<button class="site-header__open">+</button>
	</div>
</header>
<div class="site">	
	<div class="site__wrapper">
