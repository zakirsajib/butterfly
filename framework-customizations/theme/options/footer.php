<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title'   => esc_html__( 'Footer', 'jevelin' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'footer-box' => array(
				'title'   => esc_html__( 'Footer Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'social_facebook' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Facebok URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Facebook icon.', 'jevelin'),
					),
					'social_instagram' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Instagram URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Instagram icon.', 'jevelin'),
					),
					'social_twitter' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Twitter URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Twitter icon.', 'jevelin'),
					),

					'social_linkedin' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('LinkedIn URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the LinkedIn icon.', 'jevelin'),
					),
					'social_link' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Email Address', 'jevelin'),
						'desc'  => esc_html__('Enter your email address.', 'jevelin'),
					),
					'footer_company_name' => array(
						'type'  => 'text',
						'value' => 'Appynest Inc.',
						'label' => esc_html__('Company Name', 'jevelin'),
					),
					'footer_copyright_title_one' => array(
						'type'  => 'text',
						'value' => 'All rights reserved',
						'label' => esc_html__('Copyright Text', 'jevelin'),
					),
					'footer_copyright_title_two' => array(
						'type'  => 'text',
						'value' => 'A First Growth VC Company | Made in New York',
						'label' => esc_html__('Extra Copyright Text', 'jevelin'),
					),										
				)
			),
		)
	)
);
