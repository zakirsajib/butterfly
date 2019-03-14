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
function add_link_atts($atts, $item, $args) {
  	if (in_array('menu-item-type-custom', $item->classes)) {
	  $atts['data-dismiss'] = "modal";
	}
  return $atts;
}
//add_filter( 'nav_menu_link_attributes', 'add_link_atts', 10, 3 );

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

/**
* Change the Login Logo
*/
function my_login_logo() { 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	if(!empty($image)):
?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Muli:400,700,900');
        @font-face {
		    font-family: 'aleobold';
		    src: url('<?php echo get_template_directory_uri()?>/static/dist/fonts/Aleo-Bold-webfont.woff') format('woff'),
		    	url('<?php echo get_template_directory_uri()?>/static/dist/fonts/Aleo-Bold.otf') format("opentype");
		    font-weight: normal;
		    font-style: normal;
		    font-display:swap;
		}
        
        body{
			font-family: 'Muli', sans-serif;
			min-height: 800px;
			overflow-y: hidden;
			background: linear-gradient(123deg, #7300ff, #2ce6ce), linear-gradient(120deg, #3a3b57, #7300ff 40%, #2ce6ce), linear-gradient(121deg, #3a3b57, #2ce6ce)!important;
			display: flex;
			align-items: center;
			justify-content: center;
			align-self: center;
        }
        
        #login{
	        padding: 1% 0 0!important; 
	        width: 420px!important; 
	    }
        #login h1 a, 
        .login h1 a {
            background-image: url('<?php echo $image[0]?>');
            width: 48px;
            height: 48px;
            background-size: contain;
            background-position: center center;
            position: absolute;
            top:50px;
            left: 50px;
        }
        #login h1 a:focus,
        .login h1 a:focus{
	        outline: 0;
	        box-shadow: none;
        }
        
        .login form{ 
	        background: transparent!important; 
	        box-shadow: none!important;
	        padding: 43px 0 46px!important;
	        margin-top: 0!important;
	    }
	    
	    #login form p{line-height: 0!important;}
	    
	    .login form .input, 
	    .login input[type=text]{
			height: 48px;
			border-radius: 24px;
			border: solid 1px rgba(0, 0, 0, 0.1)!important;
			padding-left: 46px!important;
			box-shadow: none!important;
			font-family: 'Muli', sans-serif;
			font-size: 18px!important;
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: normal;
			color: #3a3b57!important;
			margin: 0 0 10px!important;
	    }
	    
	    .login input[type=text].user-svg{
		    background: #fff url('<?php echo get_template_directory_uri()?>/assets/img/user.svg') no-repeat;
			background-position: 12px 50%;
		}
		.login input[type=text]#pass1-text.lock-svg,
		.login input[type=password].lock-svg{
		    background: #fff url('<?php echo get_template_directory_uri()?>/assets/img/lock.svg') no-repeat;
			background-position: 12px 50%;
		}
	    
	    #login form p.submit{ 
		    margin: 85px 0 0!important;
		}
		#login form p.description.indicator-hint{
		    line-height: 1.5!important;
		    color: #fff!important;
	    }
	    .wp-core-ui .button, 
	    .wp-core-ui .button-primary{
		    float: left!important;
		    width: 200px!important;
			height: 56px!important;
			border-radius: 32px!important;
			background: #532ee4!important;
			background-color: #532ee4!important;
			color: #fff!important;
			font-family: 'Muli', sans-serif;
			font-weight: 900!important;
			font-size: 24px!important;
			font-style: normal;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: normal;
			text-align: center;
			border: 0!important;
			box-shadow: none!important;
			padding: 0!important;
			text-shadow:none!important;
	    }
	    
	    .wp-core-ui form#lostpasswordform .button-primary,
	    .wp-core-ui form#lostpasswordform .button,
	    .wp-core-ui form#resetpassform .button{
		    width: 300px!important;
	    }
	    
	    .login #backtoblog{display: none!important;}
	    .login #nav{margin: 0!important; position: relative; top:-20px;}
	    .login #nav a{
		    font-family: 'Muli', sans-serif;
			font-size: 14px;
			font-weight: normal;
			font-style: normal;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: normal;
			color: #2ce6ce!important;
			text-decoration: underline!important;
	    }
	    
	    .login form .forgetmenot{
		    margin: 26px 0 0!important;
	    }
	    
	    .login form .forgetmenot label{
		    font-family: 'Muli', sans-serif;
			font-size: 14px!important;
			font-weight: normal;
			font-style: normal;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: normal;
			color: #fff!important;
			padding-left: 1em!important;
	    }
	    
	    .login #login_error, 
	    .login .message, 
	    .login .success{
		    border: 0!important;
		    background-color: transparent!important;
		    box-shadow: none!important;
		    color: #fff!important;
		    padding: 0 12px 8px 0!important;
		    margin-bottom: 0!important;
	    }
	    .message{
		    font-family: 'Muli', sans-serif;
			font-size: 18px;
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: normal;
	    }
	    .login-msg{
		    font-family: 'aleobold', sans-serif;
			font-size: 48px;
			font-weight: bold;
			font-style: normal;
			font-stretch: normal;
			line-height: 1;
			letter-spacing: normal;
			color: #ffffff;
			margin-bottom: 16px!important;
	    }
	    span.button.button-secondary.wp-hide-pw.hide-if-no-js{
		    display: none!important;
	    }
	    .login #pass-strength-result{
		    border: 0!important;
			background-color: transparent!important;
			text-align: left!important;
			font-family: 'Muli', sans-serif!important;
	    }
	    #pass-strength-result.strong{
		    color: #2ce6ce!important;
	    }
	    #pass-strength-result.short{
		    color: #F45D6F!important;
	    }
	    #pass-strength-result.good{
		    color: #FFAC73!important;
	    }
	    #pass-strength-result.bad{
		    color: #F45D6F!important;
	    }
	    .login .pw-weak label{
		    color: #2ce6ce!important;
	    }
	    #login form#resetpassform p.submit {
			margin: 20px 0 0!important;
		}
		
		.login #login_error a {
			color: #2ce6ce;
		}
		
	    @media (max-width: 530px){
	    	#login,
	    	.wp-core-ui form#lostpasswordform .button-primary,
			.wp-core-ui form#lostpasswordform .button{
		    	width: 280px!important;
	    	}
	    }
    </style>
    <script src='<?php echo esc_url( home_url( '/' ) ); ?>/wp-includes/js/jquery/jquery.js'></script>
    <script>
	    $ = jQuery.noConflict();
		$(function ($) {
			
	    	$('.login input[type=text]').addClass('user-svg');
	    	$('.login input[type=text]').on('keyup', function(){ 
			    if($(this).val() != '' ){
			    	$(this).removeClass('user-svg');
			    	$(this).css({
					'background' : 'url( <?php echo get_template_directory_uri()?>/assets/img/user-pass.svg) no-repeat rgb(255, 255, 255)',
					'background-position' : '12px 50%'
					});
				}else{
					$(this).removeClass('user-svg');
			    	$(this).css({
					'background' : 'url( <?php echo get_template_directory_uri()?>/assets/img/user.svg) no-repeat rgb(255, 255, 255)',
					'background-position' : '12px 50%'
					});
				}			
	    	});
	    	
	    	
	    	$('.login input[type=text]#pass1-text,.login input[type=password]').addClass('lock-svg');
	    	$('.login input[type=text]#pass1-text,.login input[type=password]').on('keyup', function() { 
		    	if($(this).val() != '' ){
			    	$(this).removeClass('lock-svg');
			    	$(this).css({
					'background' : 'url( <?php echo get_template_directory_uri()?>/assets/img/lock-pass.svg) no-repeat rgb(255, 255, 255)',
					'background-position' : '12px 50%'
					});
				}else{
					$(this).removeClass('lock-svg');
			    	$(this).css({
					'background' : 'url( <?php echo get_template_directory_uri()?>/assets/img/lock.svg) no-repeat rgb(255, 255, 255)',
					'background-position' : '12px 50%'
					});
				}			
	    	});
	    });
    </script>
    
<?php endif;}
	
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function custom_login_message() {
	$message = '<h2 class="login-msg">Login</h2><p class="message">Welcome back!<br />Let’s get you logged in and ready to rumble.</p>';
return $message;
}
add_filter('login_message', 'custom_login_message');


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Butterfly.ai | Great Managers make great teams.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function login_function() {
    add_filter( 'gettext', 'username_change', 20, 3 );
    function username_change( $translated_text, $text, $domain ) 
    {
        if ($text === 'Username or Email Address') 
        {
            $translated_text = '';
        }
        if ($text === 'Password') 
        {
            $translated_text = '';
        }
        if ($text === 'New password') 
        {
            $translated_text = '';
        }
        return $translated_text;
    }
}
add_action( 'login_head', 'login_function' );

remove_filter('the_content','wpautop');

//decide when you want to apply the auto paragraph

add_filter('the_content','my_custom_formatting');

function my_custom_formatting($content){
if(get_post_type()=='b_testimonial') //if it does not work, you may want to pass the current post object to get_post_type
    return $content;//no autop
else
 return wpautop($content);
}
