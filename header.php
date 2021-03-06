<!DOCTYPE HTML>
<html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php bloginfo( 'name' ); ?></title></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_theme_mod('bookmark_icon'); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<?php wp_head(); ?>

		<!-- Custom Theme Colors -->
		<style type="text/css">
			.masthead {
				background-color: <?php echo get_theme_mod('header_color'); ?>;
			}
			a {
				color: <?php echo get_theme_mod('link_color'); ?>;
			}
			.current-menu-item > a,
			.current_page_item > a  {
				color: <?php echo get_theme_mod('header_color'); ?>;
			}
		</style>
	</head>
	<body <?php body_class($class); ?>>
		
		<div class="header">
			<div class="masthead <?php if (is_archive()): ?>archive<?php endif; ?>">
				<?php if (get_header_image() != '' && get_theme_mod('small_logo') != ''): ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-fullsize"><img src="<?php header_image(); ?>" alt="<?php bloginfo( $name ); ?>" /></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-small"><img src="<?php echo get_theme_mod('small_logo'); ?>" alt="<?php bloginfo( $name ); ?>" /></a>
				<?php elseif (get_header_image() != ''): ?>
					<a href="<php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" alt="<?php bloginfo( $name ); ?>" /></a>
				<?php else: ?>
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( $name ); ?></a></h1>
				<?php endif ?>
				<ul class="tool-menu">
					<li class="search">
						<a href="#" class="icon-search"></a>
						<div class="searchform-desktop">
							<?php get_search_form(); ?>
						</div>
					</li class="menu">
					<li>
						<a href="#menu" class="icon-menu"></a>
					</li>
				</ul><!-- /.tool-menu -->
			</div><!-- /.masthead -->
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<div class="searchform-mobile">
				<?php get_search_form(); ?>
			</div><!-- /.searchform-mobile -->
			<?php if (is_archive()): ?>
				<div class="header-message">
					<p>Now reading: <strong><?php single_cat_title( '', true ) ?></strong></p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="icon-close"></a>
				</div><!-- /.header-message -->
			<?php endif ?>
		</div><!-- /.header -->

		<div class="content">