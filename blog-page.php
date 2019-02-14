<?php
/**
 * Template Name: Blog Template
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

get_header('blog');
?>

<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'blog' );
	endwhile; // End of the loop.
?>

</div>	<!-- End site-content -->
		
<!-- We want full width -->
<?php get_template_part( 'inc/before', 'footer' );
get_footer();