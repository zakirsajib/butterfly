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
	$mimes['png'] = 'image/png';
	$mimes['jpg'] = 'image/jpg';
	$mimes['jpeg'] = 'image/jpeg';
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
function add_link_atts($atts) {
  $atts['data-dismiss'] = "modal";
  return $atts;
}
//add_filter( 'nav_menu_link_attributes', 'add_link_atts');

// Get sub menu of parent menu
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 18;
    
    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
        break;
      }
    }
    
    // find the top level parent
    if ( ! isset( $args->direct_parent ) ) {
      $prev_root_id = $root_id;
      while ( $prev_root_id != 0 ) {
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->ID == $prev_root_id ) {
            $prev_root_id = $menu_item->menu_item_parent;
            // don't set the root_id to 0 if we've reached the top of the menu
            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          } 
        }
      }
    }

    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
        // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
        // not part of sub-tree: away with it!
        unset( $sorted_menu_items[$key] );
      }
    }
    
    return $sorted_menu_items;
  } else {
    return $sorted_menu_items;
  }
}

add_filter( 'style_loader_src',  'sdt_remove_ver_css_js', 9999, 2 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999, 2 );

function sdt_remove_ver_css_js( $src, $handle ) 
{
    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!

    if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
        $src = remove_query_arg( 'ver', $src );

    return $src;
}

/**
 * Admin panel - link to theme options
 */
if ( !function_exists( 'frontlash_theme_options_link' ) && current_user_can('manage_options') && defined('FW')) :
    add_action( 'admin_bar_menu', 'butterfly_theme_options_link', 999 );
    function butterfly_theme_options_link( $wp_admin_bar ) {
        $args = array(
            'id'    => 'jevelin-options',
            'title' => 'Butterfly Settings',
            'href'  => get_admin_url().'/themes.php?page=fw-settings',
        );
        $wp_admin_bar->add_node( $args );
    }
endif;