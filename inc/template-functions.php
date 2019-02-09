<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Butterfly
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function butterfly_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'butterfly_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function butterfly_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'butterfly_pingback_header' );
/**
 * Add SVG + webp capabilities
 */
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );
function wpcontent_svg_mime_type( $mimes ) {
	$mimes = array();
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	$mimes['webp'] = 'image/webp';
	// Optional. Remove a mime type.
	unset( $mimes['exe'] );
  
  return $mimes;
}
/**
 * Disable WordPress Events and News widget from the dashboard.
 *
 * @since 1.0
 */
function butterfly_remove() {
	remove_meta_box( 'dashboard_primary', get_current_screen(), 'side' );
}
add_action( 'wp_network_dashboard_setup', 'butterfly_remove', 20 );
add_action( 'wp_user_dashboard_setup',    'butterfly_remove', 20 );
add_action( 'wp_dashboard_setup',         'butterfly_remove', 20 );

//* Add theme info box into WordPress Dashboard
function frontlash_add_dashboard_widgets() {
  wp_add_dashboard_widget('wp_dashboard_widget', 'Developer Contact Details', 'frontlash_theme_info');
}
add_action('wp_dashboard_setup', 'frontlash_add_dashboard_widgets' );
 
function frontlash_theme_info() {
  echo "<ul>
  <li><strong>Developed By:</strong> Zakir Sajib</li>
  <li><strong>Website:</strong> <a href='https://zakirsajib.netlify.com' target='_blank'>https://zakirsajib.netlify.com</a></li>
  <li><strong>Contact:</strong> <a href='mailto:zakirsajib@gmail.com'>zakirsajib@gmail.com</a></li>
  <li><strong>Skype:</strong> sajibuk</li>
  </ul>";
}