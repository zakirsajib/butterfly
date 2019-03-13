<?php
/**
 * Butterfly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Butterfly
 */

if ( ! function_exists( 'butterfly_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function butterfly_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Butterfly, use a find and replace
		 * to change 'butterfly' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'butterfly', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		
		add_image_size( 'dropdown-blog-size', 120, 80 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'butterfly' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'butterfly_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 48,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'butterfly_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function butterfly_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'butterfly_content_width', 1200 );
}
add_action( 'after_setup_theme', 'butterfly_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function butterfly_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'butterfly' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'butterfly' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'butterfly_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function butterfly_scripts() {
	wp_enqueue_style( 'butterfly-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/assets/animate.min.css' );
	
	
	
	if( is_home() || is_front_page() || is_page('resources') || is_page('blog') ):
		wp_enqueue_style( 'slick', get_template_directory_uri() .'/assets/slick/slick.css' );
	endif;
	
	wp_enqueue_style( 'main', get_template_directory_uri() .'/static/dist/css/main.css' );
	
	
	if(is_page('about-us')):
		wp_enqueue_style( 'aboutbutterfly', get_template_directory_uri() .'/assets/about/css/butterflyWebsiteAbout.css' );
		wp_enqueue_style( 'slick', get_template_directory_uri() .'/assets/slick/slick.css' );
		wp_enqueue_style( 'casestudybutterfly', get_template_directory_uri() .'/assets/casestudy/css/butterflyCaseStudy.css' );
		wp_enqueue_style( 'blogpostbutterfly', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
	endif;
	
	
	wp_enqueue_style( 'menubutterfly', get_template_directory_uri() .'/assets/menu/css/butterflyWebsiteMenuOpen.css' );
	
	if( is_home() || is_front_page() ):
		wp_enqueue_style( 'homebutterfly', get_template_directory_uri() .'/assets/home/css/butterflyWebsiteHome.css' );
		wp_enqueue_style( 'blogpostbutterfly', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
	endif;
	
	if(is_page()|| is_404()):
	wp_enqueue_style( 'blogpostbutterfly', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
	endif;
	
	if(is_page('blog') || is_category( ) || is_tag()):
		wp_enqueue_style( 'blogbutterfly', get_template_directory_uri() .'/assets/blog/css/butterflyWebsiteBlog.css' );
		wp_enqueue_style( 'blogFilterbutterfly', get_template_directory_uri() .'/assets/archive/css/butterflyWebsiteBlogFilters.css' );
	endif;
	
	
	
	if(is_page('resources')):
		wp_enqueue_style( 'resourcesbutterfly', get_template_directory_uri() .'/assets/resources/css/butterflyWebsiteResources.css' );
		wp_enqueue_style( 'casestudybutterfly', get_template_directory_uri() .'/assets/casestudy/css/butterflyCaseStudy.css' );
		wp_enqueue_style( 'blogpostbutterfly', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
	endif;
	
	wp_enqueue_style( 'demobutterfly', get_template_directory_uri() .'/assets/demo/css/butterflyRequestDemoForm.css' );

	wp_enqueue_style( 'thanksbutterfly', get_template_directory_uri() .'/assets/thanks/css/butterflyRequestDemoFormThanks.css' );
	
	// Smoothscroll
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/smoothscroll/smoothscroll.js', array( ), '1.4.4', true );
	
	// Lazyload
	wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/assets/lazysizes/lazysizes.min.js', array('jquery'), null, true );

	if( is_home() || is_front_page() ):
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/sticky/jquery.sticky-kit.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js', array('jquery'), null, true );
	endif;
	
	if( is_page('resources')):
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'resources', get_template_directory_uri() . '/js/resources.js', array('jquery'), null, true );
	endif;
	
	if(is_page('about-us')):
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/sticky/jquery.sticky-kit.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'about', get_template_directory_uri() . '/js/about.js', array('jquery'), null, true );
	endif;
	
	if( is_page('product') ):
		wp_enqueue_style( 'blogpostbutterfly', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
		
		wp_enqueue_script( 'product', get_template_directory_uri() . '/js/product.js', array('jquery'), null, true );
	endif;
	
	if(is_page('blog')):
		wp_enqueue_style( 'blogpostbutterfly', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'blog', get_template_directory_uri() . '/js/blog.js', array('jquery'), null, true );
	endif;
	
	if(is_category() || is_tag()):
		wp_enqueue_style( 'blogpostbutterflycat', get_template_directory_uri() .'/assets/blogpost/css/butterflyBlogPost.css' );
	endif;
	
	wp_enqueue_script( 'butterfly-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'butterfly-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/static/dist/js/app.min.js', array('jquery'), null, true );
	
	// Custom css if needed
	require get_template_directory() . '/inc/custom-css.php';
	// Custom js if needed
	require get_template_directory() . '/inc/custom-js.php';
	// Google-analytics if used
	require get_template_directory() . '/inc/google-analytics.php';
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'butterfly_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Thumbnail images of Unyson Home page carousel
*/
function load_custom_wp_admin_style() {        
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
/**
 * Admin panel - load styles and scripts in theme options
 */
if( defined('FW') && is_admin() && isset( $_GET['page'] ) && $_GET['page'] == 'fw-settings' ) :

    function frontlash_admin_enqueue_styles() {
        wp_enqueue_style( 'frontlash-theme-options', get_template_directory_uri() . '/assets/admin/theme-options.css' );
    }
    add_action( 'admin_enqueue_scripts', 'frontlash_admin_enqueue_styles' );

endif;