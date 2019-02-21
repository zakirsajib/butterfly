$ = jQuery.noConflict();
	$(function ($) {

	
		$('.swiper-container').slick({
			dots:false,
			speed:3000,
			adaptiveHeight:false,
			autoplay:true,
			arrows: false,
			fade:true,
			lazyLoad: 'ondemand',
			autoplaySpeed: 4800
		});
		$('.affix-home').affix({
			offset: {
				top: $('.butterfly-one').height()
      		}
		});
						
		var topPosition = $('.butterfly-one').offset().top;
		var floatingDivHeight = $('.butterfly-one').outerHeight();
		var footerFromTop = $('.home-testimonial').offset().top;
		var absPosition = footerFromTop - floatingDivHeight;
		var win = $(window);
		var floatingDiv = $('.butterfly-one');
		
		win.scroll(function() {
			if (window.matchMedia('(min-width: 1280px)').matches) {
			  if ((win.scrollTop() > topPosition) && (win.scrollTop() < absPosition)) {
			    floatingDiv.addClass('sticky');
			    floatingDiv.removeClass('abs');
			
			  } else if ((win.scrollTop() > topPosition) && (win.scrollTop() > absPosition)) {
			    floatingDiv.removeClass('sticky');
			    floatingDiv.addClass('abs');
			
			  } else {
			    floatingDiv.removeClass('sticky');
			    floatingDiv.removeClass('abs');
			  }
			}
		});
});