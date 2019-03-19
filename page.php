<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

get_header();
?>

	<div id="primary" class="content-area default-page col-lg-12">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div> <!-- .end site-content .container-fluid-->

<?php get_template_part( 'inc/before', 'footer' );?>
<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1,'order'=>'DESC','orderby'=> 'post_date'));
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
                <div class="content animated slideInLeft col-lg-8 col-md-8 col-xs-12">
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
                <div class="right animated slideInRight col-lg-4 col-md-4 col-xs-4">
                    <div class="mask"/></div>
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
                    <?php include( get_template_directory() . '/inc/share.php');?>
                    </div>
                    <?php $next_post = get_next_post();
		                if (!empty( $next_post )): 
							$next_post_id = $next_post->ID;?>
						<div class="nextbutton">
                            <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-rectangle@2x.png" class="rectangle"/>
                            <div class="iconsarrow"><div class="background"></div>
                                <a data-dismiss="modal" data-target="#blogDetailsTwo-<?php echo $next_post_id;?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a data-dismiss="modal" data-target="#blogDetailsTwo-<?php echo $next_post_id;?>" data-toggle="modal"><?php echo esc_attr( $next_post->post_title ); ?></a></span>
                            </div>
                        </div>
						<?php endif;?>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>
<?php
get_footer();