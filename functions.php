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

// Add Custom Post "Reports"

add_action( 'init', 'create_posttype_report' );
function create_posttype_report() {
	register_post_type( 'uxclinic_report',
		array(
			'labels' => array(
				'name' => __( 'Reports' ),
				'singular_name' => __( 'Report' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'reports'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

?>
