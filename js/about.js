$ = jQuery.noConflict();
	$(function ($) {
		
	$('.affix-company').affix({
		offset: {
			top:  $('.company-section').offset().top,
			bottom: 2200
			}
	});
	
	$('.case-studies-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:false,
			arrows: false,
			autoplaySpeed: 4200,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			focusOnSelect: false,
			draggable: true,
			swipeToSlide: true,
			accessibility: true,
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
		
		$('.downloads-studies-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:false,
			arrows: false,
			autoplaySpeed: 4500,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			focusOnSelect: false,
			draggable: true,
			swipeToSlide: true,
			accessibility: true,
			pauseOnHover: true,
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