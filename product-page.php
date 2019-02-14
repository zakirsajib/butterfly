<?php
/**
 * Template Name: Product Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

get_header('product');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'product' );
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->		
	</div><!-- End content-area #primary -->
</div>	<!-- End site-content -->
<!-- We want full width -->
<?php get_template_part( 'inc/before', 'footer' );?>

<?php
get_footer();
