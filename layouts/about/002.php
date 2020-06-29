<?php
/**
 * About #002 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/cover',
		array(
			'overlayColor' => 'tertiary',
			'align'        => 'wide',
		),
		array(
			array(
				'core/heading',
				array(
					'align'     => 'center',
					'content'   => __( 'Protecting yourself', 'go-plugin' ),
					'level'     => 1,
					'textColor' => 'primary',
				),
				array(),
			),
			array(
				'core/paragraph',
				array(
					'align'     => 'center',
					'content'   => __( 'Miller &amp; Cole is tremendously proud of the impact that we have made in helping our clients by providing quality legal services and exceptional service.', 'go-plugin' ),
					'dropCap'   => false,
					'textColor' => 'primary',
				),
				array(),
			),
		),
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
							'align'   => 'left',
							'content' => __( 'Quality Results', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'content' => __( 'Our goal is to create assets from our clients’ innovations through patent, trademark and copyright law.&nbsp; We take great pride in providing quality trademark legal services and exceptional customer service every single day.', 'go-plugin' ),
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
							'align'   => 'left',
							'content' => __( 'Experienced', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'content' => __( 'The attorneys at Miller &amp; Cole work as a team to exceed each of our clients’ expectations. We have 30+ years of high-level experience helping businesses protecting the time, money and resources spent developing ideas and inventions.', 'go-plugin' ),
							'dropCap' => false,
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
			'url'             => GO_PLUGIN_URL . '/images/2x3.jpg',
			'alt'             => __( 'Image description', 'go-plugin' ),
			'caption'         => '',
			'linkDestination' => 'none',
			'className'       => 'size-full',
			'align'           => 'wide',
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
							'align'   => 'center',
							'content' => __( 'Contact', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( 'Office => (555) 555-5555<br>email@example.com', 'go-plugin' ),
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
							'align'   => 'center',
							'content' => __( 'Location', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( '123 Example Rd<br>Scottsdale, AZ 85260', 'go-plugin' ),
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
							'align'   => 'center',
							'content' => __( 'Connect', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( '<a href="https://twitter.com">Twitter</a><br><a href="https://www.facebook.com">Facebook</a><br>', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
		),
	),
);
