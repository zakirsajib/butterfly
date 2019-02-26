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
			
       <img src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblog2.svg" class="bgblog2"/>
		
			<div class="section-one">
			<div class="demo-request">
				<?php if(get_field('demo_request_information')):?>
					<?php the_field('demo_request_information');?>
				<?php else:?>
				<h1>Make Feedback Meaningful For<br/> Your Team.</h1>
				<p>Drive conversation with hourly employees and get focused insight for their managers to act on using Butterfly engagement tools.</p>
				<?php endif;?>
				<div class="demo-form-box">
					<div class="input-group"><input type="email" class="form-control demo-input" placeholder="Your work email" name="email"><span class="input-group-btn"><button class="btn btn-default" id="reqDemoBtn" type="button" data-toggle="modal" data-target="#reqDemo"><?php if(get_field('request_button_label')):?><?php the_field('request_button_label');?><?php else:?>Request a demo<?php endif;?></button></span></div><!-- /input-group -->
				</div>
			</div>
			<div class="home-carousel col-lg-7 col-md-6 col-sm-12 col-xs-12">
				<?php get_template_part( 'inc/home', 'carousel' );?>
			</div>
		</div>
			<div class="client-logos">
				<?php if( have_rows('sponsors_logo_image') ):
				    while ( have_rows('sponsors_logo_image') ) : the_row();?>
				    	<?php $sponsor_logo = get_sub_field('sponsor_logo'); ?>
				        <a href="<?php the_sub_field('sponsor_logo_url')?>" target="_blank"><img class="svg" src="<?php echo $sponsor_logo['url'];?>" alt=""></a>
				    <?php endwhile;
					else :?>
						<a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/ge-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/coca-cola-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/ticketmaster-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/dentsu-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/ogilvy-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/live-nation-logo.svg" alt=""></a>
			<?php endif;?>
		</div>
			<div class="why-butterfly row">			
			<div class="butterfly-one col-md-4 affix-butterfly hidden-sm hidden-xs" data-spy="affix" id="why-butterfly">
				<?php if( get_field('why_left_column') ): ?>
					<?php $why_left_column = get_field('why_left_column');?>
					<h1><?php echo $why_left_column['why_title'];?></h1>
					<div class="lead"><p><?php echo $why_left_column['why_sub_title'];?></p></div>
			<div class="why-butterfly-contents"><?php echo $why_left_column['why_descriptions'];?></div>
					<a href="<?php echo $why_left_column['find_out_more_url'];?>"><?php echo $why_left_column['find_out_more_texts'];?></a>
				<?php else:?>
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
				<?php endif;?>
			</div>
			<div class="butterfly-one col-md-4 hidden-lg hidden-md">
				<?php if( get_field('why_left_column') ): ?>
					<?php $why_left_column = get_field('why_left_column');?>
					<h1><?php echo $why_left_column['why_title'];?></h1>
					<div class="lead"><p><?php echo $why_left_column['why_sub_title'];?></p></div>
			<div class="why-butterfly-contents"><?php echo $why_left_column['why_descriptions'];?></div>
					<a href="<?php echo $why_left_column['find_out_more_url'];?>"><?php echo $why_left_column['find_out_more_texts'];?></a>
				<?php else:?>
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
				<?php endif;?>
			</div>
			<div class="butterfly-two col-md-8">
				<div class="butterfly-right-column">
					<?php if( get_field('right_column') ):
						$why_right_column = get_field('right_column');?>
						<div class="one"><img src="<?php echo $why_right_column['image_one'];?>" alt="PulseSurveys"></div>
						<div class="two"><?php echo $why_right_column['descriptions_one'];?></div>
					<div class="three"><?php echo $why_right_column['descriptions_two'];?></div>
					<div class="four"><img src="<?php echo get_template_directory_uri()?>/assets/img/DynamicDashboard.svg" alt="DynamicDashboard"></div>
					<div class="five"><img src="<?php echo $why_right_column['image_two'];?>" alt="PersonalGuidance"></div>
					<div class="six"><?php echo $why_right_column['descriptions_three'];?></div>
					<?php else:?>
					<div class="one"><img src="<?php echo $why_right_column['image_three'];?>" alt="PulseSurveys"></div>
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
					<div class="four">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/DynamicDashboard.svg" alt="DynamicDashboard"></div>
					<div class="five">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/PersonalGuidance.svg" alt="PersonalGuidance"></div>
					<div class="six">
						<h2>Personal guidance</h2>
						<div class="strong">to act on your knowledge</div>
						<p>Managers are provided with personalized and actionable guidance based on their team’s feedback.</p>
						<a href="#">Learn more</a>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
			<div class="home-testimonial">
			<div class="testimonial-area">
				<?php include( get_template_directory() . '/inc/testimonial.php');?>
			</div>
		</div>
		</main><!-- #main -->	
	</div> <!-- End content-area -->
</div>	<!-- End site-content -->
		
		<!-- We want full width -->
		<?php get_template_part( 'inc/before', 'footer' );?>
<?php
get_footer();
