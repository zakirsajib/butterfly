<?php
/**
 *  Template Name: About Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

get_header('about');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'about' );
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	</div><!-- #content from about header-->
	
	<div class="contact-map">
		<div class="container">
			<div class="content-area">
				<div class="contact-details">
					<h2>Contact</h2>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'inc/before', 'footer' );?>
<?php
get_footer('footer');
