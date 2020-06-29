<?php
/**
 * Home #004 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/group',
		array(
			'align' => 'wide',
		),
		array(
			array(
				'core/paragraph',
				array(
					'align'   => 'center',
					'content' => __( 'Hello! We\'re a', 'go-plugin' ),
					'dropCap' => false,
				),
				array(),
			),
			array(
				'core/heading',
				array(
					'align'   => 'center',
					'content' => __( 'Branding &amp; Digital Design<br>Studio in Tokyo', 'go-plugin' ),
					'level'   => 2,
				),
				array(),
			),
			array(
				'core/button',
				array(
					'text'  => __( 'Let\'s Talk', 'go-plugin' ),
					'align' => 'center',
				),
				array(),
			),
		),
	),
	array(
		'core/gallery',
		array(
			'images'    => array(
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-1',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-2',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-3',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-4',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-5',
					'caption' => '',
				),
			),
			'ids'       => array(),
			'caption'   => '',
			'imageCrop' => true,
			'linkTo'    => 'none',
			'sizeslug'  => 'large',
			'align'     => 'wide',
		),
		array(),
	),
	array(
		'core/image',
		array(
			'url'             => GO_PLUGIN_URL . '/images/2x3.jpg',
			'alt'             => __( 'Image description', 'go-plugin' ),
			'caption'         => '',
			'linkDestination' => 'none',
			'className'       => 'size-large',
			'align'           => 'wide',
		),
		array(),
	),
	array(
		'core/gallery',
		array(
			'images'    => array(
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-7',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-8',
					'caption' => '',
				),
			),
			'ids'       => array(),
			'caption'   => '',
			'imageCrop' => true,
			'linkTo'    => 'none',
			'sizeslug'  => 'large',
			'align'     => 'wide',
		),
		array(),
	),
	array(
		'core/group',
		array(
			'align' => 'wide',
		),
		array(
			array(
				'core/paragraph',
				array(
					'align'   => 'center',
					'content' => __( 'Need our help?', 'go-plugin' ),
					'dropCap' => false,
				),
				array(),
			),
			array(
				'core/heading',
				array(
					'align'   => 'center',
					'content' => __( 'We Create Brands and Inspire Experiences', 'go-plugin' ),
					'level'   => 2,
				),
				array(),
			),
			array(
				'core/button',
				array(
					'text'  => __( 'Let\'s Talk', 'go-plugin' ),
					'align' => 'center',
				),
				array(),
			),
		),
	),
);
