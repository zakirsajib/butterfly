<?php
/**
 * The header for blog page
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Butterfly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="environment" content="staging">
	<meta name="application-name" content="buttefly.ai">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="dns-prefetch" href="<?php echo get_site_url()?>"/>
	
	<link href="<?php echo get_template_directory_uri()?>/static/dist/css/fonts.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/static/dist/css/fonts.css"></noscript>
	
	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700,900" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700,900"></noscript>

<script>
(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}
var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){if(link.addEventListener){link.removeEventListener("load",enableStylesheet)}else if(link.attachEvent){link.detachEvent("onload",enableStylesheet)}
link.setAttribute("onload",null);link.media=finalMedia}
if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return}
var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'butterfly' ); ?></a>
	<div data-spy="affix" data-offset-top="60" data-offset-bottom="200">
		<header id="masthead" class="container-fluid">
			<div class="site-header">
				<div class="site-branding">
					<?php the_custom_logo();?>
					<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div><!-- .site-branding -->
				<div class="header-signin">
					<div class="demo-form-box" style="display: none">
						<div class="input-group"><input type="text" class="form-control demo-input" placeholder="Your email"><span class="input-group-btn"><button class="btn btn-default" type="button">Subscribe</button></span></div><!-- /input-group -->
					</div>
					<ul>
						<li>Already using Butterfly? <a href="#">Sign in</a></li>
					</ul>
				</div>
				<div class="menu-bar">
					<a href="#" data-toggle="modal" data-target="#myModal" class="menu-icon">BLOG <img src="<?php echo get_template_directory_uri()?>/assets/img/combined-shape.svg" class="menu-icon-Combined-Shape" alt=""></a>
				</div>
			</div>	
		</header><!-- #masthead -->
	</div><!-- #affix -->
	<?php get_template_part( 'inc/mega', 'menu' );?>

	<div id="content" class="site-content">
