<?php
/**
 * Template Name: Contact Form
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

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

		<nav id="main-nav" class="navbar navbar-expand-md navbar-light contact-form-header" aria-labelledby="main-nav-label">

			<div class="container">

				<a href='/' class='custom-logo'>
					<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/KEETBISME-main.svg" alt="">
				</a>


				<a href='/' class='close-form'>
					<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/close.svg" alt="">
				</a>


			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</header><!-- #wrapper-navbar end -->

	<div class="wrapper" id="full-width-page-wrapper">

		<div class="<?php echo esc_attr( $container ); ?>" id="content">

			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">

					<div class="container contact-form-description column is-three-quarters d-flex flex-column justify-content-between align-items-center text-center">
						<img class="avatar" src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/keetb-circle.png">
						<h1 class="title">Thanks for taking the time to reach out. How can I help you today?</h1>
					</div>

					<div class="contact-form-shortcode">
						<?php echo do_shortcode( '[contact-form-7 id="28" title="Say Hello"]' ); ?>
					</div>

					</main><!-- #main -->

				</div><!-- #primary -->

			</div><!-- .row end -->

		</div><!-- #content -->

	</div><!-- #full-width-page-wrapper -->


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
