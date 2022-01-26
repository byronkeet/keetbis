<?php
/**
 * Template Name: Template Success
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo esc_url( get_theme_file_uri() ); ?>/images/KEETBISME-K-white.svg" type="image/x-icon" height="512" width="512"/>
	<link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri() ); ?>/images/KEETBISME-K-white.svg" type="image/x-icon" height="512" width="512"/>
	<?php wp_head(); ?>
</head>
<body>

	<section class="hero is-white is-fullheight has-text-centered animate-fadeUp">
		<div class="hero-body" style="padding-top: 0;">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-three-fifths"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/404-r2d2.png" style="margin-bottom: 48px; max-width: 400px;">
						<h1 class="title is-spaced is-size-1-desktop is-size-2-tablet is-size-3-mobile">404 error</h1>
						<h2 class="subtitle is-size-4-desktop">This isn't the droid (or page) you're looking for.</h2><a class="button is-primary is-outlined is-medium is-rounded" style="margin-top: 30px; font-weight: 500;" href="/">Return home</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php wp_footer(); ?>
</body>
</html>
