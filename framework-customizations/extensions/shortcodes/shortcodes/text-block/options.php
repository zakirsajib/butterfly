<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'id' => array( 'type' => 'unique' ),
	'general' => array(
		'title'   => esc_html__( 'General', 'fw' ),
		'type'    => 'tab',
		'options' => array(
			'text' => array(
				'type'   => 'wp-editor',
				'size'   => 'large',
				'label'  => __( 'Content', 'fw' ),
				'desc'   => __( 'Enter some content for this texblock', 'fw' ),
				'editor_height' => 260
			),
		),
	),
	'styling' => array(
		'title'   => esc_html__( 'Styling', 'fw' ),
		'type'    => 'tab',
		'options' => array(
			'text_class' => array(
				'label' => __('Text Block Class', 'fw'),
				'desc'  => __('Enter custom css class name', 'fw'),
				'type'  => 'text',
			),
		),
	),
);