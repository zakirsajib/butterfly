$ = jQuery.noConflict();
	$(function ($) {

	
		$('.swiper-container').slick({
			dots:false,
			speed:1000,
			adaptiveHeight:false,
			autoplay:false,
			arrows: false,
			fade:true,
			//lazyLoad: 'ondemand',
			autoplaySpeed: 4800
		});		
		
		if (window.matchMedia('(min-width: 1200px)').matches) {
			$('.affix-home').affix({
				offset: {
					top: $('.butterfly-one').offset().top-50,
					bottom: 0 
	      		}
			});
			
			$('.affix-butterfly').affix({
				offset: {
					top:  $('.butterfly-one').offset().top-200,
					bottom: 1500
	  			}
			});
		}
	
});