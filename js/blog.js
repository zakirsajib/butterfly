$ = jQuery.noConflict();
	$(function ($) {
				
		var firstHeight = $(".butterflyblogpost .content").height();
		var newHeight = firstHeight + 200 + 'px';
		$(".butterflyblogpost .right").css("top", newHeight);
		
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
			focusOnSelect: true,
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