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
					<?php include( get_template_directory() . '/inc/testimonial.php');?>
				</div>
			</div>
			<div class="dropdown-signin">
				<ul><li>Already using Butterfly? <a href="#">Sign in</a></li></ul>
			</div>
		</div><!-- .dropdown -->
	</div><!-- .mega-menu -->