<?php
/**
 * Template Name: Home
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

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
			while ( have_posts() ) :
				the_post();
					//get_template_part( 'template-parts/content', 'home' );
				endwhile; // End of the loop.?>
		</main><!-- #main -->
		<div class="section-one home-padding">
			<div class="demo-request">
				<h1>Make Feedback Meaningful For Your Team.</h1>
				<p>Drive conversation with hourly employees and get focused insight for their managers to act on using Butterfly engagement tools.</p>
				<div class="demo-form-box">
					<div class="input-group"><input type="text" class="form-control demo-input" placeholder="Your work email"><span class="input-group-btn"><button class="btn btn-default" type="button">Request a demo</button></span></div><!-- /input-group -->
				</div>
			</div>
			<div class="home-carousel"></div>
		</div>
		
		
		<div class="client-logos home-padding">
			
		</div>
		
		<div class="why-butterfly home-padding" id="why-butterfly">
			<div class="butterfly-one">
				<h1>Why<br/>Butterfly?</h1>
				<div class="lead">
					<p>Full-circle engagement for employees and managers.</p>
				</div>
				<p>We created Butterfly with a goal of better engaging the employees within your company and making them as delighted, productive and efficient as possible.</p>
				<p>Butterfly’s tools provide the highest response rate with hourly employees. Our tools seamlessly integrate into the daily routines of employees and their managers. </p>
				<p>By engaging this segment of the workforce that hasn’t traditionally been asked for ongoing feedback, organizations see a direct positive impact on performance.
</p>
				<a href="#">Find out how Butterfly works!</a>
		
			</div>
			<div class="butterfly-two">
				
			</div>
		</div>
		
		<div class="home-testimonial home-padding">
			<div class="testimonial-area">
				<?php include( get_template_directory() . '/inc/testimonial.php');?>
			</div>
		</div>
		<div class="home-footer home-padding">
			<div class="demo-area">
				<div class="demo-form-box">
					<h4>Get started now!</h4>
					<div class="input-group"><input type="text" class="form-control demo-input" placeholder="Your work email"><span class="input-group-btn"><button class="btn btn-default" type="button">Request a demo</button></span></div><!-- /input-group -->
				</div>
				<div class="latest-blog-one">
				<?php include( get_template_directory() . '/inc/megamenu-blog.php');?>
				</div>
			</div>
		</div>
		
	</div><!-- #primary -->

<?php
get_footer();
