$ = jQuery.noConflict();
	$(function ($) {
		$('.menu-icon').on('click', function (t) {
			t.preventDefault();
			$('.mega-menu').toggleClass("mega-menu-open");
			$(this).toggleClass("actives");

        //if($(this).hasClass("actives")){
        //    $('.menu-icon').toggleClass("close-icon-Combined-Shape"); 
            //$(".menu-icon-Combined-Shape").css("display","none");
        //}else {
	        //$(".menu-icon-Combined-Shape").css("display","inline-block");
        //    $('.menu-icon').toggleClass("close-icon-Combined-Shape");
            //$(".close-icon-Combined-Shape").css("display","inline-block");
        //}
    });
});