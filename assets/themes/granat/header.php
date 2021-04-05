<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package granat
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class="mobile-menu" id="mobile_menu_id">
			<ul>
				<?php include 'menu.php' ?>
			</ul>
	</div>

	<header id="masthead" class="site-header">
		<div class="header">
			<div class="site-branding">
				<a class='logo' alt='Гранат' title='' href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img alt='Лого' title='' src='<?php bloginfo('template_url'); ?>/img/logo.png'/>
				</a>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul class="nav">

					<li><img id="show_mobile_menu" alt='Лого' title='' src='<?php bloginfo('template_url'); ?>/img/menu_logo.png'/></li>
					<?php include 'menu.php' ?>
				</ul>
			</nav>
		</div>
	</header><!-- #masthead -->
	


	
	<div id="content" class="site-content">

	