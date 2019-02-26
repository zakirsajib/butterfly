<div class="mega-menu modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg container-fluid" role="document">
		
		<img src="<?php echo get_template_directory_uri()?>/assets/menu/img/butterflywebsitemenuopen-bg.png" class="bg"/>
		
		<img src="<?php echo get_template_directory_uri()?>/assets/menu/img/butterflywebsitemenuopen-rectangle.png" class="rectangle"/>
		
		<div class="modal-content">
			<div class="modal-header">
				<div class="mega-menu-top">
					<div class="mega-menu-logo">
						<?php the_custom_logo();?>
					</div>
					<div class="mega-menu-close-icon">
					<a href="#" class="menu-icon" data-dismiss="modal">CLOSE &nbsp;&nbsp;&nbsp;<img data-dismiss="modal" src="<?php echo get_template_directory_uri()?>/assets/img/combined-shapeX.svg" class="close-icon-Combined-Shape" alt=""></a></div>
				</div>
			</div>
			<div class="modal-body">
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
								<input type="email" class="form-control demo-input" placeholder="Your work email" name="email" required><span class="input-group-btn"><button class="btn btn-default" id="reqDemoBtn4" type="button" data-toggle="modal" data-target="#reqDemo">Request a demo</button>
								</span>
							</div><!-- /input-group -->
						</div>
						<div class="latest-blog-one">
							<?php include( get_template_directory() . '/inc/megamenu-blog.php');?>
						</div>
					</div>
					<div class="horizontal-line"></div>
					<div class="testimonial-area">
						<?php include( get_template_directory() . '/inc/testimonial.php');?>
					</div>
				</div>
				<div class="dropdown-signin">
					<?php $signin_url = fw_get_db_settings_option('signin-url');?>
					<ul><li>Already using Butterfly? <a href="<?php echo $signin_url ?>" target="_blank">Sign in</a></li></ul>
				</div>
			</div><!-- .dropdown -->
		</div>
		</div>
	</div>
</div><!-- .mega-menu -->