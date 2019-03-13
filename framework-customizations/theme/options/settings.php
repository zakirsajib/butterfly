<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'general' ),
	fw()->theme->get_options( 'footer' ),
	//fw()->theme->get_options( 'blog' ),
	//fw()->theme->get_options( '404_page' ),
	fw()->theme->get_options( 'custom_code' )
);
