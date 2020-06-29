<?php
/**
 * Home #003 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/image',
		array(
			'url'             => GO_PLUGIN_URL . '/images/2x3.jpg',
			'alt'             => __( 'Image description', 'go-plugin' ),
			'caption'         => '',
			'linkDestination' => 'none',
			'className'       => 'alignfull size-full is-style-default',
			'align'           => 'full',
		),
		array(),
	),
	array(
		'core/heading',
		array(
			'align'   => 'center',
			'content' => __( 'Bringing the finest culinary food from the heart of Asia directly to you', 'go-plugin' ),
			'level'   => 2,
		),
		array(),
	),
	array(
		'core/button',
		array(

			'text'  => __( 'View our Menu', 'go-plugin' ),
			'align' => 'center',
		),
		array(),
	),
	array(
		'coblocks/shape-divider',
		array(
			'align'            => 'full',
			'height'           => 100,
			'shapeHeight'      => 68,
			'backgroundHeight' => 20,
			'syncHeight'       => true,
			'syncHeightAlt'    => true,
			'verticalFlip'     => false,
			'horizontalFlip'   => true,
			'color'            => 'tertiary',
			'customColor'      => '#111',
			'noBottomMargin'   => true,
			'noTopMargin'      => false,
			'justAdded'        => false,
			'className'        => 'coblocks-shape-divider-8714192337 is-style-angled mb-0',
		),
		array(),
	),
	array(
		'core/group',
		array(
			'backgroundColor' => 'tertiary',
			'align'           => 'full',
			'className'       => 'mb-0 mt-0',
			'noBottomMargin'  => true,
			'noTopMargin'     => true,
		),
		array(
			array(
				'core/paragraph',
				array(
					'content' => __( '<strong>Sushi Nakazawa</strong>&nbsp;serves the&nbsp;<em>omakase</em>&nbsp;of&nbsp;<strong>Chef Daisuke Nakazawa</strong>. Within the twenty-course meal lies Chef Nakazawa’s passion for sushi. With ingredients sourced both domestically and internationally, the chef crafts a very special tasting menu within the style of Edomae sushi. Chef Nakazawa is a strong believer in the food he serves representing the waters he is surrounded by, so only the best and freshest find its way to your plate.', 'go-plugin' ),
					'dropCap' => false,
				),
				array(),
			),
			array(
				'core/paragraph',
				array(
					'content' => __( 'The relaxed dining experience at Sushi Nakazawa is chic nonetheless. High back leather chairs at the sushi bar coddle you while each course is explained in detail, and every nuance is revealed. Whether an Edomae novice or self-proclaimed sushi foodie, you will leave with a feeling of euphoria.', 'go-plugin' ),
					'dropCap' => false,
				),
				array(),
			),
		),
	),
	array(
		'coblocks/shape-divider',
		array(
			'align'            => 'full',
			'height'           => 100,
			'shapeHeight'      => 69,
			'backgroundHeight' => 20,
			'syncHeight'       => true,
			'syncHeightAlt'    => true,
			'verticalFlip'     => true,
			'horizontalFlip'   => false,
			'color'            => 'tertiary',
			'customColor'      => '#111',
			'noBottomMargin'   => true,
			'noTopMargin'      => true,
			'justAdded'        => false,
			'className'        => 'coblocks-shape-divider-8714192337 is-style-angled mb-0 mt-0',
		),
		array(),
	),
	array(
		'coblocks/services',
		array(
			'columns'      => 3,
			'gutter'       => 'medium',
			'alignment'    => 'center',
			'headingLevel' => 3,
			'buttons'      => false,
			'className'    => 'is-style-square',
			'align'        => 'wide',
		),
		array(
			array(
				'coblocks/service',
				array(
					'headingLevel' => 3,
					'showCta'      => false,
					'imageUrl'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'imageAlt'     => __( 'Image description', 'go-plugin' ),
					'alignment'    => 'center',
				),
				array(
					array(
						'core/heading',
						array(
							'align'   => 'center',
							'content' => __( 'Authentic', 'go-plugin' ),
							'level'   => 3,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( 'The relaxed dining experience at Bento is chic and airy. High back chairs at the sushi bar coddle you for each course.', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
			array(
				'coblocks/service',
				array(
					'headingLevel' => 3,
					'showCta'      => false,
					'imageUrl'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'imageAlt'     => __( 'Image description', 'go-plugin' ),
					'alignment'    => 'center',
				),
				array(
					array(
						'core/heading',
						array(
							'align'       => 'center',
							'content'     => __( 'Historical', 'go-plugin' ),
							'level'       => 3,
							'placeholder' => __( 'Write title...', 'go-plugin' ),
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( 'Housed in the original Yami House, the history behind Bento is amazing. Learn more as you dine in our historical dining room.', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
			array(
				'coblocks/service',
				array(
					'headingLevel' => 3,
					'showCta'      => false,
					'imageUrl'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'imageAlt'     => __( 'Image description', 'go-plugin' ),
					'alignment'    => 'center',
				),
				array(
					array(
						'core/heading',
						array(
							'align'       => 'center',
							'content'     => __( 'Best-rated', 'go-plugin' ),
							'level'       => 3,
							'placeholder' => __( 'Write title...', 'go-plugin' ),
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( 'Bento is one of the best-rated restaurants in the region. With glamourous food and delicious drinks - you won\'t want to miss out!', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
		),
	),
	array(
		'coblocks/shape-divider',
		array(
			'align'            => 'full',
			'height'           => 100,
			'shapeHeight'      => 69,
			'backgroundHeight' => 20,
			'syncHeight'       => true,
			'syncHeightAlt'    => true,
			'verticalFlip'     => false,
			'horizontalFlip'   => false,
			'color'            => 'tertiary',
			'customColor'      => '#111',
			'noBottomMargin'   => true,
			'noTopMargin'      => true,
			'justAdded'        => false,
			'className'        => 'coblocks-shape-divider-8714192337 is-style-angled mb-0 mt-0',
		),
		array(),
	),
	array(
		'core/group',
		array(
			'backgroundColor' => 'tertiary',
			'align'           => 'full',
			'className'       => 'mb-0 mt-0',
			'noBottomMargin'  => true,
			'noTopMargin'     => true,
		),
		array(
			array(
				'core/columns',
				array(),
				array(
					array(
						'core/column',
						array(
							'width' => 18.44,
						),
						array(),
					),
					array(
						'core/column',
						array(
							'width' => 66.56,
						),
						array(
							array(
								'core/heading',
								array(
									'align'   => 'center',
									'content' => __( 'Bento, Steak &amp; Sushi', 'go-plugin' ),
									'level'   => 3,
								),
								array(),
							),
							array(
								'core/paragraph',
								array(
									'align'   => 'center',
									'content' => __( '123 Example Rd', 'go-plugin' ),
									'dropCap' => false,
								),
								array(),
							),
							array(
								'core/paragraph',
								array(
									'align'   => 'center',
									'content' => __( 'Scottsdale, AZ 85260', 'go-plugin' ),
									'dropCap' => false,
								),
								array(),
							),
							array(
								'core/button',
								array(
									'text'      => __( 'Reservations', 'go-plugin' ),
									'align'     => 'center',
									'className' => 'is-style-default',
								),
								array(),
							),
						),
					),
					array(
						'core/column',
						array(
							'width' => 15,
						),
						array(),
					),
				),
			),
		),
	),
	array(
		'coblocks/shape-divider',
		array(
			'align'            => 'full',
			'height'           => 100,
			'shapeHeight'      => 69,
			'backgroundHeight' => 20,
			'syncHeight'       => true,
			'syncHeightAlt'    => true,
			'verticalFlip'     => true,
			'horizontalFlip'   => true,
			'color'            => 'tertiary',
			'customColor'      => '#111',
			'noBottomMargin'   => true,
			'noTopMargin'      => true,
			'className'        => 'coblocks-shape-divider-8714192337 is-style-angled mt-0 mb-0',
		),
		array(),
	),
);
