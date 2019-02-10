$ = jQuery.noConflict();
	$(function ($) {
		$('.menu-icon').on('click', function (t) {
			t.preventDefault();
			$('.mega-menu').toggleClass("mega-menu-open");
			$(this).toggleClass("actives");
    	});
});