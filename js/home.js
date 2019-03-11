$ = jQuery.noConflict();
	$(function ($) {

	
		$('.swiper-container').slick({
			dots:false,
			speed:1000,
			adaptiveHeight:false,
			autoplay:true,
			arrows: false,
			fade:true,
			lazyLoad: 'ondemand',
			autoplaySpeed: 4800
		});		
		
		if (window.matchMedia('(min-width: 992px)').matches) {
			$('.affix-home').affix({
				offset: {
					top: $('.butterfly-one').offset().top-50,
					bottom: 0 
	      		}
			});
			
			$("#why-butterfly").stick_in_parent({
				offset_top: 100,
				parent:'.why-butterfly',
				bottoming: true
			});
		}	
});