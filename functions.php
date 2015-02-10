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

add_action( 'init', 'create_posttype_episode' );
function create_posttype_episode() {
	register_post_type( 'uxclinic_episode',
		array(
			'labels' => array(
				'name' => __( 'Episodes' ),
				'singular_name' => __( 'Episode' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'episodes'),
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
		)
	);
}

?>
