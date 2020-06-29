<?php
/**
 * Portfolio #001 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/columns',
		array(
			'align' => 'wide',
		),
		array(
			array(
				'core/column',
				array(
					'width' => 20,
				),
				array(),
			),
			array(
				'core/column',
				array(
					'width' => 60,
				),
				array(
					array(
						'core/heading',
						array(
							'align'           => 'center',
							'content'         => __( 'Gallery', 'go-plugin' ),
							'level'           => 2,
							'fontWeight'      => '',
							'textTransform'   => '',
							'noBottomSpacing' => false,
							'noTopSpacing'    => false,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'           => 'center',
							'content'         => __( 'Connecting audience + artist in our lush, speakeasy-style listening room. Only 50 seats available for this sought-after scene.', 'go-plugin' ),
							'dropCap'         => false,
							'fontWeight'      => '',
							'textTransform'   => '',
							'noBottomSpacing' => false,
							'noTopSpacing'    => false,
						),
						array(),
					),
				),
			),
			array(
				'core/column',
				array(
					'width' => 20,
				),
				array(),
			),
		),
	),
	array(
		'core/image',
		array(
			'align'           => 'wide',
			'url'             => GO_PLUGIN_URL . '/images/2x3.jpg',
			'alt'             => __( 'Image description', 'go-plugin' ),
			'caption'         => '',
			'id'              => 3,
			'sizeslug'        => 'full',
			'linkDestination' => 'none',
			'noBottomMargin'  => false,
			'noTopMargin'     => false,
			'cropX'           => 0,
			'cropY'           => 0,
			'cropWidth'       => 100,
			'cropHeight'      => 100,
			'cropRotation'    => 0,
		),
		array(),
	),
	array(
		'core/gallery',
		array(
			'images'         => array(
				array(
					'url' => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt' => __( 'Image description', 'go-plugin' ),
					'id'  => '1',
				),
				array(
					'url' => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt' => __( 'Image description', 'go-plugin' ),
					'id'  => '2',
				),
			),
			'ids'            => array(
				1,
				2,
			),
			'imageCrop'      => true,
			'linkTo'         => 'none',
			'sizeslug'       => 'full',
			'align'          => 'wide',
			'noBottomMargin' => true,
			'noTopMargin'    => true,
		),
		array(),
	),
	array(
		'core/image',
		array(
			'align'           => 'wide',
			'url'             => GO_PLUGIN_URL . '/images/2x3.jpg',
			'alt'             => __( 'Image description', 'go-plugin' ),
			'caption'         => '',
			'id'              => 3,
			'sizeslug'        => 'full',
			'linkDestination' => 'none',
			'noBottomMargin'  => true,
			'noTopMargin'     => true,
			'cropX'           => 0,
			'cropY'           => 0,
			'cropWidth'       => 100,
			'cropHeight'      => 100,
			'cropRotation'    => 0,
		),
		array(),
	),
);
