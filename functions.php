<?php

register_nav_menus( array(
	'header-menu' => 'Header Menu',
) );

add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
if ( is_home() && false == $query->query_vars['suppress_filters'] )
$query->set( 'post_type', array( 'post', 'page') );
return $query;
}


add_theme_support( 'post-thumbnails' );

// Add Custom Post "Episodes"

add_action( 'init', 'create_posttype_casestudy' );
function create_posttype_casestudy() {
	register_post_type( 'uxclinic_casestudy',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'casestudies'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

// Add Custom Post "Reports" - Removed because it's no use for now, just uncomment the script to return them to the site.

add_action( 'init', 'create_posttype_diy' );
function create_posttype_diy() {
	register_post_type( 'uxclinic_diy',
		array(
			'labels' => array(
				'name' => __( 'DIYs' ),
				'singular_name' => __( 'DIY' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'diy'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_new-case-study-hero',
		'title' => 'New Case Study - Hero',
		'fields' => array (
			array (
				'key' => 'field_569c6915c28b6',
				'label' => 'new format toggle',
				'name' => 'new_format_toggle',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_569c6939c28b7',
				'label' => 'new format challenge',
				'name' => 'new_format_challenge',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_569c695fc28b8',
				'label' => 'new format client',
				'name' => 'new_format_client',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_569c69c5c28b9',
				'label' => 'new format background picture',
				'name' => 'new_format_background_picture',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_569d30dde50b7',
				'label' => 'new format struggle image',
				'name' => 'new_format_struggle_image',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_569d2bbe8be03',
				'label' => 'new format struggle',
				'name' => 'new_format_struggle',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_569d2e6b8be04',
						'label' => 'struggle single',
						'name' => 'struggle_single',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_569d31e03da84',
				'label' => 'new format how background',
				'name' => 'new_format_how_background',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_569d32c212737',
				'label' => 'new format how steps',
				'name' => 'new_format_how_steps',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_569d32e012738',
						'label' => 'new format how step',
						'name' => 'new_format_how_step',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_569d320b3da86',
				'label' => 'new format how gallery link',
				'name' => 'new_format_how_gallery_link',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_569d6227663a0',
				'label' => 'new format findings description',
				'name' => 'new_format_findings_description',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_569d6242663a1',
				'label' => 'new format findings',
				'name' => 'new_format_findings',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_569d6252663a2',
						'label' => 'finding',
						'name' => 'finding',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_569d635947e3a',
				'label' => 'new format findings slider',
				'name' => 'new_format_findings_slider',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_569d636d47e3b',
						'label' => 'finding slider',
						'name' => 'finding_slider',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'full',
						'library' => 'all',
					),
					array (
						'key' => 'field_569d6695dee5e',
						'label' => 'finding description',
						'name' => 'finding_description',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_569d678548c1e',
				'label' => 'new format takeaways',
				'name' => 'new_format_takeaways',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_569c6915c28b6',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_569d679348c1f',
						'label' => 'new takeaway',
						'name' => 'new_takeaway',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'uxclinic_casestudy',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


?>
