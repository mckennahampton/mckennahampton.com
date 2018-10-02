<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header <?php if ( get_theme_mod( 'sticky_header', 0 ) ) : echo 'sticky-top'; endif; ?>">
		<div class="row large-menu">
			<div class="hidden-xs-down order-xs-2 col-sm-4 order-sm-1 header-menu-1 align-self-end">
				<ul>
					<li><a class="hvr-sweep-to-left" href="/my-journey" alt="Web Journey">My Journey</a></li><!--
					--><li><a class="hvr-sweep-to-left" href="/portfolio" alt="Portfolio">Portfolio</a></li><!--
					--><li><a class="hvr-sweep-to-left" href="/get-a-quote" alt="Get a Quote">Get a Quote</a></li>
				</ul>
			</div>
			<div class="col-xs-12 order-xs-1 col-sm-4 order-sm-2 align-self-center header-logo">
				<a href="<?php echo site_url(); ?>" alt="Home">
					<img class="logo-tilt" alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo Main-01.svg">
				</a>
			</div>
			<div class="hidden-xs-down col-sm-4 header-menu-2 order-sm-3 align-self-end">
				<ul>
					<li><a class="hvr-sweep-to-right" href="/releases" alt="Releases">Releases</a></li><!--
					--><li><a class="hvr-sweep-to-right" href="/my-process" alt="My Process">My Process</a></li><!--
					--><li><a class="hvr-sweep-to-right" href="/blog" alt="Blog">Blog</a></li>
				</ul>
			</div>
		</div>
	
		<div class="row mobile-menu">
			<div class="collapse" id="mobileNavbar">
				<ul>
					<li><a class="hvr-sweep-to-left" href="/my-journey" alt="Web Journey">My Journey</a></li>
					<li><a class="hvr-sweep-to-left" href="/portfolio" alt="Portfolio">Portfolio</a></li>
					<li><a class="hvr-sweep-to-left" href="/get-a-quote" alt="Get a Quote">Get a Quote</a></li>
					<li><a class="hvr-sweep-to-right" href="/releases" alt="Releases">Releases</a></li>
					<li><a class="hvr-sweep-to-right" href="/my-process" alt="My Process">My Process</a></li>
					<li><a class="hvr-sweep-to-right" href="/blog" alt="Blog">Blog</a></li>
				</ul>
			</div>
			<nav class="navbar-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
