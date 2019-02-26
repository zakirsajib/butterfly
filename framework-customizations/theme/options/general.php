<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'general' => array(
		'title'   => esc_html__( 'General', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => esc_html__( 'General Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'signin-url' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Sign In URL', 'jevelin'),
					),
				
				)
			),
		)
	)
);
