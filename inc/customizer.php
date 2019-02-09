<?php
/**
 * Butterfly Theme Customizer
 *
 * @package Butterfly
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function butterfly_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a, .site-title',
			'render_callback' => 'butterfly_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'butterfly_customize_partial_blogdescription',
		) );
		
	}
	
/*
	$wp_customize->add_panel( 'panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'zsonline' ),
	    'description' => __( 'Description of what this panel does.', 'zsonline' ),
	) );
	$wp_customize->add_section( 'section_copyright', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Copyright', 'zsonline' ),
			'description' => '',
			'panel' => 'panel_id',
	) );
	$wp_customize->add_setting( 'copyright_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'copyright_text', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_copyright',
	    'label' => __( 'Copyright Info Field', 'zsonline' ),
	    'description' => '',
	) );
*/

	
	
}
add_action( 'customize_register', 'butterfly_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function butterfly_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function butterfly_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function butterfly_customize_partial_panel_id() {
	
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function butterfly_customize_preview_js() {
	wp_enqueue_script( 'butterfly-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'butterfly_customize_preview_js' );
