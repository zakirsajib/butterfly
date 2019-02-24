<?php $page_gallery = fw_get_db_post_option(get_the_ID(), 'page-gallery');
if( is_array($page_gallery) && count($page_gallery) > 0 ) :?>
	<div class="swiper-container">
		<?php foreach( $page_gallery as $image ) : ?>
			<div class="swiper-slide">
<svg width="100%" height="100%" viewBox="0 0 671 669" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.9"><clipPath id="circleView"><path d="M670.303428,484.909089 L588.098286,567.11423 C453.562668,701.649849 235.437332,701.649849 100.901714,567.11423 C-33.6339046,432.578612 -33.6339046,214.453277 100.901714,79.917658 L180.819372,0 L670.303428,0 L670.303428,484.909089 Z" id="Mask" fill="#000000"></path></clipPath></g>
    <image height="669" xlink:href="<?php echo $image['url']?>" clip-path="url(#circleView)" />
</svg>				
			</div>	
		<?php endforeach;?>
	</div>
<?php endif;?>