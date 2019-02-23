$ = jQuery.noConflict();
	$(function ($) {
				
		$('.blog-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:true,
			arrows: false,
			autoplaySpeed: 4800,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
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
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
});