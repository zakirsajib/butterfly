$ = jQuery.noConflict();
	$(function ($) {
	
	$("#companySection").stick_in_parent({
		offset_top: 50,
		bottoming: true
	});
	
				
	$('.case-studies-container').slick({
			dots:false,
			speed:2800,
			adaptiveHeight:true,
			autoplay:false,
			arrows: true,
			autoplaySpeed: 4200,
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			focusOnSelect: false,
			draggable: true,
			swipeToSlide: true,
			accessibility: true,
			variableWidth: true,
			responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: false
		      }
		    },
		    {
		      breakpoint: 1199,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: false
		      }
		    },
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
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
			arrows: true,
			autoplaySpeed: 4500,
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			focusOnSelect: false,
			draggable: true,
			swipeToSlide: true,
			accessibility: true,
			pauseOnHover: true,
			variableWidth: true,
			responsive: [
		    {
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: false
		      }
		    },
		    {
		      breakpoint: 1199,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: true
		      }
		    },
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