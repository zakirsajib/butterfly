<div class="swiper-container-parent">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php //foreach( $page_gallery as $image ) : ?>
				<div class="swiper-slide"><a href="<?php the_permalink()?>"><img class="lazyload" data-srcset="<?php echo get_template_directory_uri()?>/assets/img/bitmap@2x.png 2x, <?php echo get_template_directory_uri()?>/assets/img/bitmap@3x.png 3x" src="<?php echo get_template_directory_uri()?>/assets/img/bitmap.png" srcset="<?php echo get_template_directory_uri()?>/assets/img/loader.svg" alt=""/></a></div>
			<?php //endforeach;?>
		</div>	
		<?php //if( count($page_gallery) > 1):?>
		<!-- If we need pagination -->
<!-- 		<div class="swiper-pagination"></div> -->
			<!-- If we need navigation buttons -->
<!-- 			<div class="swiper-button-prev"></div> -->
<!-- 			<div class="swiper-button-next"></div> -->
		<?php //endif?>
	</div>
</div>