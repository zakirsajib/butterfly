<?php $page_gallery = fw_get_db_post_option(get_the_ID(), 'page-gallery');
if( is_array($page_gallery) && count($page_gallery) > 0 ) :?>
	<div class="swiper-container">
		<?php foreach( $page_gallery as $image ) : ?>
			<div class="swiper-slide">
				<img data-lazy="<?php echo $image['url']?>" alt="">
			</div>
		<?php endforeach;?>
	</div>
<?php endif;?>