<?php

add_filter( 'acf/settings/show_admin', '__return_false' );

if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_5809fa0e909d0',
		'title'                 => 'Content Builder',
		'fields'                => array(
			array(
				'key'               => 'field_5809fa253aa4a',
				'label'             => 'Content',
				'name'              => 'content',
				'type'              => 'flexible_content',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'button_label'      => 'Add Content',
				'min'               => '',
				'max'               => '',
				'layouts'           => array(
					array(
						'key'        => '5809fb6d6499a',
						'name'       => 'strong_text',
						'label'      => 'Subtitle',
						'display'    => 'table',
						'sub_fields' => array(
							array(
								'key'               => 'field_5809fb936499b',
								'label'             => 'Text',
								'name'              => 'strong',
								'type'              => 'textarea',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
								'maxlength'         => '',
								'rows'              => 4,
								'new_lines'         => '',
							),
						),
						'min'        => '',
						'max'        => '',
					),
					array(
						'key'        => '5809fa2fc6117',
						'name'       => 'paragraph',
						'label'      => 'Paragraph',
						'display'    => 'table',
						'sub_fields' => array(
							array(
								'key'               => 'field_5809fa353aa4b',
								'label'             => 'Text',
								'name'              => 'p',
								'type'              => 'textarea',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
								'maxlength'         => '',
								'rows'              => '',
								'new_lines'         => 'br',
							),
						),
						'min'        => '',
						'max'        => '',
					),
					array(
						'key'        => '5809fab93aa4d',
						'name'       => 'image',
						'label'      => 'Image',
						'display'    => 'table',
						'sub_fields' => array(
							array(
								'key'               => 'field_5809fac83aa4e',
								'label'             => 'Image',
								'name'              => 'img',
								'type'              => 'image',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'return_format'     => 'url',
								'preview_size'      => 'thumbnail',
								'library'           => 'all',
								'min_width'         => '',
								'min_height'        => '',
								'min_size'          => '',
								'max_width'         => '',
								'max_height'        => '',
								'max_size'          => '',
								'mime_types'        => '',
							),
						),
						'min'        => '',
						'max'        => '',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'seamless',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => array(
			0 => 'the_content',
		),
		'active'                => 1,
		'description'           => '',
	) );

endif;