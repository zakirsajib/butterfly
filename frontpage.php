<?php
/**
 * Template Name: Home Template
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
		
		<img anima-src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob1.svg" class="bgblob1" src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob1.svg"/>
       <img anima-src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblog2.svg" class="bgblog2" src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblog2.svg"/>
       <img anima-src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob3.svg" class="bgblob3" src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob3.svg"/>
       <img anima-src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob4.svg" class="bgblob4" src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob4.svg"/>
		
		
		<div class="section-one">
			<div class="demo-request">
				<h1>Make Feedback Meaningful For<br/> Your Team.</h1>
				<p>Drive conversation with hourly employees and get focused insight for their managers to act on using Butterfly engagement tools.</p>
				<div class="demo-form-box">
					<div class="input-group"><input type="text" class="form-control demo-input" placeholder="Your work email"><span class="input-group-btn"><button class="btn btn-default" type="button" data-toggle="modal" data-target="#reqDemo">Request a demo</button></span></div><!-- /input-group -->
				</div>
			</div>
			<div class="home-carousel">
				<?php get_template_part( 'inc/home', 'carousel' );?>
			</div>
		</div>
		
		
		<div class="client-logos">
			<a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/ge-logo.svg" alt=""></a>
			<a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/coca-cola-logo.svg" alt=""></a>
			<a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/ticketmaster-logo.svg" alt=""></a>
			<a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/dentsu-logo.svg" alt=""></a>
			<a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/ogilvy-logo.svg" alt=""></a>
			<a href=""><img src="<?php echo get_template_directory_uri()?>/assets/img/live-nation-logo.svg" alt=""></a>
		</div>
		
		<div class="why-butterfly" id="why-butterfly">			
			<div class="butterfly-one">
				<h1>Why<br/>Butterfly?</h1>
				<div class="lead">
					<p>Full-circle engagement for employees and managers.</p>
				</div>
				<div class="why-butterfly-contents">
				<p>We created Butterfly with a goal of better engaging the employees within your company and making them as delighted, productive and efficient as possible.</p>
				<p>Butterfly’s tools provide the highest response rate with hourly employees. Our tools seamlessly integrate into the daily routines of employees and their managers. </p>
				<p>By engaging this segment of the workforce that hasn’t traditionally been asked for ongoing feedback, organizations see a direct positive impact on performance.
</p>
				</div>
				<a href="#">Find out how Butterfly works!</a>
		
			</div>
			<div class="butterfly-two">
				<div class="butterfly-right-column">
					<div class="one"><img src="<?php echo get_template_directory_uri()?>/assets/img/PulseSurveys.svg" alt="PulseSurveys"></div>
					<div class="two">
						<h2>Anonymous pulse surveys</h2>
						<div class="strong">to listen to your employees</div>
						<p>Our academically backed survey methodology ensures that you get the most effective feedback from hourly employees.</p>
						<a href="#">Learn more</a>
					</div>
					<div class="three">
						<h2>Dynamic dashboard</h2>
						<div class="strong">to understand how they feel</div>
						<p>Managers have access to real-time survey results and managerial reports that they can export.</p>
						<a href="#">Learn more</a>
					</div>
					<div class="four"><img src="<?php echo get_template_directory_uri()?>/assets/img/DynamicDashboard.svg" alt="DynamicDashboard"></div>
					<div class="five"><img src="<?php echo get_template_directory_uri()?>/assets/img/PersonalGuidance.svg" alt="PersonalGuidance"></div>
					<div class="six">
						<h2>Personal guidance</h2>
						<div class="strong">to act on your knowledge</div>
						<p>Managers are provided with personalized and actionable guidance based on their team’s feedback.</p>
						<a href="#">Learn more</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="home-testimonial">
			<div class="testimonial-area">
				<?php include( get_template_directory() . '/inc/testimonial.php');?>
			</div>
		</div>
		
	</div> <!-- End content-area -->
</div>	<!-- End site-content -->
		
		<!-- We want full width -->
		<?php get_template_part( 'inc/before', 'footer' );?>
		
<?php
get_footer();
