<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meteorite-design
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,noarchive,nofollow">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icon-font/dist/css/symbols.css" >

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="header-branding">
			<img class="header-logo-mark" src="<?php bloginfo('template_directory'); ?>/images/logo-mark.svg">
			<div class="header-logo-type">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 24">
    				<path d="M23.018 20.998h-3.449L19.017 7.5l-4.254 12.739H11.75L7.542 7.5l-.483 13.498H3.816l.92-17.66h4.53l4.116 12.555 4.023-12.555h4.691l.922 17.66zM41.487 12.122c0 5.197-2.047 8.876-9.29 8.876h-5.036V3.338h5.22c6.117 0 9.106 2.621 9.106 8.784zm-3.587 0c0-3.702-1.426-5.818-5.542-5.818h-1.816v11.728h1.816c3.91 0 5.542-2.116 5.542-5.91z"/>
				</svg>
			</div>
		</a>
		<nav class="navi" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			<div class="navi-shadow"></div>
		</nav><!-- #site-navigation -->

		<div class="naviToggle">
			<div class="naviToggle-inner">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<nav class="spNavi naviToggle-block" role="navigation">
			<div class="spNavi-inner">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav>
		<div class="naviToggle-block-shadow"></div>
    </header>