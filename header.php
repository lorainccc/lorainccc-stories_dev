<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lccc-framework' ); ?></a>
	
	<div class="off-canvas-wrapper">
		
		<?php get_template_part( 'template-parts/content', 'offcanvas' ); ?>
		
		<div class="off-canvas-content" data-off-canvas-content>
			
			<header id="masthead" class="header-bar grid-x grid-padding-x align-middle">
				
				<div class="shrink cell hamburger-cell">
					
					<!--
					<div class="hamburger">
						
						<div class="top-bun"></div>
						
						<div class="patty"></div>
						
						<div class="bottom-bun"></div>
					
					</div>
					
					
					<img class="menu-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.svg" alt="hamburger" />

					-->
					
					<div class="hamburger menu-icon">
						
						<div class="top-bun"></div>
						<div class="meat"></div>
						<div class="bottom-bun"></div>
					
					</div>
				
				</div>
				
				<div class="auto cell text-center logo-cell">
					
					<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/LCCC-Stories-w-text-outlines.svg" alt="Lorian County Community College Logo" /></a>
				
				</div>
				
				<div class="shrink cell search-cell">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.svg" class="search-icon" alt="search LCCC Stories" height="27" width="33" />
				</div>
			
			</header>
			<?php /*
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lccc-framework' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			*/ ?>
			<div id="content" class="site-content">
