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

?>
