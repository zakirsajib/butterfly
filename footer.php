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
<?php wp_footer(); ?>
<noscript><div id="nonjsmode" style="font-family:sans-serif;position:fixed;top:0;left:0;width:100%;z-index:9999;text-align:center;font-weight:700;font-size:120%;color:#FFF;background-color:#F7522F;padding:5px 0;">JavaScript is not enabled!</div></noscript>
</body>
</html>
