$ = jQuery.noConflict();
	$(function ($) {
		$('.case-studies-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:true,
			arrows: false,
			autoplaySpeed: 4200,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
		
		$('.downloads-studies-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:true,
			arrows: false,
			autoplaySpeed: 4500,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
		
		$('.blog-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:true,
			arrows: false,
			autoplaySpeed: 4800,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
});