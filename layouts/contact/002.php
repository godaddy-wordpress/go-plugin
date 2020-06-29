<?php
/**
 * Contact #002 Template.
 *
 * @package Go_Plugin
 */

return array(
	array(
		'core/columns',
		array(),
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
							'level'   => 5,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( 'Studio Gym<br>123 Example Rd, Scottsdale, AZ 85260<br>(555) 555-5555', 'go-plugin' ),
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
							'content' => __( 'Hours', 'go-plugin' ),
							'level'   => 5,
						),
						array(),
					),
					array(
						'core/paragraph',
						array(
							'align'   => 'center',
							'content' => __( 'Mon-Fri => 8:00 - 21:00<br>Sat => 8:00 - 20:00<br>Sun => 10:00 - 14:00', 'go-plugin' ),
							'dropCap' => false,
						),
						array(),
					),
				),
			),
		),
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
		'core/gallery',
		array(
			'images'    => array(
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'fullUrl' => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-3',
					'caption' => '',
				),
				array(
					'url'     => GO_PLUGIN_URL . '/images/1x1.jpg',
					'fullUrl' => GO_PLUGIN_URL . '/images/1x1.jpg',
					'alt'     => __( 'Image description', 'go-plugin' ),
					'id'      => 'image-1',
					'caption' => '',
				),
			),
			'ids'       => array(),
			'caption'   => '',
			'imageCrop' => true,
			'linkTo'    => 'none',
			'sizeslug'  => 'large',
			'align'     => 'full',
		),
		array(),
	),
);
