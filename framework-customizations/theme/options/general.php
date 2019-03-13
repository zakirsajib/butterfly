<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'general' => array(
		'title'   => esc_html__( 'General', 'butterfly' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => esc_html__( 'General Settings', 'butterfly' ),
				'type'    => 'box',
				'options' => array(
					'already_using_butterfly' => array(
						'type'  => 'text',
						'value' => 'Already using Butterfly?',
						'label' => esc_html__('Already using Butterfly?', 'butterfly'),
					),
					'signin-label' => array(
						'type'  => 'text',
						'value' => 'Sign in',
						'label' => esc_html__('Sign in', 'butterfly'),
					),
					'signin-url' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Sign In URL', 'butterfly'),
					),
					'get_started_now' => array(
						'type'  => 'text',
						'value' => 'Get started now!',
						'label' => esc_html__('Get started now!', 'butterfly'),
					),
					'request_a_demo' => array(
						'type'  => 'text',
						'value' => 'Request a demo',
						'label' => esc_html__('Request a demo', 'butterfly'),
					),
					'from_the_blog' => array(
						'type'  => 'text',
						'value' => 'From the blog:',
						'label' => esc_html__('From the blog:', 'butterfly'),
					),
				)
			),
		)
	)
);
