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
		<?php if(get_field('heading_title_product')):?>
			<h1 class="entry-title"><?php the_field('heading_title_product')?></h1>
		<?php else:?>
			<h1 class="entry-title">Set up a more productive work environment for your teams.</h1>
		<?php endif;?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="how-it-works" id="how-it-works">
			<div class="for-people">
				<ul class="nav nav-tabs" role="tablist">
					<?php if(get_field('first_section_name')):?>
						<li><h2><?php the_field('first_section_name')?></h2></li>
					<?php else:?>
						<li><h2>How it works?</h2></li>
					<?php endif;?>
					<li role="presentation" class="abc active"><a href="#howempl" aria-controls="howempl" role="tab" data-toggle="tab"><?php if(get_field('tab_name')):?><?php the_field('tab_name')?><?php else:?>For employees<?php endif;?></a></li>
					<li class="abc" role="presentation"><a href="#howmang" aria-controls="howmang" role="tab" data-toggle="tab"><?php if(get_field('tab_name_sec_first_section')):?><?php the_field('tab_name_sec_first_section')?><?php else:?>For managers<?php endif;?></a></li>
					<li role="presentation" class="abc last"><a href="#howhr" aria-controls="howhr" role="tab" data-toggle="tab"><?php if(get_field('tab_name_third_first_section')):?><?php the_field('tab_name_third_first_section')?><?php else:?>For HR teams<?php endif;?></a></li>
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in tab active" id="howempl">
					    <?php if( have_rows('first_tab_contents_product')):
							while ( have_rows('first_tab_contents_product') ) : the_row();
							$first_tab_contents_product = get_field('first_tab_contents_product');?>
								<div class="xx">
									<?php if($first_tab_contents_product['descriptions_one_first_tab']):?>
									<div class="one">
									<?php echo $first_tab_contents_product['descriptions_one_first_tab'];?>
									</div>
									<?php else:?>
									<div class="one">
										<h2>Integrate into employees' routine</h2>
										<p>Our surveys work with your systems. Employees answer engagement surveys in seconds while they clock in or out, eliminating distractions and maximizing their time.</p>
										<figcaption align="left">fig a. Slack</figcaption>
									</div>
									<?php endif;?>
									<?php if($first_tab_contents_product['image_url_first_tab'] && 
										$first_tab_contents_product['image_2x_url_first_tab'] && 
										$first_tab_contents_product['image_3x_url_first_tab']):?>
									<div class="two">
										<img class="lazyload" src="<?php echo $first_tab_contents_product['image_url_first_tab'];?>" srcset="<?php echo $first_tab_contents_product['image_2x_url_first_tab'];?> 2x, <?php echo $first_tab_contents_product['image_3x_url_first_tab'];?> 3x" alt="">
									</div>
									<?php else:?>
									<div class="two"><img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@2x.jpg 2x, <?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@3x.jpg 3x"alt="Integrate into employees' routine"></div>
									<?php endif;?>
					    		</div>
								<div class="howmang-contents">
									<div class="yy">
								<?php if($first_tab_contents_product['descriptions_two_first_tab']):?>
									<div class="three">
									<?php echo $first_tab_contents_product['descriptions_two_first_tab'];?>
									</div>
								<?php else:?>
									<div class="three">
									<h2>Access a dynamic dashboard</h2>
									<p>Easily gather and act on feedback. Track survey results in real time and export managerial reports to spark transparent conversation between you and your employees.</p>
							<figcaption align="left">fig b. Butterfly dashboard for managers</figcaption>
								</div>
								<?php endif;?>
								<?php if($first_tab_contents_product['image_sec_url_first_tab'] && 
										$first_tab_contents_product['image_sec_2x_url_first_tab'] && 
										$first_tab_contents_product['image_sec_3x_url_first_tab']):?>
								<div class="four">
									<img class="lazyload" src="<?php echo $first_tab_contents_product['image_sec_url_first_tab'];?>" srcset="<?php echo $first_tab_contents_product['image_sec_2x_url_first_tab'];?> 2x, <?php echo $first_tab_contents_product['image_sec_3x_url_first_tab'];?> 3x" alt=""></div>
								<?php else:?>
								<div class="four">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Access a dynamic dashboard"></div>
								<?php endif;?>
								</div>
									<div class="zz">
								<?php if($first_tab_contents_product['descriptions_three_first_tab']):?>
								<div class="five">
								<?php echo $first_tab_contents_product['descriptions_three_first_tab'];?>
								</div>
								<?php else:?>
								<div class="five">
								<h2>Receive personalized guidance</h2>
								<p>Use what you hear from your team to grow as a manager. See what areas need attention and focus on your improvement to generate impactful change.</p>
								<figcaption align="left">fig c. Butterfly AI assistant</figcaption>
								</div>
								<?php endif;?>
								<?php if($first_tab_contents_product['image_third_url_first_tab'] && 
										$first_tab_contents_product['image_third_2x_url_first_tab'] && 
										$first_tab_contents_product['image_third_3x_url_first_tab']):?>
								<div class="six">
								<img class="lazyload" src="<?php echo $first_tab_contents_product['image_third_url_first_tab'];?>" srcset="<?php echo $first_tab_contents_product['image_third_2x_url_first_tab'];?> 2x, <?php echo $first_tab_contents_product['image_third_3x_url_first_tab'];?> 3x" alt="">
							</div>
							<?php else:?>
							<div class="six">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Receive personalized guidance">
							</div>
							<?php endif;?>
							</div>
								</div>
							<?php endwhile;
					    endif;?>
				    </div>
				    <div role="tabpanel" class="tab-pane fade tab" id="howmang">
					    <?php if( have_rows('second_tab_contents_product')):
							while ( have_rows('second_tab_contents_product') ) : the_row();
							$second_tab_contents_product = get_field('second_tab_contents_product');?>
								<div class="xx">
									<?php if($second_tab_contents_product['descriptions_one_first_tab']):?>
									<div class="one">
								<?php echo $second_tab_contents_product['descriptions_one_first_tab'];?>
									</div>
									<?php else:?>
									<div class="one">
										<h2>Integrate into employees' routine</h2>
										<p>Our surveys work with your systems. Employees answer engagement surveys in seconds while they clock in or out, eliminating distractions and maximizing their time.</p>
										<figcaption align="left">fig a. Slack</figcaption>
									</div>
									<?php endif;?>
									<?php if($second_tab_contents_product['image_url_first_tab'] && 
										$second_tab_contents_product['image_2x_url_first_tab'] && 
										$second_tab_contents_product['image_3x_url_first_tab']):?>
									<div class="two">
										<img class="lazyload" src="<?php echo $second_tab_contents_product['image_url_first_tab'];?>" srcset="<?php echo $second_tab_contents_product['image_2x_url_first_tab'];?> 2x, <?php echo $second_tab_contents_product['image_3x_url_first_tab'];?> 3x" alt="">
									</div>
									<?php else:?>
									<div class="two"><img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@2x.jpg 2x, <?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@3x.jpg 3x"alt="Integrate into employees' routine"></div>
									<?php endif;?>
					    		</div>
								<div class="howmang-contents">
									<div class="yy">
								<?php if($second_tab_contents_product['descriptions_two_first_tab']):?>
									<div class="three">
									<?php echo $second_tab_contents_product['descriptions_two_first_tab'];?>
									</div>
								<?php else:?>
									<div class="three">
									<h2>Access a dynamic dashboard</h2>
									<p>Easily gather and act on feedback. Track survey results in real time and export managerial reports to spark transparent conversation between you and your employees.</p>
							<figcaption align="left">fig b. Butterfly dashboard for managers</figcaption>
								</div>
								<?php endif;?>
								<?php if($second_tab_contents_product['image_sec_url_first_tab'] && 
										$second_tab_contents_product['image_sec_2x_url_first_tab'] && 
										$second_tab_contents_product['image_sec_3x_url_first_tab']):?>
								<div class="four">
									<img class="lazyload" src="<?php echo $second_tab_contents_product['image_sec_url_first_tab'];?>" srcset="<?php echo $second_tab_contents_product['image_sec_2x_url_first_tab'];?> 2x, <?php echo $second_tab_contents_product['image_sec_3x_url_first_tab'];?> 3x" alt=""></div>
								<?php else:?>
								<div class="four">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Access a dynamic dashboard"></div>
								<?php endif;?>
								</div>
									<div class="zz">
								<?php if($second_tab_contents_product['descriptions_three_first_tab']):?>
								<div class="five">
								<?php echo $second_tab_contents_product['descriptions_three_first_tab'];?>
								</div>
								<?php else:?>
								<div class="five">
								<h2>Receive personalized guidance</h2>
								<p>Use what you hear from your team to grow as a manager. See what areas need attention and focus on your improvement to generate impactful change.</p>
								<figcaption align="left">fig c. Butterfly AI assistant</figcaption>
								</div>
								<?php endif;?>
								<?php if($second_tab_contents_product['image_third_url_first_tab'] && 
										$second_tab_contents_product['image_third_2x_url_first_tab'] && 
										$second_tab_contents_product['image_third_3x_url_first_tab']):?>
								<div class="six">
								<img class="lazyload" src="<?php echo $second_tab_contents_product['image_third_url_first_tab'];?>" srcset="<?php echo $second_tab_contents_product['image_third_2x_url_first_tab'];?> 2x, <?php echo $second_tab_contents_product['image_third_3x_url_first_tab'];?> 3x" alt="">
							</div>
							<?php else:?>
							<div class="six">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Receive personalized guidance">
							</div>
							<?php endif;?>
							</div>
								</div>
							<?php endwhile;
					    endif;?>
				    </div>
				    <div role="tabpanel" class="tab-pane fade tab" id="howhr">
					    <?php if( have_rows('third_tab_contents_product')):
							while ( have_rows('third_tab_contents_product') ) : the_row();
							$third_tab_contents_product = get_field('third_tab_contents_product');?>
								<div class="xx">
									<?php if($third_tab_contents_product['descriptions_one_first_tab']):?>
									<div class="one">
									<?php echo $third_tab_contents_product['descriptions_one_first_tab'];?>
									</div>
									<?php else:?>
									<div class="one">
										<h2>Integrate into employees' routine</h2>
										<p>Our surveys work with your systems. Employees answer engagement surveys in seconds while they clock in or out, eliminating distractions and maximizing their time.</p>
										<figcaption align="left">fig a. Slack</figcaption>
									</div>
									<?php endif;?>
									<?php if($third_tab_contents_product['image_url_first_tab'] && 
										$third_tab_contents_product['image_2x_url_first_tab'] && 
										$third_tab_contents_product['image_3x_url_first_tab']):?>
									<div class="two">
										<img class="lazyload" src="<?php echo $third_tab_contents_product['image_url_first_tab'];?>" srcset="<?php echo $third_tab_contents_product['image_2x_url_first_tab'];?> 2x, <?php echo $third_tab_contents_product['image_3x_url_first_tab'];?> 3x" alt="">
									</div>
									<?php else:?>
									<div class="two"><img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@2x.jpg 2x, <?php echo get_template_directory_uri()?>/assets/img/product/screenshot-2019-01-02-at-13-05-24@3x.jpg 3x"alt="Integrate into employees' routine"></div>
									<?php endif;?>
					    		</div>
								<div class="howmang-contents">
									<div class="yy">
								<?php if($third_tab_contents_product['descriptions_two_first_tab']):?>
									<div class="three">
									<?php echo $third_tab_contents_product['descriptions_two_first_tab'];?>
									</div>
								<?php else:?>
									<div class="three">
									<h2>Access a dynamic dashboard</h2>
									<p>Easily gather and act on feedback. Track survey results in real time and export managerial reports to spark transparent conversation between you and your employees.</p>
							<figcaption align="left">fig b. Butterfly dashboard for managers</figcaption>
								</div>
								<?php endif;?>
								<?php if($third_tab_contents_product['image_sec_url_first_tab'] && 
										$third_tab_contents_product['image_sec_2x_url_first_tab'] && 
										$third_tab_contents_product['image_sec_3x_url_first_tab']):?>
								<div class="four">
									<img class="lazyload" src="<?php echo $third_tab_contents_product['image_sec_url_first_tab'];?>" srcset="<?php echo $third_tab_contents_product['image_sec_2x_url_first_tab'];?> 2x, <?php echo $third_tab_contents_product['image_sec_3x_url_first_tab'];?> 3x" alt=""></div>
								<?php else:?>
								<div class="four">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Access a dynamic dashboard"></div>
								<?php endif;?>
								</div>
									<div class="zz">
								<?php if($third_tab_contents_product['descriptions_three_first_tab']):?>
								<div class="five">
								<?php echo $third_tab_contents_product['descriptions_three_first_tab'];?>
								</div>
								<?php else:?>
								<div class="five">
								<h2>Receive personalized guidance</h2>
								<p>Use what you hear from your team to grow as a manager. See what areas need attention and focus on your improvement to generate impactful change.</p>
								<figcaption align="left">fig c. Butterfly AI assistant</figcaption>
								</div>
								<?php endif;?>
								<?php if($third_tab_contents_product['image_third_url_first_tab'] && 
										$third_tab_contents_product['image_third_2x_url_first_tab'] && 
										$third_tab_contents_product['image_third_3x_url_first_tab']):?>
								<div class="six">
								<img class="lazyload" src="<?php echo $third_tab_contents_product['image_third_url_first_tab'];?>" srcset="<?php echo $third_tab_contents_product['image_third_2x_url_first_tab'];?> 2x, <?php echo $third_tab_contents_product['image_third_3x_url_first_tab'];?> 3x" alt="">
							</div>
							<?php else:?>
							<div class="six">
								<img class="lazyload" src="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap.jpg" srcset="<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@2x.jpg 2x,<?php echo get_template_directory_uri()?>/assets/img/product/bitmap@3x.jpg 3x" alt="Receive personalized guidance">
							</div>
							<?php endif;?>
							</div>
								</div>
							<?php endwhile;
					    endif;?>
				    </div>
				</div>
			</div>
		</div>
		<div class="features" id="features">
			<div class="for-people">
				<ul class="nav nav-tabs" role="tablist">
					<?php if(get_field('second_section_name')):?>
					<li><h2><?php the_field('second_section_name')?></h2></li>
					<?php else:?>
					<li><h2>Features</h2></li>
					<?php endif;?>
					<li role="presentation" class="active abc"><a href="#featempl" aria-controls="featempl" role="tab" data-toggle="tab"><?php if(get_field('tab_name_second_section')):?><?php the_field('tab_name_second_section')?><?php else:?>For employees<?php endif;?></a></li>
					<li class="abc" role="presentation"><a href="#featmang" aria-controls="featmang" role="tab" data-toggle="tab"><?php if(get_field('tab_name_sec_second_section')):?><?php the_field('tab_name_sec_second_section')?><?php else:?>For managers<?php endif;?></a></li>
					<li role="presentation" class="abc last"><a href="#feathr" aria-controls="feathr" role="tab" data-toggle="tab"><?php if(get_field('tab_name_third_second_section')):?><?php the_field('tab_name_third_second_section')?><?php else:?>For HR teams<?php endif;?></a></li>
				</ul>
				
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="featempl"></div>
				    <div role="tabpanel" class="tab-pane fade" id="featmang"></div>
				    <div role="tabpanel" class="tab-pane fade" id="feathr">
					    <div class="feathr-contents">
						   	<?php if( have_rows('third_tab_contents_product_sec') ):?>
						   		<div class="feathr-accordion">
							    <ul class="nav nav-pills nav-stacked">
								 <?php 
									 $count = 1;
									 while ( have_rows('third_tab_contents_product_sec') ) : the_row();?>
								    <li><a data-toggle="tab" href="#collapse<?php echo $count?>"><?php the_sub_field('title_features');?></a></li>
								    <p class="featured-info"><?php the_sub_field('features_info');?></p>
								    <?php $count++; endwhile;?>
							    </ul>
						    </div>
						   		<div class="feathr-thumbnail">
							    <div class="tab-content">
							    <?php 
								    $count = 1;
								    while ( have_rows('third_tab_contents_product_sec') ) : the_row();?>
							    <div id="collapse<?php echo $count?>" class="tab-pane">
								    <img class="lazyload img-responsive" src="<?php the_sub_field('image_url_features');?>" alt=""></div>
							    <?php $count++; endwhile;?>
						    </div>
					    </div>
							<?php endif;?>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
