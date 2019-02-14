$ = jQuery.noConflict();
	$(function ($) {

	$('.swiper-container').slick({
		dots:false,
		speed:3000,
		adaptiveHeight:false,
		autoplay:true,
		arrows: false,
		fade:true,
		autoplaySpeed: 4800
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