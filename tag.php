<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

get_header('blog');
?>

	<div id="primary" class="cat">
		<main id="main" class="site-main">
			<div class="butterflywebsiteblogfilters">
                <div class="bg">
                    <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-rectangle.png" class="rectangle"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-rectangle-4.png" class="rectangle1"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-rectangle-5.png" class="rectangle2"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-rectangle.png" class="rectangle3" />
                    <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-rectangle-4.png" class="rectangle4"/>
                    <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-rectangle-5.png" class="rectangle5"/>
                </div>
                <div class="bg1"></div>
                <a href="<?php echo get_site_url()?>/blog"><div class="backtoblog">BACK TO BLOG</div>
                <img src="<?php echo get_template_directory_uri()?>/assets/archive/img/butterflywebsiteblogfilters-iconsarrow@2x.png" class="iconsarrow"/></a>
                <div class="allarticles">
                    <div class="headerallarticles">
                        <div class="articlesfromu201cwork">
                            <span class="span1">Articles from </span>
                            <span class="span2">“<?php single_cat_title(); ?>”</span>
                        </div>
                        <div class="separatorhorizontal">
                            <div class="bg2"></div>
                        </div>
                    </div>
                    <?php 
						$tag_id = get_queried_object()->term_id;
						$args = new WP_Query(array(
						'post_type' => 'post','posts_per_page' => 10, 'tag_id' => $tag_id));
						while ( $args->have_posts() ) : $args->the_post();?>
							<div class="article col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="lisbon"><div class="mask"></div>
		                		<?php if(has_post_thumbnail()):?>
									<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><?php the_post_thumbnail( array(120, 80), array( 'class' => 'lisbon1' ) );?></a>
								<?php else:?>
									<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-lisbon@2x.png" class="lisbon1" /></a>
								<?php endif;?>
								</div>
					            <div class="a20181214johnwi">
					                <?php echo get_the_date(); ?> - <?php echo get_the_author(); ?>
					            </div>
					            <div class="workroamthere">
					                <a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><?php echo wp_trim_words( get_the_title(), 8 ); ?></a>
					            </div>
							</div>
						<?php endwhile; wp_reset_postdata();?>
                </div>
                <div class="catags">
                    <div class="headetags">
                        <div class="separatorhorizontal">
                            <div class="bg2"></div>
                        </div>
                        <ul class="categoriestags nav nav-tabs" role="tablist">
                            <li class="active"><span role="presentation" class="span1"><a href="#cat" aria-controls="cat" role="tab" data-toggle="tab">Categories</a></span></li>
                            <li><span role="presentation" class="span2"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Tags</a></span></li>
                        </ul>
                    </div>
                    <div class="workroamwellbei fade in active" role="tabpanel" id="cat">
                        <ul>
						    <?php wp_list_categories( array(
						        'orderby'    => 'name',
						        'hide_empty' => 1,
						        'title_li' => ''
						    ) ); ?>
						</ul>
                    </div>
                    <div class="workroamwellbeicopy fade" role="tabpanel" id="tag">
                        <?php 
							$tags = get_tags();
							echo '<ul>';
							foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
								echo "<li><a href='{$tag_link}' class='{$tag->slug}'>{$tag->name}</a></li>";
							}
							echo '</ul>';
						?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_template_part( 'inc/before', 'footer' );?>
	
<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 10, 'tag_id' => $tag_id));
while ( $args->have_posts() ) : $args->the_post();?>
<div class="modal blogDetailsOne" id="blogDetailsOne-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyblogpost">
            <div class="casestudy">
                <div class="bg"></div>
                <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-butterfly@2x.png" class="butterfly"/>
                    </div>
                <div class="content animated slideInLeft">
                        <div class="workroam">
                            <?php butterfly_get_current_post_categories();?>
                        </div>
                        <div class="theremoteworkinge">
                            <?php the_title();?>
                        </div>
                        <?php if ( has_excerpt() ):?>
                        	<div class="inournewseriesw"><?php the_excerpt();?></div>
                        <?php else:?>
                        <div class="inournewseriesw">
                            In our new series, Work &amp; Roam, we’ll be following our Product and Solutions Analyst John Williams as he travels the world, working remotely from 5 countries. Tune in to see what worked (and what didn’t) for John during each stop, and to dig into how working remotely affects both the worker and the team back home.
                        </div>
                        <?php endif;?>
                        <div class="lisbon featured-img">
	                        <?php if(has_post_thumbnail()):?>
	                        	<?php the_post_thumbnail('full', array( 'class' => 'lisbon1' )); ?>
	                        <?php else:?>
								<img data-src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-lisbon.svg" class="lisbon1 lazyload"/>
							<?php endif;?>
                        </div>
                        
                        <div class="post-contents">
                        	<?php the_content()?>
                        </div>
                        
                    </div>
                <div class="right animated slideInRight">
                    <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-mask-1.png" class="mask"/>
                    <div class="iconclose">
                        <div class="background"></div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                    <div class="date12142018">
                            <span class="span1">DATE</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_date(); ?></span>
                        </div>
                    <div class="separatorhorizontal"><div class="bg1"></div></div>
                    <?php if(has_category()):?>
                    <div class="categoryworkroam">
                            <span class="span1">CATEGORY</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_categories_sidebar();?></span>
                        </div>
                    <div class="separatorhorizontal1"><div class="bg1"></div></div><?php endif;?>
                    <?php if(has_tag()):?>
                    <div class="tagsworklifebalan">
                            <span class="span1">TAGS</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_tags()?></span>
                    </div>
					<div class="separatorhorizontal2"><div class="bg1"></div></div><?php endif;?>
                    <div class="authorjohnwilliams">
                            <span class="span1">AUTHOR</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_author(); ?> </span>
                        </div>
                    <div class="separatorhorizontal3"><div class="bg1"></div></div>
					<div class="share">SHARE</div>
                    <div class="share1">
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-facebook.svg" class="facebook"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-instagram.svg" class="instagram"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-link.svg" class="link"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-linkedin.svg" class="linkedin"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-twitter.svg" class="twitter"/></a>
                        </div>
                    <div class="nextbutton">
                            <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-rectangle@2x.png" class="rectangle"/>
                            <div class="iconsarrow">
                                <div class="background"></div>
                                <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a href="#">The Remote Working Experience<br />Lisbon &amp; Parma</a></span>
                            </div>
                        </div>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>

<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 1,'order'=>'DESC','orderby'=> 'post_date'));
while ( $args->have_posts() ) : $args->the_post();?>
<div class="modal blogDetailsTwo" id="blogDetailsTwo-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="butterflyblogpost">
            <div class="casestudy">
                <div class="bg"></div>
                <div class="brandingbutterflyicon">
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-bg@2x.png" class="bg1"/>
                        <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-butterfly@2x.png" class="butterfly"/>
                    </div>
                <div class="content animated slideInLeft">
                        <div class="workroam">
                            <?php butterfly_get_current_post_categories();?>
                        </div>
                        <div class="theremoteworkinge">
                            <?php the_title();?>
                        </div>
                        <?php if ( has_excerpt() ):?>
                        	<div class="inournewseriesw"><?php the_excerpt();?></div>
                        <?php else:?>
                        <div class="inournewseriesw">
                            In our new series, Work &amp; Roam, we’ll be following our Product and Solutions Analyst John Williams as he travels the world, working remotely from 5 countries. Tune in to see what worked (and what didn’t) for John during each stop, and to dig into how working remotely affects both the worker and the team back home.
                        </div>
                        <?php endif;?>
                        <div class="lisbon featured-img">
	                        <?php if(has_post_thumbnail()):?>
	                        	<?php the_post_thumbnail('full', array( 'class' => 'lisbon1' )); ?>
	                        <?php else:?>
								<img data-src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-lisbon.svg" class="lisbon1 lazyload"/>
							<?php endif;?>
                        </div>
                        
                        <div class="post-contents">
                        	<?php the_content()?>
                        </div>
                        
                    </div>
                <div class="right animated slideInRight">
                    <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-mask-1.png" class="mask"/>
                    <div class="iconclose">
                        <div class="background"></div>
                            <a data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-combined-shape.svg" class="combinedshape"/></a>
                        </div>
                    <div class="date12142018">
                            <span class="span1">DATE</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_date(); ?></span>
                        </div>
                    <div class="separatorhorizontal"><div class="bg1"></div></div>
                    <?php if(has_category()):?>
                    <div class="categoryworkroam">
                            <span class="span1">CATEGORY</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_categories_sidebar();?></span>
                        </div>
                    <div class="separatorhorizontal1"><div class="bg1"></div></div><?php endif;?>
                    <?php if(has_tag()):?>
                    <div class="tagsworklifebalan">
                            <span class="span1">TAGS</span><span class="span2"><br /></span><span class="span3"><?php butterfly_get_current_post_tags()?></span>
                    </div>
					<div class="separatorhorizontal2"><div class="bg1"></div></div><?php endif;?>
                    <div class="authorjohnwilliams">
                            <span class="span1">AUTHOR</span><span class="span2"><br /></span><span class="span3"><?php echo get_the_author(); ?> </span>
                        </div>
                    <div class="separatorhorizontal3"><div class="bg1"></div></div>
					<div class="share">SHARE</div>
                    <div class="share1">
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-facebook.svg" class="facebook"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-instagram.svg" class="instagram"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-link.svg" class="link"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-linkedin.svg" class="linkedin"/></a>
                            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-twitter.svg" class="twitter"/></a>
                        </div>
                    <div class="nextbutton">
                            <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-rectangle@2x.png" class="rectangle"/>
                            <div class="iconsarrow">
                                <div class="background"></div>
                                <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a href="#">The Remote Working Experience<br />Lisbon &amp; Parma</a></span>
                            </div>
                        </div>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>	
	
<?php get_footer();