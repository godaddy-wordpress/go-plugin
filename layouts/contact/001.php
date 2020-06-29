<?php
/**
 * Contact #001 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/heading',
		array(
			'align'   => 'center',
			'content' => __( 'Let\'s get in touch', 'go-plugin' ),
			'level'   => 2,
		),
		array(),
	),
	array(
		'core/paragraph',
		array(
			'align'   => 'center',
			'content' => __( 'Well hello there, wonderful, fabulous&nbsp;you!&nbsp;If you’d like to get in touch with me, please feel free to give me a call at (555) 555-5555, or send a message with the form down below. Either way, I\'ll be in touch shortly!', 'go-plugin' ),
			'dropCap' => false,
		),
		array(),
	),
	array(
		'core/spacer',
		array(
			'height' => 30,
		),
		array(),
	),
	array(
		'coblocks/form',
		array(
			'subject' => null,
			'to'      => null,
		),
		array(
			array(
				'coblocks/field-name',
				array(
					'label'          => 'Name',
					'required'       => false,
					'hasLastName'    => false,
					'labelFirstName' => 'First',
					'labelLastName'  => 'Last',
				),
				array(),
			),
			array(
				'coblocks/field-email',
				array(
					'label'    => 'Email',
					'required' => true,
				),
				array(),
			),
			array(
				'coblocks/field-textarea',
				array(
					'label'    => 'Message',
					'required' => true,
				),
				array(),
			),
			array(
				'coblocks/field-submit-button',
				array(
					'submitButtonText' => __( 'Contact Us', 'go-plugin' ),
				),
				array(),
			),
		),
	),
	array(
		'coblocks/services',
		array(
			'columns'      => 3,
			'gutter'       => 'huge',
			'alignment'    => 'center',
			'headingLevel' => 3,
			'buttons'      => false,
			'className'    => 'is-style-circle',
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
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => '<em>' . __( '"I appreciate Everett\'s ability to compose visually stunning photos, brining my memories to live every time I look at them."', 'go-plugin' ) . '</em>',
							'dropCap' => false,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( '- Larina H.', 'go-plugin' ),
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
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => '<em>' . __( '"Everett should be nominated for photographer of the year. I am so pleased with her photography at my wedding."', 'go-plugin' ) . '</em>',
							'dropCap' => false,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( '- Kam V.', 'go-plugin' ),
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
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => '<em>' . __( '"Everett knew exactly how to pull the best of me out, and into a beautiful portrait. I\'m so glad I met Everett!"', 'go-plugin' ) . '</em>',
							'dropCap' => false,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( '- Jerri S.', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
		),
	),
);
