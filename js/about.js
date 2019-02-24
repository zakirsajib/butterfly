$ = jQuery.noConflict();
	$(function ($) {
		
			$('.affix-company').affix({
				offset: {
					top:  $('.company-section').offset().top-50,
					bottom: 1700
	  			}
			});
});