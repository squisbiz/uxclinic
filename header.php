<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
		?>
	</title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css">
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

	<header>
  <p class="logo"><a href="<?php bloginfo( 'url' ); ?>" title="Homepage"><!-- <?php bloginfo( 'name' ); ?> --></a></p>
  <nav>
  		<ul>
  		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
  		</ul>
  </nav>
	</header>
