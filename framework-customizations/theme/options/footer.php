<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title'   => esc_html__( 'Footer', 'butterfly' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'footer-box' => array(
				'title'   => esc_html__( 'Footer Settings', 'butterfly' ),
				'type'    => 'box',
				'options' => array(
					'social_facebook' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Facebok URL', 'butterfly'),
						'desc'  => esc_html__('Enter your custom link to show the Facebook icon.', 'butterfly'),
					),
					'social_instagram' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Instagram URL', 'butterfly'),
						'desc'  => esc_html__('Enter your custom link to show the Instagram icon.', 'butterfly'),
					),
					'social_twitter' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Twitter URL', 'butterfly'),
						'desc'  => esc_html__('Enter your custom link to show the Twitter icon.', 'butterfly'),
					),

					'social_linkedin' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('LinkedIn URL', 'butterfly'),
						'desc'  => esc_html__('Enter your custom link to show the LinkedIn icon.', 'butterfly'),
					),
					'social_link' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Email Address', 'butterfly'),
						'desc'  => esc_html__('Enter your email address.', 'butterfly'),
					),
					'footer_company_name' => array(
						'type'  => 'text',
						'value' => 'Appynest Inc.',
						'label' => esc_html__('Company Name', 'butterfly'),
					),
					'footer_copyright_title_one' => array(
						'type'  => 'text',
						'value' => 'All rights reserved',
						'label' => esc_html__('Copyright Text', 'butterfly'),
					),
					'footer_copyright_title_two' => array(
						'type'  => 'text',
						'value' => 'A First Growth VC Company | Made in New York',
						'label' => esc_html__('Extra Copyright Text', 'butterfly'),
					),										
				)
			),
		)
	)
);
