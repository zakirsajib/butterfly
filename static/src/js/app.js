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
				
		var topPosition = $('.butterfly-one').offset().top - 50;
		var floatingDivHeight = $('.butterfly-one').outerHeight();
		var footerFromTop = $('.home-testimonial').offset().top;
		var absPosition = footerFromTop - floatingDivHeight - 20;
		var win = $(window);
		var floatingDiv = $('.butterfly-one');
		
		win.scroll(function() {
			if (window.matchMedia('(min-width: 768px)').matches) {
			  if ((win.scrollTop() > topPosition) && (win.scrollTop() < absPosition)) {
			    floatingDiv.addClass('sticky');
			    //floatingDiv.removeClass('abs');
			
			  } else if ((win.scrollTop() > topPosition) && (win.scrollTop() > absPosition)) {
			    floatingDiv.removeClass('sticky');
			    //floatingDiv.addClass('abs');
			
			  } else {
			    floatingDiv.removeClass('sticky');
			    //floatingDiv.removeClass('abs');
			  }
			}
		});
	
	// Accordion
	function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('addIcon removeIcon');
	}
	$('.panel-group').on('hidden.bs.collapse', toggleIcon);
	$('.panel-group').on('shown.bs.collapse', toggleIcon);
	
/*
	$('section#a1').css('display','block');
	
	$(".company .xx a[data-toggle]").on("click", function(e) {
		e.preventDefault();  // prevent navigating
		var selector = $(this).data("toggle");  // get corresponding element
		$(".company section").hide();
		$(selector).fadeIn(300);
	});
*/
	
});