$ = jQuery.noConflict();
	$(function ($) {
						
		$('.blog-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:false,
			arrows: true,
			autoplaySpeed: 4800,
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			touchMove: true,
			focusOnSelect: false,
			draggable: true,
			swipeToSlide: true,
			accessibility: true,
			variableWidth: true,
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true
		      }
		    }
		  ]
		});
});