<div class="mega-menu modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg container-fluid" role="document">
		
		<img anima-src="<?php echo get_template_directory_uri()?>/assets/menu/img/butterflywebsitemenuopen-bg.png" class="bg" src="<?php echo get_template_directory_uri()?>/assets/menu/img/butterflywebsitemenuopen-bg.png"/>
		
		<img anima-src="<?php echo get_template_directory_uri()?>/assets/menu/img/butterflywebsitemenuopen-rectangle.png" class="rectangle" src="<?php echo get_template_directory_uri()?>/assets/menu/img/butterflywebsitemenuopen-rectangle.png"/>
		
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
								<input type="text" class="form-control demo-input" placeholder="Your work email">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" data-toggle="modal" data-target="#reqDemo">Request a demo</button>
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
		</div>
		</div>
	</div>
</div><!-- .mega-menu -->
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