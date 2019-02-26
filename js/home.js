$ = jQuery.noConflict();
	$(function ($) {

	
		$('.swiper-container').slick({
			dots:false,
			speed:1000,
			adaptiveHeight:false,
			autoplay:true,
			arrows: false,
			fade:true,
			//lazyLoad: 'ondemand',
			autoplaySpeed: 4800
		});		
		
		
		$('.affix-home').affix({
			offset: {
				top: $('.butterfly-one').offset().top-50,
				bottom: 0 
      		}
		});
		
		$('.affix-butterfly').affix({
			offset: {
				top:  $('.butterfly-one').offset().top-50,
				bottom: 1700
  			}
		});
	
});