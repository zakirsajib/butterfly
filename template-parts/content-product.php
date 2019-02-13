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
		<h1 class="entry-title">Set up a more productive work environment for your teams.</h1>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="how-it-works" id="how-it-works">
			<div class="for-people">
				<ul class="nav nav-tabs" role="tablist">
					<li><h2>How it works?</h2></li>
					<li role="presentation" class="active"><a href="#howempl" aria-controls="howempl" role="tab" data-toggle="tab">For employees</a></li>
					<li role="presentation"><a href="#howmang" aria-controls="howmang" role="tab" data-toggle="tab">For managers</a></li>
					<li role="presentation" class="last"><a href="#howhr" aria-controls="howhr" role="tab" data-toggle="tab">For HR teams</a></li>
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in tab active" id="howempl">
					    
				    </div>
				    <div role="tabpanel" class="tab-pane fade tab" id="howmang">
					    <div class="xx">
						    <div class="one">
								<h2>Integrate into employees' routine</h2>
								<p>Our surveys work with your systems. Employees answer engagement surveys in seconds while they clock in or out, eliminating distractions and maximizing their time.</p>
								<figcaption align="left">fig a. Slack</figcaption>
							</div>
							<div class="two">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@2x.jpg 2x, <?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@3x.jpg 3x"alt="Integrate into employees' routine">
							</div>
					    </div>
					    
					    <div class="howmang-contents">
							<div class="three">
								<h2>Access a dynamic dashboard</h2>
								<p>Easily gather and act on feedback. Track survey results in real time and export managerial reports to spark transparent conversation between you and your employees.</p>
								<figcaption align="left">fig b. Butterfly dashboard for managers</figcaption>
							</div>
							<div class="four"><img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Access a dynamic dashboard"></div>
							<div class="five">
								<h2>Receive personalized guidance</h2>
								<p>Use what you hear from your team to grow as a manager. See what areas need attention and focus on your improvement to generate impactful change.</p>
								<figcaption align="left">fig c. Butterfly AI assistant</figcaption>
							</div>
							<div class="six">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Receive personalized guidance">
							</div>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane fade tab" id="howhr">
					    
				    </div>
				</div>
			</div>
		</div>
		<div class="features" id="features">
			<div class="for-people">
				<ul class="nav nav-tabs" role="tablist">
					<li><h2>Features</h2></li>
					<li role="presentation" class="active"><a href="#featempl" aria-controls="featempl" role="tab" data-toggle="tab">For employees</a></li>
					<li role="presentation"><a href="#featmang" aria-controls="featmang" role="tab" data-toggle="tab">For managers</a></li>
					<li role="presentation" class="last"><a href="#feathr" aria-controls="feathr" role="tab" data-toggle="tab">For HR teams</a></li>
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="featempl"></div>
				    <div role="tabpanel" class="tab-pane fade" id="featmang"></div>
				    <div role="tabpanel" class="tab-pane fade" id="feathr">
					    <div class="feathr-contents">
						    <div class="feathr-accordion">
							    <ul class="nav nav-pills nav-stacked">
								    <li class="active"><a data-toggle="tab" href="#collapseOne">Dashboard</a><p>Real-time insights to gauge your company’s overall feeling all the way to the individual employee.</p></li>
								    <li><a data-toggle="tab" href="#collapseTwo">Feature #2</a><p>Real-time insights to gauge your company’s overall feeling all the way to the individual employee.</p></li>
								    <li><a data-toggle="tab" href="#collapseThree">Feature #3</a><p>Real-time insights to gauge your company’s overall feeling all the way to the individual employee.</p></li>
							    </ul>
						    </div>
						    <div class="feathr-thumbnail">
							    <div class="tab-content">
							    <div id="collapseOne" class="tab-pane active"><img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/features/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/features/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/features/bitmap@3x.jpg 3x" alt=""></div>
							    <div id="collapseTwo" class="tab-pane"><h1>2</h1></div>
							    <div id="collapseThree" class="tab-pane"><h1>3</h1></div>
						    </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer container">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'butterfly' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
