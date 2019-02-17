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
					<div class="footer-social">
						<ul>
							<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/facebook.svg" alt="Butterfly Facebook"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/instagram.svg" alt="Butterfly Instagram"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/twitter.svg" alt="Butterfly Twitter"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/linkedin.svg" alt="Butterfly LinkedIn"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/link.svg" alt="Butterfly"></a></li>
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
						<div class="copyright col-md-7 col-sm-12 col-xs-12 desktop">
							<?php $current_year = date('Y');?>
							<p>© <?php echo $current_year?>. Appynest Inc. - All rights reserved - <a href="#">Legal information</a></p>
						</div>
						<div class="copyright col-md-7 col-sm-12 col-xs-12 mobile">
							<div class="col-one">
								<?php $current_year = date('Y');?>
								<p>© <?php echo $current_year?>. Appynest Inc.</p>
							</div>
							<div class="col-two">
								<p>All rights reserved - <a href="#">Legal information</a></p>
							</div>
						</div>
						<div class="company-footer col-md-5 col-sm-12 col-xs-12">
							<p>A First Growth VC Company | Made in New York</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div class="modal" id="reqDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyrequestdemoform">
            <div class="tryfree">
                    <div class="bg"></div>
                    <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle.png" class="rectangle"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-1.png" class="rectangle1"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-2.png" class="rectangle2"/>
                    <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-butterfly@2x.png" class="butterfly"/>
                    </div>
                    <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/img/combined-shapeX.svg" class="hidden-lg mobile-icon-close"/></a>
                    <div class="form animated slideInLeft">
                        <div class="our-demo-form">
	                        
                        <?php echo do_shortcode('[ninja_form id=1]	')?>
                        </div>
<!--
                        <div class="websiteformfield">
                            <div class="rectangle4">
                            </div>
                            <div class="yourworkemail">
                                |
                            </div>
                            <div class="iconclose">
                                <div class="background">
                                </div>
                                <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-user.svg" class="user" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-user.svg"/>
                            </div>
                        </div>
                        <div class="websiteformfield1">
                            <div class="rectangle4">
                            </div>
                            <div class="yourworkemail">
                                Last name
                            </div>
                            <div class="iconclose">
                                <div class="background">
                                </div>
                                <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-user-1.svg" class="user" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-user-1.svg"/>
                            </div>
                        </div>
                        <div class="websiteformfield2">
                            <div class="rectangle4">
                            </div>
                            <div class="yourworkemail">
                                hello@butterfly.ai
                            </div>
                            <div class="iconclose">
                                <div class="background">
                                </div>
                                <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-email.svg" class="email" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-email.svg"/>
                            </div>
                        </div>
                        <div class="websiteformfield3">
                            <div class="rectangle4">
                            </div>
                            <div class="yourworkemail">
                                Company name
                            </div>
                            <div class="iconclose">
                                <div class="background">
                                </div>
                                <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-company.svg" class="company" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-company.svg"/>
                            </div>
                        </div>
                        <div class="websiteformfield4">
                            <div class="rectangle4">
                            </div>
                            <div class="yourworkemail">
                                Company size
                            </div>
                            <div class="iconclose">
                                <div class="background">
                                </div>
                                <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-people.svg" class="people" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-people.svg"/>
                            </div>
                        </div>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-arrowcarrot.svg" class="arrowcarrot" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-arrowcarrot.svg"/>
                        <div class="websiteformfield5">
                            <div class="rectangle4"></div>
                            <div class="yourworkemail">
                                Phone n°
                            </div>
                        </div>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-arrowcarrot.svg" class="arrowcarrot1" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-arrowcarrot.svg"/>
                        <div class="a32">
                            +32
                        </div>
                        <div class="rectangle3">
                        </div>
                        <div class="letu2019sgo">
                            Let’s go!
                        </div>
                        <div class="rectangle11">
                        </div>
                        <div class="keepmeupdatedonn">
                            Keep me updated on news from Butterfly
                        </div>
-->
                    </div>
                    <div class="right animated slideInRight hidden-xs hidden-sm">
                        <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg-1.png" class="bg1"/>
                        <div class="iconclose">
                            <div class="background">
                            </div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                        <div class="separatorhorizontal">
                            <div class="bg2">
                            </div>
                        </div>
                        <div class="u201cbutterflypowerrea">
                            “Butterfly power real time management with constant insight into my team’s mood and engagement. I can turn potential challenges into motivational moments”
                        </div>
                        <div class="benjaminsnyers">
                            Benjamin Snyers
                        </div>
                        <div class="managingdirectorat">
                            Managing Director at Ogilvy
                        </div>
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-gelogo.svg" class="gelogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-cocacolalogo.svg" class="cocacolalogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ticketmasterlogo.svg" class="ticketmasterlogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-dentsulogo.svg" class="dentsulogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ogilvylogo.svg" class="ogilvylogo"/>
                            <img src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-livenation@2x.png" class="livenation"/>
                        </div>
                        <div class="wealreadyworkwith">
                            We already work with the<br />following companies:
                        </div>
                    </div>
                </div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<noscript><div id="nonjsmode" style="font-family:sans-serif;position:fixed;top:0;left:0;width:100%;z-index:9999;text-align:center;font-weight:700;font-size:120%;color:#FFF;background-color:#F7522F;padding:5px 0;">JavaScript is not enabled!</div></noscript>
</body>
</html>
