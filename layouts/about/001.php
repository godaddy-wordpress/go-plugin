<?php
/**
 * About #001 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/heading',
		array(
			'align'   => 'center',
			'content' => __( 'Hi, I’m Everett', 'go-plugin' ),
			'level'   => 2,
		),
		array(),
	),
	array(
		'core/paragraph',
		array(
			'align'   => 'center',
			'content' => __( 'A tenacious, loving and energetic photographer who enjoys grabbing her camera and running out to take some photos.', 'go-plugin' ),
			'dropCap' => false,
		),
		array(),
	),
	array(
		'core/button',
		array(

			'text'  => __( 'Work With Me', 'go-plugin' ),
			'align' => 'center',
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
					'id'      => 'about-image-1',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'about-image-1',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'fullUrl' => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'about-image-1',
					'caption' => '',
				),
			),
			'ids'       => array(),
			'caption'   => '',
			'imageCrop' => true,
			'linkTo'    => 'none',
			'sizeslug'  => 'large',
			'columns'   => 3,
			'align'     => 'wide',
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
				array(),
				array(
					array(
						'core/heading',
						array(
							'content' => __( 'Early on', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'content' => __( 'I am so fascinated by photography and it’s capability to bring your imagination to amazing places. Early on, I fell in love with the idea of filming my own productions, so I set out to learn everything I could.', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
			array(
				'core/column',
				array(),
				array(
					array(
						'core/heading',
						array(
							'content' => __( 'Current', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'content' => __( 'I have been teaching myself filmmaking for the past four and a half years and I’m still learning every day. I am building my business as a freelance filmmaker, as well as working on my own photo shoots.', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
		),
	),
);
