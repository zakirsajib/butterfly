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
			
       <img src="<?php echo get_template_directory_uri()?>/assets/home/img/butterflywebsitehome-bgblob3.svg" class="bgblog2"/>
		
			<div class="section-one row">
				<div class="demo-request col-lg-6 col-md-6 col-sm-8 col-xs-12">
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
				<div class="home-carousel col-lg-6 col-md-7 col-sm-8 col-xs-9">
				<?php get_template_part( 'inc/home', 'carousel' );?>
			</div>
				<div class="client-logos col-md-12 col-xs-12">
				<?php if( have_rows('sponsors_logo_image') ):
				    while ( have_rows('sponsors_logo_image') ) : the_row();?>
				    	<?php $sponsor_logo = get_sub_field('sponsor_logo'); ?>
				        <a href="<?php the_sub_field('sponsor_logo_url')?>" target="_blank"><img class="svg" src="<?php echo $sponsor_logo['url'];?>" alt=""></a>
				    <?php endwhile;
					else :?>
						<a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/ge-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/coca-cola-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/ticketmaster-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/dentsu-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/ogilvy-logo.svg" alt=""></a><a href="#"><img class="svg" src="<?php echo get_template_directory_uri()?>/assets/img/live-nation-logo.svg" alt=""></a>
			<?php endif;?>
		</div>
			</div>
			
			<div class="why-butterfly row">			
			<div class="butterfly-one col-lg-4 col-md-4 col-sm-12 col-xs-12 affix-butterfly" id="why-butterfly">
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
			
			<div class="butterfly-two one col-lg-8 col-md-8 col-sm-12 col-xs-12">
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
			<div class="home-testimonial col-lg-12">
			<div class="testimonial-area">
				<?php include( get_template_directory() . '/inc/testimonial.php');?>
			</div>
		</div>
		</main><!-- #main -->	
	</div> <!-- End content-area -->
</div>	<!-- End site-content -->
		
		<!-- We want full width -->
		<?php get_template_part( 'inc/before', 'footer' );?>

<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1,'order'=>'DESC','orderby'=> 'post_date'));
while ( $args->have_posts() ) : $args->the_post();?>
<div class="modal blogDetailsTwo" id="blogDetailsTwo-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyblogpost">
            <div class="casestudy">
                <div class="bg"></div>
                <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-butterfly@2x.png" class="butterfly"/>
                    </div>
                <div class="content animated slideInLeft">
                        <div class="workroam">
                            <?php butterfly_get_current_post_categories();?>
                        </div>
                        <div class="theremoteworkinge">
                            <?php the_title();?>
                        </div>
                        <?php if ( has_excerpt() ):?>
                        	<div class="inournewseriesw"><?php the_excerpt();?></div>
                        <?php else:?>
                        <div class="inournewseriesw">
                            In our new series, Work &amp; Roam, we’ll be following our Product and Solutions Analyst John Williams as he travels the world, working remotely from 5 countries. Tune in to see what worked (and what didn’t) for John during each stop, and to dig into how working remotely affects both the worker and the team back home.
                        </div>
                        <?php endif;?>
                        <div class="lisbon featured-img">
	                        <?php if(has_post_thumbnail()):?>
	                        	<?php the_post_thumbnail('full', array( 'class' => 'lisbon1' )); ?>
	                        <?php else:?>
								<img data-src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-lisbon.svg" class="lisbon1 lazyload"/>
							<?php endif;?>
                        </div>
                        
                        <div class="post-contents">
                        	<?php the_content()?>
                        </div>
                        
                    </div>
                <div class="right animated slideInRight">
                    <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-mask-1.png" class="mask"/>
                    <div class="iconclose">
                        <div class="background"></div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                    <div class="date12142018">
                            <span class="span1">DATE</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_date(); ?></span>
                        </div>
                    <div class="separatorhorizontal"><div class="bg1"></div></div>
                    <?php if(has_category()):?>
                    <div class="categoryworkroam">
                            <span class="span1">CATEGORY</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_categories_sidebar();?></span>
                        </div>
                    <div class="separatorhorizontal1"><div class="bg1"></div></div><?php endif;?>
                    <?php if(has_tag()):?>
                    <div class="tagsworklifebalan">
                            <span class="span1">TAGS</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_tags()?></span>
                    </div>
					<div class="separatorhorizontal2"><div class="bg1"></div></div><?php endif;?>
                    <div class="authorjohnwilliams">
                            <span class="span1">AUTHOR</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_author(); ?> </span>
                        </div>
                    <div class="separatorhorizontal3"><div class="bg1"></div></div>
					<div class="share">SHARE</div>
                    <div class="share1">
                    <?php include( get_template_directory() . '/inc/share.php');?>
                        </div>
                    
                    <?php 
		                $next_post = get_next_post();
		                if (!empty( $next_post )): 
							$next_post_id = $next_post->ID;?>
							<div class="nextbutton">
                            <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-rectangle@2x.png" class="rectangle"/>
                            <div class="iconsarrow"><div class="background"></div>
                                <a data-dismiss="modal" data-target="#blogDetailsTwo-<?php echo $next_post_id;?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a data-dismiss="modal" data-target="#blogDetailsTwo-<?php echo $next_post_id;?>" data-toggle="modal"><?php echo esc_attr( $next_post->post_title ); ?></a></span>
                            </div>
                        </div>
						<?php endif;?>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>




<?php
get_footer();
