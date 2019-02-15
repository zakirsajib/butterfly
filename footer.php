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
<!--
<script>
    anima_isHidden = function(e) {
        if (!(e instanceof HTMLElement)) return !1;
        if (getComputedStyle(e).display == "none") return !0; else if (e.parentNode && anima_isHidden(e.parentNode)) return !0;
        return !1;
    };
    anima_loadAsyncSrcForTag = function(tag) {
        var elements = document.getElementsByTagName(tag);
        var toLoad = [];
        for (var i = 0; i < elements.length; i++) {
            var e = elements[i];
            var src = e.getAttribute("src");
            var loaded = (src != undefined && src.length > 0 && src != 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
            if (loaded) continue;
            var asyncSrc = e.getAttribute("anima-src");
            if (asyncSrc == undefined || asyncSrc.length == 0) continue;
            if (anima_isHidden(e)) continue;
            toLoad.push(e);
        }
        toLoad.sort(function(a, b) {
            return anima_getTop(a) - anima_getTop(b);
        });
        for (var i = 0; i < toLoad.length; i++) {
            var e = toLoad[i];
            var asyncSrc = e.getAttribute("anima-src");
            e.setAttribute("src", asyncSrc);
        }
    };
    anima_pauseHiddenVideos = function(tag) {
        var elements = document.getElementsByTagName("video");
        for (var i = 0; i < elements.length; i++) {
            var e = elements[i];
            var isPlaying = !!(e.currentTime > 0 && !e.paused && !e.ended && e.readyState > 2);
            var isHidden = anima_isHidden(e);
            if (!isPlaying && !isHidden && e.getAttribute("autoplay") == "autoplay") {
                e.play();
            } else if (isPlaying && isHidden) {
                e.pause();
            }
        }
    };
    anima_loadAsyncSrc = function(tag) {
        anima_loadAsyncSrcForTag("img");
        anima_loadAsyncSrcForTag("iframe");
        anima_loadAsyncSrcForTag("video");
        anima_pauseHiddenVideos();
    };
    var anima_getTop = function(e) {
        var top = 0;
        do {
            top += e.offsetTop || 0;
            e = e.offsetParent;
        } while (e);
        return top;
    };
    anima_loadAsyncSrc();
    anima_old_onResize = window.onresize;
    anima_new_onResize = undefined;
    anima_updateOnResize = function() {
        if (anima_new_onResize == undefined || window.onresize != anima_new_onResize) {
            anima_new_onResize = function(x) {
                if (anima_old_onResize != undefined) anima_old_onResize(x);
                anima_loadAsyncSrc();
            };
            window.onresize = anima_new_onResize;
            setTimeout(function() {
                anima_updateOnResize();
            }, 3000);
        }
    };
    anima_updateOnResize();
    setTimeout(function() {
        anima_loadAsyncSrc();
    }, 200);
</script>
-->
<div class="modal" id="reqDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyrequestdemoform">
            <div class="tryfree">
                    <div class="bg"></div>
                    <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle.png" class="rectangle" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle.png"/>
                    <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-1.png" class="rectangle1" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-1.png"/>
                    <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-2.png" class="rectangle2" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-rectangle-2.png"/>
                    <div class="brandingbutterflyicon">
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg@2x.png" class="bg1" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg@2x.png"/>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-butterfly@2x.png" class="butterfly" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-butterfly@2x.png"/>
                    </div>
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
                    <div class="right animated slideInRight">
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg-1.png" class="bg1" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-bg-1.png"/>
                        <div class="iconclose">
                            <div class="background">
                            </div>
                            <a data-dismiss="modal" aria-label="Close"><img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-combined-shape.svg" class="combinedshape" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-combined-shape.svg"/></a>
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
                            <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-gelogo.svg" class="gelogo" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-gelogo.svg"/>
                            <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-cocacolalogo.svg" class="cocacolalogo" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-cocacolalogo.svg"/>
                            <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ticketmasterlogo.svg" class="ticketmasterlogo" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ticketmasterlogo.svg"/>
                            <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-dentsulogo.svg" class="dentsulogo" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-dentsulogo.svg"/>
                            <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ogilvylogo.svg" class="ogilvylogo" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-ogilvylogo.svg"/>
                            <img anima-src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-livenation@2x.png" class="livenation" src="<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-livenation@2x.png"/>
                        </div>
                        <div class="wealreadyworkwith">
                            We already work with the<br />following companies:
                        </div>
                    </div>
                </div>
		</div>
	</div>
</div>


<!--
<style>
	
	.email {
  		background: url( '<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-email.svg' ) no-repeat;
  		background-position: 12px 50%;
  	}
  	.first-name {
  		background: url( '<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-user-1.svg' ) no-repeat;
  		background-position: 12px 50%;
  	}
  	.last-name {
  		background: url( '<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-user-1.svg' ) no-repeat;
  		background-position: 12px 50%;
  	}
  	.company-name {
  		background: url( '<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-company.svg' ) no-repeat;
  		background-position: 12px 50%;
  	}
  	.company-size {
  		background: url( '<?php echo get_template_directory_uri()?>/assets/demo/img/butterflyrequestdemoform-people.svg' ) no-repeat;
  		background-position: 12px 50%;
  		text-indent: 40px;
  	}
  	.phone-num {
  		
  	}
  	  	
  	.our-demo-form .nf-field-element .demo-submit{
	  	width: 200px;
	  	height: 56px;
	  	border-radius: 32px;
	  	background-color: #532ee4;
		font-family : "Muli", Helvetica, Arial, serif;
		font-size: 24px;
		font-weight: 900;
		font-style: normal;
		font-stretch: normal;
		line-height: normal;
		letter-spacing: normal;
		text-align: center;
		color: #ffffff;
		padding: 0;
		text-align: center;
  	}
  	
  	.nf-form-fields-required{
	  	display: none;
  	}
  	.our-demo-form {
    	padding-top: 11em;
	}
	
	.our-demo-form .nf-field-container{
		margin-bottom: 10px;
	}
	
	.our-demo-form .nf-field-element input, 
	.our-demo-form .nf-field-element select, 
	.our-demo-form .nf-field-element textarea{
		font-family : "Muli", Helvetica, Arial, serif;
		font-size: 18px;
		font-weight: 400;
		font-style: normal;
		font-stretch: normal;
		line-height: normal;
		letter-spacing: normal;
		color: #9b9b9b;
		background-color: rgba(255, 255, 255, 1.0);
		height: 48px;
		box-sizing: border-box;
		border-radius: 24px;
		border-style: solid;
		border-width: 1px;
		border-color: rgba(0, 0, 0, 0.1);
		-ms-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		padding-left: 46px;
	}
	
	.our-demo-form .nf-field-element input:focus, 
	.our-demo-form .nf-field-element select:focus{
		outline: 0;
		border: 1px solid #532ee4;
	}
	.our-demo-form .nf-field-container.checkbox-container{
		padding: 0 0 5px;
		margin-bottom: 0;
	}
	.our-demo-form .nf-field-container.checkbox-container label{
		font-family : "Muli", Helvetica, Arial, serif;
		font-size: 14px;
		font-weight: 400;
		font-style: normal;
		font-stretch: normal;
		line-height: normal;
		letter-spacing: normal;
		color: #9b9b9b;
	}
	.our-demo-form .nf-field-container.company-size-container{
		font-family : "Muli", Helvetica, Arial, serif;
		font-size: 18px;
		font-weight: 400;
		font-style: normal;
		font-stretch: normal;
		line-height: normal;
		letter-spacing: normal;
		color: #9b9b9b;
		background-color: rgba(255, 255, 255, 1.0);
		height: 48px;
		box-sizing: border-box;
		border-radius: 24px;
		border-style: solid;
		border-width: 1px;
		border-color: rgba(0, 0, 0, 0.1);
		-ms-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		overflow: hidden;	
	}
	
	.our-demo-form .nf-field-container.company-size-container .company-size{
		border: 0;
	}
	.our-demo-form .nf-field-container.company-size-container:focus {
    	border: 1px solid #532ee4;
		outline: 0;
	}
	
	
</style>
-->

<?php wp_footer(); ?>
<noscript><div id="nonjsmode" style="font-family:sans-serif;position:fixed;top:0;left:0;width:100%;z-index:9999;text-align:center;font-weight:700;font-size:120%;color:#FFF;background-color:#F7522F;padding:5px 0;">JavaScript is not enabled!</div></noscript>
</body>
</html>
