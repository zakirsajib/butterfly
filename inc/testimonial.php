<?php 
	$tag_args=array(
    'posts_per_page' => 1, 
    'post_type'=> 'b_testimonial',
    'orderby' => 'rand'
);
$the_query = new WP_Query($tag_args);

if ( $the_query->have_posts() ):
	while ( $the_query->have_posts() ): $the_query->the_post();?>
	<div class="testimonial-statements">
		<?php the_content()?>
	</div>
	<div class="company-details">	
		<div class="company-logo">
			<?php if(get_field('company_logo')):?>
				<a href="<?php the_field('logo_url')?>" target="_blank"><img src="<?php the_field('company_logo')?>" alt=""></a>
			<?php else:?>
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/img/ogilvy-logo.svg" alt=""></a>
			<?php endif;?>
		</div>
		<div class="horizontal-line"></div>
		<div class="person-details">
			<?php if(get_field('person_name')|| get_field('person_position') ):?>
				<p class="person-name"><?php the_field('person_name')?></p>
				<p class="person-position"><?php the_field('person_position')?></p>
			<?php else:?>
				<p class="person-name">Benjamin Snyers</p>
				<p class="person-position">Managing Director at Ogilvy</p>
			<?php endif;?>
		</div>
	</div>
<?php endwhile; wp_reset_postdata();
else:
	// Show dummy data from designs
	include( get_template_directory() . '/inc/dummy-testimonial.php');
endif;?>