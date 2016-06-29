<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="site-header__wrapper">
			<a href="home" class="site-logo">
				<span class="site-logo__img"></span>
				<span class="site-logo__text">Big boots</span>
			</a>
			<div class="site-nav">
				<?php wp_nav_menu(array(
					'theme_location' => 'site-nav',
					'menu_class' => 'site-header__menu'
				)); ?>
			</div>
			<div class="user-info">
				<?php wp_nav_menu(array(
					'theme_location' => 'user-info',
					'menu_class' => 'site-header__menu'
				)); ?>
			</div>
		</div>
	</header>
	<div class="site-content">
