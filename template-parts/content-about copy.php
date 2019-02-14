<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">Great managers make<br/> great teams!</h1>
	</header><!-- .entry-header -->

	<div class="entry-content butterflywebsiteabout">
		<div class="how-it-works" id="how-it-works">
			<div class="for-people customers">
				<ul class="nav nav-tabs" role="tablist">
					<li><h2>Customers</h2></li>
					<li role="presentation" class="active"><a href="#clientlist" aria-controls="clientlist" role="tab" data-toggle="tab">Client list</a></li>
					<li role="presentation"><a href="#casestudies" aria-controls="casestudies" role="tab" data-toggle="tab">Case studies</a></li>
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in tab active" id="clientlist">
					    
					<div class="logo">
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-gelogo-1.svg" class="gelogo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-cocacolalogo.svg" class="cocacolalogo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ticketmasterlogo-1.svg" class="ticketmasterlogo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-dentsulogo.svg" class="dentsulogo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-ogilvylogo-1.svg" class="ogilvylogo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="<?php echo get_template_directory_uri()?>/assets/about/img/butterflywebsiteabout-livenation-1@2x.png" class="livenation" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    
                    
                    <div class="seperatorvertical">
                        <div class="rectangle">
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
                        
					    
				    </div>
				    <div role="tabpanel" class="tab-pane fade tab" id="casestudies"></div>
				</div>
			</div>
		</div>
		<div class="features" id="features">
			<div class="for-people">
				<ul class="nav nav-tabs" role="tablist">
					<li><h2>Partners</h2></li>
					<li role="presentation" class="active"><a href="#academic" aria-controls="academic" role="tab" data-toggle="tab">Academic</a></li>
					<li role="presentation"><a href="#experts" aria-controls="experts" role="tab" data-toggle="tab">Experts</a></li>
					
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="academic"></div>
				    <div role="tabpanel" class="tab-pane fade" id="experts"></div>
				</div>
			</div>
		</div>
		
		<div class="features" id="media">
			<div class="for-people">
				<ul class="nav nav-tabs" role="tablist">
					<li><h2>Media</h2></li>
					<li role="presentation" class="active"><a href="#aboutus" aria-controls="aboutus" role="tab" data-toggle="tab">About us</a></li>
					<li role="presentation"><a href="#byus" aria-controls="byus" role="tab" data-toggle="tab">By us</a></li>
					
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="aboutus"></div>
				    <div role="tabpanel" class="tab-pane fade" id="byus">
					    <div class="byus-contents">
						    <div class="item-one item">
							    <img src="">
							    <p>Get our e-book</p>
							    <p>How to Become a Better Manager in 50 Days</p>
							    <button type="button" id="myButton1" data-loading-text="download e-book" class="btn btn-primary">Get PDF</button>
						    </div>
						    <div class="item-two item">
							    <img src="">
							    <p>Get our e-book</p>
							    <p>How to Become a Better Manager in 50 Days</p>
							    <button type="button" id="myButton2" data-loading-text="download e-book" class="btn btn-primary">Get PDF</button>
						    </div>
					    </div>
				</div>
				</div>
			</div>
		</div>

		<div class="features" id="company">
			<div class="for-people">
				<h2>Company</h2>
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="personone">Person 1</div>
				    <div role="tabpanel" class="tab-pane fade" id="persontwo">Person 2</div>
				    <div role="tabpanel" class="tab-pane fade" id="personthree">Person 3</div>
				    <div role="tabpanel" class="tab-pane fade" id="personfour">Person 4</div>
				    <div role="tabpanel" class="tab-pane fade" id="personfive">Person 5</div>
				    <div role="tabpanel" class="tab-pane fade" id="personsix">Person 6</div>
				</div>
				
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#personone" aria-controls="personone" role="tab" data-toggle="tab">Person 1</a></li>
					<li role="presentation"><a href="#persontwo" aria-controls="persontwo" role="tab" data-toggle="tab">Person 2</a></li>
					<li role="presentation"><a href="#personthree" aria-controls="personthree" role="tab" data-toggle="tab">Person 3</a></li>
					<li role="presentation"><a href="#personfour" aria-controls="personfour" role="tab" data-toggle="tab">Person 4</a></li>
					<li role="presentation"><a href="#personfive" aria-controls="personfive" role="tab" data-toggle="tab">Person 5</a></li>
					<li role="presentation"><a href="#personsix" aria-controls="personsix" role="tab" data-toggle="tab">Person 6</a></li>
					
				</ul>
			</div>
		</div>		
		<?php the_content();?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
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