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
	  	
	  	
/*
	  	
	  	$('#featmang .feathr-accordion > ul > li:first-child').addClass('active');
		$('#featmang .feathr-accordion > ul > p:nth-child(2)').addClass('active');
		$('#featmang .feathr-thumbnail > .tab-content > .tab-pane:nth-child(1)').addClass('active');
		
		var allPanels1 = $('#featmang .feathr-accordion > ul > p').hide();
		
		$('#featmang .feathr-accordion > ul > p.active').show();
	    
		$('#featmang .feathr-accordion > ul > li > a').click(function() {
	    	allPanels1.slideUp();
			$(this).parent().next().slideDown();
			//return false;
	  	});
	  	
	  	
	  	$('#feathr .feathr-accordion > ul > li:first-child').addClass('active');
		$('#feathr .feathr-accordion > ul > p:nth-child(2)').addClass('active');
		$('#feathr .feathr-thumbnail > .tab-content > .tab-pane:nth-child(1)').addClass('active');
		
		var allPanels2 = $('#feathr .feathr-accordion > ul > p').hide();
		
		$('#feathr .feathr-accordion > ul > p.active').show();
	    
		$('#feathr .feathr-accordion > ul > li > a').click(function() {
	    	allPanels2.slideUp();
			$(this).parent().next().slideDown();
			//return false;
	  	});
*/
  	
});