$ = jQuery.noConflict();
	$(function ($) {
		
		// Accordion on Resources page
		function toggleIcon(e) {
	    $(e.target)
	        .prev('.panel-heading')
	        .find(".more-less")
	        .toggleClass('addIcon removeIcon');
		}
		$('.panel-group').on('hidden.bs.collapse', toggleIcon);
		$('.panel-group').on('shown.bs.collapse', toggleIcon);
	
		
		$('.faq .panel #heading1 .panel-title a img').addClass('removeIcon');
		$('.faq .panel #heading1 .panel-title a').removeClass('collapsed');
		$('.faq .panel #collapse1').addClass('in');
		
		
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
		        infinite: true
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