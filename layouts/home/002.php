<?php
/**
 * Home #002 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/image',
		array(
			'align'           => 'full',
			'url'             => GO_PLUGIN_DIR . '/images/2x3.jpg',
			'alt'             => __( 'Image description', 'go-plugin' ),
			'caption'         => '',
			'id'              => 0,
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
		'core/heading',
		array(
			'align'           => 'center',
			'content'         => __( 'Our approach reflects the people we serve. We are diverse, yet the same.', 'go-plugin' ),
			'level'           => 2,
			'fontWeight'      => '',
			'textTransform'   => '',
			'noBottomSpacing' => false,
			'noTopSpacing'    => false,
		),
		array(),
	),
	array(
		'core/button',
		array(
			'url'             => 'https://godaddy.com',
			'text'            => __( 'Learn More', 'go-plugin' ),
			'align'           => 'center',
			'className'       => 'is-style-default',
			'fontWeight'      => '',
			'textTransform'   => '',
			'noBottomSpacing' => false,
			'noTopSpacing'    => false,
			'isFullwidth'     => false,
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
			'sizeslug'       => 'large',
			'align'          => 'wide',
			'noBottomMargin' => false,
			'noTopMargin'    => false,
		),
		array(),
	),
	array(
		'core/columns',
		array(
			'align' => 'wide',
		),
		array(
			array(
				'core/column',
				array(
					'width' => 40,
				),
				array(
					array(
						'core/quote',
						array(
							'value'           => '<p>We are 100% committed to quality. From the coffee we source, to the love with which it is roasted by.</p>',
							'citation'        => 'Jenna Stone, Founder',
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
					'width' => 60,
				),
				array(
					array(
						'core/paragraph',
						array(
							'content'         => __( 'When we set up shop with an espresso machine up front and a roaster in the back, we hoped to some day be a part of New York\'s rich tradition of service and culinary achievement. Everyday this aspiration drives us.', 'go-plugin' ),
							'dropCap'         => false,
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
							'content'         => __( 'The city\'s energy binds us together. It drives us to be the best.', 'go-plugin' ),
							'dropCap'         => false,
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
							'content'         => __( 'This fairly new coffee shop, conveniently located in downtown Scottsdale, is one of the best coffee shops I\'ve ever been to, and trust me when I say, I\'ve been to many. The owners and the staff will make you feel like an old friend or even family.', 'go-plugin' ),
							'dropCap'         => false,
							'fontWeight'      => '',
							'textTransform'   => '',
							'noBottomSpacing' => false,
							'noTopSpacing'    => false,
						),
						array(),
					),
					array(
						'core/button',
						array(
							'url'             => 'https://godaddy.com',
							'text'            => __( 'Grab a cup', 'go-plugin' ),
							'fontWeight'      => '',
							'textTransform'   => '',
							'noBottomSpacing' => false,
							'noTopSpacing'    => false,
							'isFullwidth'     => false,
						),
						array(),
					),
				),
			),
		),
	),
	array(
		'core/image',
		array(
			'align'           => 'full',
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
);
