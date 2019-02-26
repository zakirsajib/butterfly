<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Butterfly
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container-fluid">
			<div class="footer-butterfly"><?php the_custom_logo();?></div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="footer-logo">
						<?php 
							$butterfly_name = get_bloginfo( 'name', 'display' );
							if ( $butterfly_name || is_customize_preview() ) :?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) );?>" rel="home"><?php echo $butterfly_name ?></a><?php endif;
							$butterfly_description = get_bloginfo( 'description', 'display' );
							if ( $butterfly_description || is_customize_preview() ) :?>
								<p class="site-description"><?php echo $butterfly_description;?></p>
							<?php endif; ?>
					</div>
					<?php $social_facebook = fw_get_db_settings_option('social_facebook');
						$social_instagram = fw_get_db_settings_option('social_instagram');
						$social_twitter = fw_get_db_settings_option('social_twitter');
						$social_linkedin = fw_get_db_settings_option('social_linkedin');
						$social_link = fw_get_db_settings_option('social_link');
						
						$footer_company_name = fw_get_db_settings_option('footer_company_name');
						$footer_copyright_title_one = fw_get_db_settings_option('footer_copyright_title_one');
						$footer_copyright_title_two = fw_get_db_settings_option('footer_copyright_title_two');
					?>
					<div class="footer-social">
						<ul>
							<li><a href="<?php echo $social_facebook ?>" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/facebook.svg" alt="Butterfly Facebook"></a></li>
							<li><a href="<?php echo $social_instagram ?>" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/instagram.svg" alt="Butterfly Instagram"></a></li>
							<li><a href="<?php echo $social_twitter ?>" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/twitter.svg" alt="Butterfly Twitter"></a></li>
							<li><a href="<?php echo $social_linkedin ?>" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/linkedin.svg" alt="Butterfly LinkedIn"></a></li>
							<li><a href="mailto:<?php echo $social_link ?>" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/link.svg" alt="Butterfly"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-12">
					<?php
						wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						) );
					?>
					
					<hr>
					<div class="row">
						<div class="copyright col-lg-7 col-md-12 col-sm-12 col-xs-12 desktop">
							<?php $current_year = date('Y');?>
							<p>© <?php echo $current_year?>. <?php echo $footer_company_name ?> - <?php echo $footer_copyright_title_one ?></p>
						</div>
						<div class="copyright col-md-7 col-sm-12 col-xs-12 mobile">
							<div class="col-one">
								<?php $current_year = date('Y');?>
								<p>© <?php echo $current_year?>. <?php echo $footer_company_name ?></p>
							</div>
							<div class="col-two">
								<p><?php echo $footer_copyright_title_one ?></a></p>
							</div>
						</div>
						<div class="company-footer col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p><?php echo $footer_copyright_title_two ?></p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php include( get_template_directory() . '/inc/reqDemo.php');?>

<?php wp_footer(); ?>
<noscript><div id="nonjsmode" style="font-family:sans-serif;position:fixed;top:0;left:0;width:100%;z-index:9999;text-align:center;font-weight:700;font-size:120%;color:#FFF;background-color:#F7522F;padding:5px 0;">JavaScript is not enabled!</div></noscript>
</body>
</html>
