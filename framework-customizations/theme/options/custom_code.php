<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'custom' => array(
		'title'   => esc_html__( 'Custom Code', 'butterfly' ),
		'type'    => 'tab',
		'options' => array(
			'custom-box' => array(
				'title'   => esc_html__( 'Custom', 'butterfly' ),
				'type'    => 'box',
				'options' => array(

					'custom_css'   => array(
						'label' => esc_html__( 'CSS Code', 'butterfly' ),
						'desc'  => esc_html__( 'Just want to do some quick CSS changes? Enter them here, they will be applied to the theme. If you need to change major portions of the theme please use the custom.css file.', 'butterfly' ),
						'type'  => 'textarea',
					),

					'custom_js'   => array(
						'label' => esc_html__( 'JavaScript Code', 'butterfly' ),
						'desc'  => esc_html__( 'Enter your JavaScript code', 'butterfly' ),
						'type'  => 'textarea',
					),

					'google_analytics'   => array(
						'label' => esc_html__( 'Google Analytics ID', 'butterfly' ),
						'desc'  => esc_html__( 'Enter your Google Analytics ID like UA-XXXXX-Y to enable Google Analytics statistic', 'butterfly' ),
						'type'  => 'text',
						'attr'  => array( 'style' => 'max-width: 150px' ),
					),

				)
			),
		)
	)
);
