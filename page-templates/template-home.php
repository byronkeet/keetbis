<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">

	<!-- <div class="<?php echo esc_attr( $container ); ?>" id="content"> -->

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="hero-banner container d-flex text-center flex-column align-items-center justify-content-center">
						<h1>I'm Keet B</h1>
						<h3>Full-Stack Developer</h3>
						<p>Once a highly qualified investment manager, now a passionate developer with a desire to build projects for the betterment of the open web.</p>
						<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/keetb.png" alt="cartoon me">
					</div>

					<div class="about-me bg-primary ">
						<div class="container d-flex flex-column align-items-center justify-content-center text-center">
							<p>Born in South Africa, I am <strong>inspired by open source</strong> and its contributors to bring value and precious resources to all, including those of limited means.</p>
							<p>With the <strong>power to alter the lives</strong> of even the most underprivileged individuals, open-source is paving the way for drastic change and redistribution of wealth.</p>
							<p class="mb-5">Herein lies my <strong>passion</strong> for continuous learning of open-source technology for developing <strong>life changing products and sites for the world</strong>.</p>
						</div>
					</div>

					<section id="skills" class="container">
						<div class="skills">
							<div class=" d-flex align-items-center justify-content-center text-center">
								<div class="column front-end">
									<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/front.svg" alt="pens crossed">
									<h2 class="title">Front-end Dev</h2>
									<p class="desc">I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>

									<h3 class="list-title">Languages I speak:</h3>
									<p class="list-title-desc">HTML, CSS, SCSS, JS</p>

									<h3 class="list-title">Dev tools:</h3>
									<ul>
										<li>Figma</li>
										<li>Bootstrap</li>
										<li>React JS</li>
										<li>Github</li>
										<li>VS Code</li>
									</ul>
								</div>
								<div class="column WordPress">
									<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/wordpress.svg" alt="coding book">
									<h2 class="title">WordPress</h2>
									<p class="desc">I enjoy the WP community and the process of block-first native plugin development.</p>

									<h3 class="list-title">Plugin Contributions:</h3>
									<p class="list-title-desc">Block Lab, Store Exporter, Product Importer</p>

									<h3 class="list-title">Dev tools:</h3>
									<ul>
										<li>Local by Flywheel</li>
										<li>Docker</li>
										<li>Gutenberg</li>
										<li>xDebug</li>
										<li>PHPCS</li>
									</ul>
								</div>
								<div class="column back-end">
									<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/back.svg" alt="coding brackets">
									<h2 class="title">Back-end Dev</h2>
									<p class="desc">I love server-side functionality and building the brain of applications.</p>

									<h3 class="list-title">Languages I speak:</h3>
									<p class="list-title-desc">PHP, Javascript</p>

									<h3 class="list-title">Dev tools:</h3>
									<ul>
										<li>React JS</li>
										<li>MySql</li>
										<li>Ngnix</li>
										<li>Docker</li>
										<li>Postman</li>
										<li>Terminal</li>
									</ul>
								</div>
							</div>
						</div>
					</section>

					<section id="projects" class="projects container">
						<h1 class="title text-center">My Work</h1>
						<p class="description text-center">Here are a few projects I've worked on recently.</p>

						<div class="container project-boxes d-flex align-items-center justify-content-center flex-wrap">
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/hello.png" alt="Hello Charts">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Hello Charts</h2>
											<p class="fs-6 text-white">A block-first and beautiful way to add charts to your WordPress website. <br>
											As part of <a href="https://github.com/hello-wp" target="_blank">Hello WP</a>, a 3 person team, we strive to create block-editor native plugins for WordPress.
											</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://hellocharts.co/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/kb.png" alt="Koala Boss">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Koala Boss</h2>
											<p class="fs-6 text-white">
											I was involved in builing the file and database backup and restore stream on the WordPress plugin side that makes use of the AWS SDK and interfaces with the KoalaBoss API.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://koalaboss.com/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/visser.png" alt="Visser Labs">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Visser Labs</h2>
											<p class="fs-6 text-white">For two years I handled all client support and feature development of the WooCommerce <a href="https://wordpress.org/plugins/woocommerce-exporter/" target="_black">Store Exporter</a> and <a href="https://wordpress.org/plugins/woocommerce-product-importer/" target="_blank">Product Importer</a> (free and Pro) plugins. These plugins are for exclusively exporting and importing WooCommerce data.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://visser.com.au/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/atc.png" alt="Australian Turf Club">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Australian Turf Club</h2>
											<p class="fs-6 text-white">I worked as part of the WP team to develop a plugin that interfaced with Microsoft Dynamics CRM as we built out a new members portal. The WP theme made use of the Sage Roots file structure.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://www.australianturfclub.com.au/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/crankit.png" alt="Crank It Fitness">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Crankit Fitness</h2>
											<p class="fs-6 text-white">Freelance work for making design and SEO improvements and adding additional features to the existing WordPress theme.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://www.crankitfitness.com.au/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/safarifrank.png" alt="Safari Frank">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Safari Frank</h2>
											<p class="fs-6 text-white">Assisted in the maintenance and feature development of the complex WordPress theme. The theme made use of ACF, WPML, Gravity Forms, Interactive Maps amongst others.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://safarifrank.com.au/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/designomo.png" alt="Designomo">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">Designomo</h2>
											<p class="fs-6 text-white">Created a custom WP Theme for startup interior design e-commerce site.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://designomo.com.au/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="body">
									<div class="imgContainer">
										<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/ddp.png" alt="Dead Drop Productions">
									</div>
									<div class="content d-flex flex-column align-items-center justify-content-center text-center pt-6 pb-6">
										<div class="d-flex justify-content-around align-items-center back-info flex-column">
											<h2 class="text-white website">DeadDropProductions</h2>
											<p class="fs-6 text-white"><a href="https://github.com/byronkeet/DeadDropProductions" target="_blank">DDP</a> was my first ever site built from the ground up using NodeJS, Express, HTML, CSS and JS. The site is for a music producer to download raw tracks from clients in order to mix and master the files before uploading the finished product to the cloud for downloading.</p>
											<a class="button is-primary is-outlined is-rounded contact-button" href="https://ddp-demo.herokuapp.com/" target="_blank"><span>Visit Website </span><span class="icon"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>

					<section id="mentors">
						<div class="mentors bg-primary text-center">
							<h1 class="title">Mentors</h1>
							<p class="description">The remarkable people I have been lucky to learn from.</p>
							<div class="columns container d-flex align-items-center justify-content-around">
								<div class="column">
									<a href="https://www.linkedin.com/in/carbis/" target="_blank">
										<h3>Luke Carbis</h3>
									</a>
									<h5>12 Years Experience</h5>
									<ul>
										<li>Tide</li>
										<li>WP Engine</li>
										<li>Block Lab</li>
										<li>Hello WP</li>
									</ul>
								</div>
								<div class="column">
									<a href="https://www.linkedin.com/in/robstinson/" target="_blank">
										<h3>Rob Stinson</h3>
									</a>
									<h5>8 Years Experience</h5>
									<ul>
										<li>WP Engine</li>
										<li>Block Lab</li>
										<li>XWP</li>
										<li>Hello WP</li>
									</ul>
								</div>
								<div class="column">
									<a href="https://www.linkedin.com/in/michaelvisser/" target="_blank">
										<h3>Michael Visser</h3>
									</a>
									<h5>12 Years Experience</h5>
									<ul>
										<li>Visser Labs</li>
										<li>Cycliq</li>
										<li>Straya.io</li>
										<li>Fuelwatch.io</li>
									</ul>
								</div>
								<div class="column">
									<a href="https://www.linkedin.com/in/jeremyhague/" target="_blank">
										<h3>Jeremy Hague</h3>
									</a>
									<h5>17 Years Experience</h5>
									<ul>
										<li>Koala Boss</li>
										<li>Netralia</li>
										<li>Quest Software</li>
										<li>Codebrewery</li>
									</ul>
								</div>
							</div>
						</div>
					</section>

					<section id="testimonials" class="container">
						<div class="testimonials">
							<div class="text-center">
								<h2>Testimonials</h2>
								<h4>People I've worked with have said some nice things...</h4>
								<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/michael.jpeg" alt="Michael Visser">
											<h4 class="quote">“Byron is a talented independent WordPress Theme and Plugin developer, his studious approach to development and troubleshooting is rarer than hens' teeth. Working with Visser Labs Byron modernised WordPress Plugins in active use by thousands of online store owners and worked one-on-one with customers/store-owners to troubleshoot issues. Nice one Byron!”</h4>
											<h5 class="name">Michael Visser</h5>
										</div>
										<!-- <div class="carousel-item">
											<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/luke.jpeg" alt="Luke Carbis">
											<h4 class="quote">“Some quote from an awesome person I have worked with.”</h4>
											<h5 class="name">Luke Carbis</h5>
										</div>
										<div class="carousel-item">
											<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/images/jeremy.jpeg" alt="Jeremy Hague">
											<h4 class="quote">“Some quote from an awesome person I have worked with.”</h4>
											<h4 class="name">Jeremy Hague</h4>
										</div> -->
									</div>
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
									</div>
								</div>
							</div>
						</div>
					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	<!-- </div> #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
