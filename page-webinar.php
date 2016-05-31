<?php
/*
Template Name: WEBINAR
*/
?>

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

	<meta property="og:url"                content="http://ux.nearsoft.com/workshop/" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Mapea tus servicios, haz felices a tus clientes" />
	<meta property="og:description"        content="Descubre oportunidades para empatar tu modelo de negocios con la experiencia de tus usuarios." />
	<meta property="og:image"              content="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/img/uxteam-share.png" />


	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo "$site_description";
		?>
	</title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.min.css">

	<!-- Colorbox, to display a zoomed view of the images -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/colorbox.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/uxclinic.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.colorbox-min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bxslider/jquery.bxslider.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/jquery.bxslider.css" />

	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.event.move.js"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.twentytwenty.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/twentytwenty.css" />

  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal.css">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal-default-theme.css">


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
		
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal.css">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal-default-theme.css">

</head>

<body <?php body_class(); ?> id="body">


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

<!-- header ends here -->



<section class="e-hero uxworkshop">
  <div class="uxworkshop-label">UX WORKSHOP</div>
  <h1>Impact Your Business Growth Integrating Analytics and UX<span>We'll share our expertise and insights gained from our findings with clients that have helped build more effective products through UX research.</span></h1>
  <a href="#int-des" class="boleto-submit">Save your spot!</a>
<!--
  <div class="soldout">
<img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/04/sold-out-1.png">
  </div>
-->
  <div class="date"><span>Date:</span>Wednesday,  June 29 - 11:00 AM to 12:00 PM<span>Online Webinar<!-- :</span> Nomad-A-What - 639 Clay St, San Francisco , California --></div>
</section>


<section class="e-can uxcontent">
  <h2>Are You Building a Software Product?</h2>
  
  <p>In this webinar you will learn how to integrate information from google analytics with UX practices. This way you can learn more from your users and how they interact with your product. This will help you make data driven-decisions when developing your product</p>


<!--
<ul>
	<li>You'll create a positive user experience, that will help you maintain an active growth and loyalty of your clients.</li>
	<li>You'll analyse your company and learn to detect the key points of your processes and how these affect your clients experience.</li>
	<li>You'll have the right tools to design new processes focused on reaching your business goals and improve your user experience.</li>
</ul>
-->
</section>
<!--
<section class="e-can uxcontent">
  <h2>Program Objectives</h2>
<ul>
<li>Making the interaction points of your clients with your product visible.</li>
<li>Detect improvement opportunities on your process.</li>
<li>Make brainstorming in teams and iterate before implementing changes.</li>
<li>Interpret results of your research with design arguments.</li>
<li>Align business objectives with your users experience.</li>
</ul>
</section>
-->

<section class=" e-can experts">
  <h2>Instructors</h2>
<div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-business-developer-sandra.png" />
    </div>
      <div class="content-container">
        <h3>Miguel Medina</h3>
        <h4>UX/UI Designer</h4>
        <p>Miguel has over five years of experience in the Web Industry. His goal is to create beautiful and functional interfaces that account for users' needs.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/sandradanielav" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="https://twitter.com/sandra_daniela" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>

 <div class="ux-expert-card">
  <div class="ux-expert-card-picture">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-researcher-denisse.jpg" />
  </div>
    <div class="content-container">
      <h3>Denisse Gutiérrez</h3>
      <h4>UX Researcher</h4>
      <p>Denisse is a User Experience Researcher with over ten years of experience in the Software and Advertising Industries. <br>She makes products and services more lovable through Human-Centered Design.</p>
      <div class="social-box">
        <a href="https://www.linkedin.com/in/neniza" target="_blank"><div class="social-link linkedin"></div></a>
        <a href="http://twitter.com/neniza_" target="_blank"><div class="social-link twitter"></div></a>
      </div>
    </div>
  </div>

</section>

<div class="footer-padding-div"></div>

<div class="remodal" data-remodal-id="int-des" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <h2>Join our UX Team next Jun 29th, to learn how to integrate analytics with UX.</h2>
  
  <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send-webinar.php" method="post">

      <p class="error"></p>
      <div><input type="text" id="site" class="contactform-name" name="site" placeholder="Name"></div>
      <div><input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input></div>
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <div class="center"><input type="button" value="Register" onclick="requestSubmit()" class="contactform-submit"></div>
    </form>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });
  
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>



<?php get_footer(); ?>