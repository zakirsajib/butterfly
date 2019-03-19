$ = jQuery.noConflict();
	$(function ($) {
	// Accordion on Product page
	
	
		$('.feathr-accordion > ul > li:first-child').addClass('active');
		$('.feathr-accordion > ul > p:nth-child(2)').addClass('active');
		$('.feathr-thumbnail > .tab-content > .tab-pane:nth-child(1)').addClass('active');
		
		var allPanels = $('.feathr-accordion > ul > p').hide();
		
		$('.feathr-accordion > ul > p.active').show();
	    
		$('.feathr-accordion > ul > li > a').click(function() {
	    	allPanels.slideUp();
			$(this).parent().next().slideDown();
			//return false;
	  	});
  	
});