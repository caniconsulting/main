<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package caniconsulting
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header-area full">
		<div class="main-page container">
			<header id="masthead" class="site-header inner row" role="banner">
					<div class="site-branding span6">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>
					<div class="row">
						<div class="span12">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
							<nav id="site-navigation" class="navbar navbar-default" role="navigation">
								<button class="btn btn-default navbar-btn"><?php _e( 'Primary Menu', 'cani-consulting' ); ?></button>
=======
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle"><?php _e( 'Primary Menu', 'cani-consulting' ); ?></button>
>>>>>>> f87090f9cf04bce3303342b75db5a3fbf72a6b74
=======
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle"><?php _e( 'Primary Menu', 'cani-consulting' ); ?></button>
>>>>>>> 62238095eb175c096aafc1691c22fc631af703c6
=======
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle"><?php _e( 'Primary Menu', 'cani-consulting' ); ?></button>
>>>>>>> 62238095eb175c096aafc1691c22fc631af703c6
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
			</header><!-- #masthead -->
		</div>
	</div>
	<div class="main-content-area full">
		<div class="main-page container">
			<div id="content" class="site-content inner row">
		
