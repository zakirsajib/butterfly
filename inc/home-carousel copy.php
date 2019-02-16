<?php $page_gallery = fw_get_db_post_option(get_the_ID(), 'page-gallery');
if( is_array($page_gallery) && count($page_gallery) > 0 ) :?>
	<div class="swiper-container">
		<?php foreach( $page_gallery as $image ) : ?>
		<div class="swiper-slide">
			<picture>
			<source media="(max-width: 1366px)" srcset="<?php echo get_template_directory_uri()?>/assets/img/bitmap.png">
	          <source media="(max-width: 1440px)" srcset="<?php echo get_template_directory_uri()?>/assets/img/bitmap@1x.png">
	          <source media="(max-width: 1920px)" srcset="<?php echo get_template_directory_uri()?>/assets/img/bitmap@2x.png">
	          <source media="(min-width: 2560px)" srcset="<?php echo get_template_directory_uri()?>/assets/img/bitmap@3x.png">
	   <img src="<?php echo get_template_directory_uri()?>/assets/img/bitmap.png" alt="">
	        </picture>
		</div>
		<?php endforeach;?>
	</div>
<?php endif;?>