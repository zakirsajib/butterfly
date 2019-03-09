$ = jQuery.noConflict();
	$(function ($) {
						
		$('.blog-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:false,
			arrows: true,
			//autoplaySpeed: 4800,
			infinite: true,
			//slidesToShow: 3,
			//slidesToScroll: 1,
			focusOnSelect: true,
			draggable: true,
			swipeToSlide: true,
			accessibility: true,
			nextArrow: $('.iconsarrow1'),
			mobileFirst:true,
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
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
		      breakpoint: 300,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: false
		      }
		    }
		  ]
		});
		
		$('.post-contents img[src$="jpg"], .post-contents  img[src$="png"], .post-contents img[src$="jpeg"]').addClass('img-responsive post-image');

});