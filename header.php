<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" href="<?php echo esc_url( get_theme_file_uri() ); ?>/images/KEETBISME-K-white.svg" type="image/x-icon" height="512" width="512"/>
	<link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri() ); ?>/images/KEETBISME-K-white.svg" type="image/x-icon" height="512" width="512"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<nav id="main-nav" class="navbar navbar-expand-md navbar-light" aria-labelledby="main-nav-label">

			<div class="container">

				<a href='/' class='custom-logo'>
					<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/KEETBISME-main.svg" alt="">
				</a>


				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbarNavDropdown" class="collapse navbar-collapse">
					<div class="keetbis-nav-links d-flex justify-content-center align-items-center text-center">
						<div class="projects-link">
							<a href="#projects">
								Projects
							</a>
						</div>
						<div class="say-hello">
							<a href="/contact">
								Say Hello
							</a>
						</div>
					</div>
				</div>


			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</header><!-- #wrapper-navbar end -->
