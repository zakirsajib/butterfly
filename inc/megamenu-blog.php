<h4>From the blog:</h4>
<div class="latest-blog">
	<?php 
		$args=array(
	    'posts_per_page' => 1, 
	    'post_type'=> 'post',
	    'order'	=>'DESC',
	    'orderby' => 'post_date'
	);
	$the_query = new WP_Query($args);
	if ( $the_query->have_posts() ):
	while ( $the_query->have_posts() ): $the_query->the_post();?>
		<div class="blog-thumbnail">
			<a href="<?php the_permalink()?>"><?php butterfly_post_thumbnail()?></a>
		</div>
		<div class="post-details">
			<div class="post-meta">
				<?php butterfly_posted_on()?><?php butterfly_posted_by()?>
			</div>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</div>
	<?php endwhile; wp_reset_postdata();
	endif;?>
</div>