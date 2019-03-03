<a rel="nofollow" href="https://www.facebook.com/" onclick="popUp=window.open(
		'http://www.facebook.com/sharer.php?u=<?php echo get_permalink()?>',
		'popupwindow',
		'scrollbars=yes,width=800,height=400');
	popUp.focus();
	return false"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-facebook.svg" class="facebook"/></a>

<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-instagram.svg" class="instagram"/></a>

<a rel="nofollow" href="mailto:?subject=[<?php the_title()?>] via [<?php echo get_bloginfo(); ?>]&amp;
	body=I've just read '[<?php the_title()?>]' at [<?php echo get_permalink()?>]" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-link.svg" class="link"/></a>

<a rel="nofollow" href="https://www.linkedin.com/" onclick="popUp=window.open(
		'https://www.linkedin.com/shareArticle?url=<?php echo get_permalink()?>',
		'popupwindow',
		'scrollbars=yes,width=800,height=400');
	popUp.focus();
	return false"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-linkedin.svg" class="linkedin"/></a>

<a rel="nofollow" href="https://twitter.com/" onclick="popUp=window.open(
		'https://twitter.com/intent/tweet?text=\'[<?php the_title()?>]\' via @[Butterfly_AI_] - [<?php echo get_permalink()?>]',
		'popupwindow',
		'scrollbars=yes,width=800,height=400');
	popUp.focus();
	return false"><img src="<?php echo get_template_directory_uri()?>/assets/blogpost/img/butterflyblogpost-twitter.svg" class="twitter"/></a>