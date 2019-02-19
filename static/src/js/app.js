$ = jQuery.noConflict();
	$(function ($) {

	
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