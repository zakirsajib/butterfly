<div class="mega-menu">
		<div class="mega-menu-top">
			<div class="mega-menu-logo">
				<?php the_custom_logo();?>
			</div>
			<div class="mega-menu-close-icon">
			<a href="#" class="menu-icon">CLOSE &nbsp;&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri()?>/assets/img/combined-shapeX.svg" class="close-icon-Combined-Shape" alt=""></a></div>
		</div>
		
		<div class="dropdown-contents">
			<?php
				wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				) );
			?>
			<div class="clearfix"></div>
			<div class="demo-form">
				<div class="demo-area">
					<div class="demo-form-box">
						<h4>Get started now!</h4>
						<div class="input-group">
							<input type="text" class="form-control demo-input" placeholder="Your work email">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Request a demo</button>
							</span>
						</div><!-- /input-group -->
					</div>
					<div class="latest-blog-one">
						<?php include( get_template_directory() . '/inc/megamenu-blog.php');?>
					</div>
				</div>
				<div class="horizontal-line"></div>
				<div class="testimonial-area">
					<?php 
						$tag_args=array(
					    'posts_per_page' => 1, 
					    'post_type'=> 'b_testimonial',
					    'orderby' => 'rand'
					);
					$the_query = new WP_Query($tag_args);
					
					if ( $the_query->have_posts() ):
						while ( $the_query->have_posts() ): $the_query->the_post();?>
						<div class="testimonial-statements">
							<p><?php the_content()?></p>
						</div>
						<div class="company-details">	
							<div class="company-logo">
								<?php if(get_field('company_logo')):?>
									<a href="<?php the_field('logo_url')?>" target="_blank"><img src="<?php the_field('company_logo')?>" alt=""></a>
								<?php else:?>
									<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/ogilvy-logo.svg" alt=""></a>
								<?php endif;?>
							</div>
							<div class="horizontal-line"></div>
							<div class="person-details">
								<?php if(get_field('person_name')|| get_field('person_position') ):?>
									<p class="person-name"><?php the_field('person_name')?></p>
									<p class="person-position"><?php the_field('person_position')?></p>
								<?php else:?>
									<p class="person-name">Benjamin Snyers</p>
									<p class="person-position">Managing Director at Ogilvy</p>
								<?php endif;?>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata();
					else:
						// Show dummy data from designs
						include( get_template_directory() . '/inc/dummy-testimonial.php');
					endif;?>
				</div>
			</div>
			<div class="dropdown-signin">
				<ul><li>Already using Butterfly? <a href="#">Sign in</a></li></ul>
			</div>
		</div><!-- .dropdown -->
	</div><!-- .mega-menu -->