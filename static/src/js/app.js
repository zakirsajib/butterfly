$ = jQuery.noConflict();
	$(function ($) {
		
	// SVG inline for HTML img tag
	$('img.svg').each(function(){
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
	
	
	$('.menu-icon').click(function() {
		$('.mega-menu.modal.in .modal-content').fadeOut();
		$('.mega-menu.modal.in .modal-dialog').css('height','auto');
		setTimeout(function(){
			$('.mega-menu.modal.in .modal-content').fadeIn('slow');
			$('.mega-menu.modal.in .modal-dialog').css('height','auto');
		}, 500);
	});	
	
	$('.sub-menu li a').click(function(){
	    $('#myModal').modal('hide');
	    $(document.body).scrollTop( $(this).attr('href').offset().top );
	});	
	
	
	$('.header-signin ul li.menu-item-type-custom a').on('click',function (e) {
        e.preventDefault();
        var target = this.hash;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop':  $target.offset().top //no need of parseInt here
        }, 900, 'swing', function () {
            window.location.hash = '';
        });
    });
    
    $('.post-contents img[src$="jpg"], .post-contents  img[src$="png"], .post-contents img[src$="jpeg"]').addClass('img-responsive post-image');
	
});