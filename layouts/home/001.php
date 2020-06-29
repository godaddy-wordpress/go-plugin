<?php
/**
 * Home #001 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/spacer',
		array(
			'height' => 60,
		),
		array(),
	),
	array(
		'core/heading',
		array(
			'align'           => 'center',
			'content'         => __( 'Where the hustle slows, the rhythm is heard, and the beans are fantastic', 'go-plugin' ),
			'level'           => 2,
			'fontWeight'      => '',
			'textTransform'   => '',
			'noBottomSpacing' => false,
			'noTopSpacing'    => false,
		),
		array(),
	),
	array(
		'core/spacer',
		array(
			'height' => 20,
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
			'id'              => 1,
			'sizeslug'        => 'full',
			'linkDestination' => 'none',
			'className'       => 'is-style-default',
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
							'content'         => __( 'Enjoy Live Music + the Best Coffee You\'ve Ever Had', 'go-plugin' ),
							'level'           => 3,
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
		'coblocks/services',
		array(
			'columns'      => 2,
			'gutter'       => 'huge',
			'align'        => 'wide',
			'headingLevel' => 4,
			'buttons'      => false,
			'className'    => 'is-style-threebyfour',
			'align'        => 'wide',
		),
		array(
			array(
				'coblocks/service',
				array(
					'headingLevel' => 4,
					'showCta'      => false,
					'imageUrl'     => GO_PLUGIN_URL . '/images/2x3.jpg',
					'imageAlt'     => __( 'Image description', 'go-plugin' ),
					'alignment'    => 'none',
				),
				array(
					array(
						'core/heading',
						array(
							'content'         => __( 'A social house', 'go-plugin' ),
							'level'           => 4,
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
							'content'         => __( 'With our guides\' experience, we will not only get you to where the fish are - but we\'ll get you hooked on them too. Our crew is knowledgeable and friendly - ready to take you on the trip of your dreams.', 'go-plugin' ),
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
				'coblocks/service',
				array(
					'headingLevel' => 4,
					'showCta'      => false,
					'imageUrl'     => GO_PLUGIN_URL . '/images/2x3.jpg',
					'imageAlt'     => __( 'Image description', 'go-plugin' ),
					'alignment'    => 'none',
				),
				array(
					array(
						'core/heading',
						array(
							'content'         => __( 'A listening room', 'go-plugin' ),
							'level'           => 4,
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
							'content'         => __( 'Folks have fought some monster bluefin tuna on standup gear with our offshore fishing packager, which is an incredible challenge for sure! Stick to the shoreline and test your strength pulling in some biggies!', 'go-plugin' ),
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
		),
	),
);
