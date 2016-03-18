<?php
		if(isset($_COOKIE['pathcookie'])){
			$pathcookie = $_COOKIE['pathcookie'] . $_SERVER['REQUEST_URI'] . "\n";
		}
		else{
			$pathcookie = $_SERVER['REQUEST_URI'] . "\n";
		}
		setcookie("pathcookie", $pathcookie, time()+600, "/", "ux.nearsoft.com");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <meta name="description" content="Nearsoft’s UX team helps software companies accelerate their business by powering up their user experience" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

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

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

	<!-- Colorbox, to display a zoomed view of the images -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/colorbox.css">



<!-- 	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.js"></script> -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/uxclinic.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.colorbox-min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bxslider/jquery.bxslider.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/jquery.bxslider.css" />

	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.event.move.js"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.twentytwenty.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/twentytwenty.css" />




	<?php wp_head() ?>

	<!-- Facebook Conversion Code for Conversion UX04 -->
    <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6015985729811', {'value':'0.00','currency':'USD'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6015985729811&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

    <script>
			$(document).ready(function(){
				$(".gallery").colorbox({rel:'Gallery'});
			});
		</script>

</head>

<body <?php body_class(); ?> id="body">

<div class="social-share">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=317016168398979";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-share-button facebook-share-button" data-href="https://ux.nearsoft.com" data-layout="icon"></div>
  <a class="buttons twitter-share-button" href="https://twitter.com/intent/tweet?text=We%20help%20software%20companies%20accelerate%20their%20business%20by%20powering%20up%20their%20user%20experience http://ux.nearsoft.com" target="_blank"></a>
</div>


<div class="wrapper">
	<header>
  <a href="<?php echo home_url(); ?>">
    <p class="logo"></p>
  </a>

  <div class="mobilenav-toggle"></div>

  <div class="mobilenav">
    <ul>
  		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
  		</ul>
  </div>

  <nav>
    <ul>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
    </ul>
  </nav>
	</header>
