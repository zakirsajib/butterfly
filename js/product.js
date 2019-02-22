$ = jQuery.noConflict();
	$(function ($) {
	// Accordion on Product page
	var allPanels = $('.feathr-accordion > ul > p').hide();
	$('.feathr-accordion > ul > p.active').show();
    
	$('.feathr-accordion > ul > li > a').click(function() {
    	allPanels.slideUp();
		$(this).parent().next().slideDown();
		//return false;
  	});
});