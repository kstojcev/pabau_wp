<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pabau_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#menu-1"><?php esc_html_e('Skip to content', 'pabau-wordpress'); ?></a>

		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-md">
				<div class="container">
					<?php $header_logo = get_field('header_logo', 'option'); ?>
					<!-- $header_logo['url']; -->
					<a class="navbar-brand" href="<?php echo site_url("/"); ?>"><img src="<?= get_template_directory_uri() . "/images/sc-ventures-logo.png" ?>" alt="<?= $header_logo['alt']; ?>"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<!-- <span class="navbar-toggler-icon"></span> -->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<div class="navbar-nav ml-auto">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'container' => false,
									'menu_class' => '',
									'fallback_cb' => '__return_false',
									'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								)
							);
							?>
						</div>
					</div>
				</div>
			</nav><!-- #site-navigation -->

			<!-- MOBILE MENU -->
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="<?= $header_logo['url']; ?>" alt="<?= $header_logo['alt']; ?>"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div class="base-divider"></div>
					<div class="mobile-navbar-nav d-block d-md-none">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							)
						);
						?>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->