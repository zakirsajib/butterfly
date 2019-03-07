<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Butterfly
 */

?>

<div class="butterflywebsiteblog container">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-rectangle-3.png" class="rectangle" />
        <img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-rectangle-1.png" class="rectangle1" />
        <img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-rectangle-2.png" class="rectangle2" />
        <img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-rectangle-3.png" class="rectangle3" />
        <img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-rectangle-1.png" class="rectangle4" />
        <img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-rectangle-2.png" class="rectangle5" />
    </div>
     
    <div class="takeasneakpeekof">
	    <?php if( get_post()->post_content ):?>
	    	<?php the_content();?>
	    <?php else:?>
	    	<h1>11Take a sneak peek of our content on company culture, and more…</h1>
	    <?php endif;?>
    </div>
    <div class="mainarticle">
        <?php $args = array('posts_per_page' => 1,
	        	'post__in'  => get_option( 'sticky_posts' ), 
				'ignore_sticky_posts' => 1);
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post();?>
				<div class="featured-thumb">
						<div class="lisbon"><div class="mask"></div>
						<?php if(has_post_thumbnail()):?>
							<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><?php the_post_thumbnail( array(420, 280), array( 'class' => 'lisbon1' ) );?></a>
						<?php else:?>
						<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blog/img/butterflywebsiteblog-lisbon-13.png" class="lisbon1"/></a>
						<?php endif;?>
					</div>
				</div>
				<div class="featured-post col-sm-12">
					<div class="theremoteworkinge">
						<h2><a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><?php the_title();?></a></h2>
					</div>
					<?php if ( has_excerpt() ):?>
                        <div class="inournewseriesw"><span class="span1"><?php the_excerpt();?><br /></span><span class="span2"><a data-toggle="modal" data-target="#blogDetailsOne-<?php the_ID();?>">Read full article</a></span></div>
                    <?php else:?>
					<div class="inournewseriesw">
						<span class="span1">In our new series, Work &amp; Roam, we’ll be following our Product and Solutions Analyst John Williams as he travels the world, working remotely from 5 countries…<br /><br /><br /></span><span class="span2"><a data-toggle="modal" data-target="#blogDetailsOne">Read full article</a></span>
					</div><?php endif;?>
				</div>
			<?php endwhile?>
    </div>
    <div class="blog">
        <div class="headerblog">
            <div class="hereu2019sthelatest">Here’s the latest.</div>
            <div class="separatorhorizontal"><div class="bg1"></div></div>
        </div>
        <div class="blog-container">
        	<?php 
			   	$args = new WP_Query(array(
			    	'post_type' => 'post', 
					'posts_per_page' => -1
			    ));
			    while ( $args->have_posts() ) : $args->the_post();?>
					<div class="group21 group col-md-3">
						<?php if(has_post_thumbnail()):?>
							<?php the_post_thumbnail( array(320, 231), array( 'class' => 'lisbon' ) );?>
						<?php else:?>
							<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-lisbon-1.svg" class="lisbon"/></a>
						<?php endif;?>
						<div class="readarticle">
						<a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal">Read Article</a></div>
						<div class="theremoteworkinge"><a data-target="#blogDetailsOne-<?php the_ID();?>" data-toggle="modal"><?php echo wp_trim_words( get_the_title(), 8 ); ?></a></div>
						<img src="<?php echo get_template_directory_uri()?>/assets/resources/img/butterflywebsiteresources-iconsarrow.svg" class="iconsarrow1"/>
					</div>					
				<?php endwhile;wp_reset_postdata();?>
        </div>
    </div>
    <div class="allarticles">
        <div class="headerallarticles">
            <div class="moregoodstuff">
                More good stuff
            </div>
            <div class="separatorhorizontal">
                <div class="bg1">
                </div>
            </div>
            <ul class="a201820172016 nav nav-tabs" role="tablist">
                <li class="active"><span role="presentation" class="span1"><a href="#2019" aria-controls="2019" role="tab" data-toggle="tab">2019</a></span></li>
                <li><span role="presentation" class="span2"><a href="#2018" aria-controls="2018" role="tab" data-toggle="tab">2018</a></span></li>
                <li><span role="presentation" class="span2"><a href="#2017" aria-controls="2017" role="tab" data-toggle="tab">2017</a></span></li>
                <li><span role="presentation" class="span3"><a href="#2016" aria-controls="2016" role="tab" data-toggle="tab">2016</a></span></li>
            </ul>
        </div>
        <div class="fade in active" role="tabpanel" id="2019">
	        <?php $args = new WP_Query(array('post_type' => 'post','posts_per_page' => 10,'year'  => '2019'));
			while ( $args->have_posts() ) : $args->the_post();?>
				<div class="article col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="lisbon">
                <div class="mask"></div>
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
        <div class="fade" role="tabpanel" id="2018">
	        <?php $args = new WP_Query(array('post_type' => 'post','posts_per_page' => 10,'year'  => '2018'));
			while ( $args->have_posts() ) : $args->the_post();?>
				<div class="article col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="lisbon">
                <div class="mask"></div>
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
        <div class="fade" role="tabpanel" id="2017">
	        <?php $args = new WP_Query(array('post_type' => 'post','posts_per_page' => 10,'year'  => '2017'));
			while ( $args->have_posts() ) : $args->the_post();?>
				<div class="article col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="lisbon">
                <div class="mask"></div>
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
        <div class="fade" role="tabpanel" id="2016">
	        <?php $args = new WP_Query(array('post_type' => 'post','posts_per_page' => 10,'year'  => '2016'));
			while ( $args->have_posts() ) : $args->the_post();?>
				<div class="article col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="lisbon">
                <div class="mask"></div>
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
			<?php endwhile; wp_reset_postdata();?></div>
    </div>
    <div class="catags">
        <div class="headetags">
            <div class="separatorhorizontal"><div class="bg1"></div></div>
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
<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1));
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
                    <?php include( get_template_directory() . '/inc/share.php');?>
                        </div>
                    <?php $next_post = get_next_post();
		                if (!empty( $next_post )): 
							$next_post_id = $next_post->ID;?>
						<div class="nextbutton">
                            <img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-rectangle@2x.png" class="rectangle"/>
                            <div class="iconsarrow"><div class="background"></div>
                                <a data-dismiss="modal" data-target="#blogDetailsOne-<?php echo $next_post_id;?>" data-toggle="modal"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-arrow.svg" class="arrow"/></a>
                            </div>
                            <div class="nextuptheremotew">
                                <span class="span1">NEXT UP<br /></span><span class="span2"><br /></span><span class="span3"><a data-dismiss="modal" data-target="#blogDetailsOne-<?php echo $next_post_id;?>" data-toggle="modal"><?php echo esc_attr( $next_post->post_title ); ?></a></span>
                            </div>
                        </div>
						<?php endif;?>
                    </div>
            </div>
		</div>
	</div>
</div>
<?php endwhile;wp_reset_postdata();?>

<?php $args = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1, 'order'=>'DESC','orderby'=> 'post_date'));
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