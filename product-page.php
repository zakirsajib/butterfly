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
	<div class="bg"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle.png" class="rectangle"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle-1.png" class="rectangle1"/>
       <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle-2.png" class="rectangle2"/>
        <img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-rectangle.png" class="rectangle3"/></div>
	
<style>.bg .rectangle{background-color:rgba(255,255,255,0);top:44px;height:658px;width:397px;position:absolute;margin:0;left:946px;-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.05}.bg .rectangle1{background-color:rgba(255,255,255,0);top:258px;height:1153px;width:397px;position:absolute;margin:0;left:1484px;-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.05}.bg .rectangle2{background-color:rgba(255,255,255,0);top:647px;height:1207px;width:397px;position:absolute;margin:0;left:475px;-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.05}.bg .rectangle3{background-color:rgba(255,255,255,0);top:1360px;height:658px;width:397px;position:absolute;margin:0;left:847px;-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.05}</style>
	
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
