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
                'desc'  => esc_html__( 'Upload images to your carousel', 'butterfly' ),
                'images_only' => true,
            )
        )
    )
);