<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'page-format-gallery' => array(
        'type'     => 'box',
        'title'    => esc_html__('Carousel Settings for home page', 'butterfly'),
        'priority' => 'high',
        'options'  => array(
            'page-gallery' => array(
                'type'  => 'multi-upload',
                'label' => esc_html__( 'Carousel', 'butterfly' ),
                'desc'  => 'Minimum recommended Size 1000x1000 pixels. <br/> All images must be same width and height for optimal display.',
                'images_only' => true,
            )
        )
    )
);