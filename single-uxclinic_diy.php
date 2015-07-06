<!DOCTYPE html>
<html lang="en">
<head>
<title>Infographic - Persona Profile</title>
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/css/templatestyle.css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_field('infographic_download_url'); ?>" class="downlaod-infographic" target="_blank"><img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/download-icon-infographics.png"></a>
	<header>
		<a href="http://theuxclinic.com/" target="_blank">
			<img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/uxclinic-logo-small.png" alt="UXClinic">
		</a>
		<div class="method-cont">
			<h1>Persona <span>Profile</span></h1>
			<p><?php the_field('diy_hero_description'); ?></p>
		</div>
	</header>
	<section class="section-bg">
		<div class="why-cont">
			<h1>Why?</h1>
			<p><?php the_field('why_description'); ?></p>
		</div>
	</section>
	
	<section class="orange">
		<div class="how-cont">
			<h1>How?</h1>
			<div class="steps">
				<ul>
  				<?php if( have_rows('diy_steps') ) : while ( have_rows('diy_steps') ) : the_row(); ?>
					<li>
					
  					<div class="how-cont-icon">
    					<?php $image = get_sub_field('casestudy_hero_image'); if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
    					<?php endif; ?>
  					</div>
  					
  					<div class="how-cont-description">
    					<ul>
    					<?php if( have_rows('diy_steps_list') ) : while ( have_rows('diy_steps_list') ) : the_row(); ?>
    					  <li><?php the_sub_field('diy_steps_list_item');?></li>
              <?php endwhile; else : endif; ?>
    					</ul>
    					
  					</div>
					</li>

					<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="section-bg-takeaways">
		<div class="takeaways-cont">
			<h1>Takeaways</h1>
			<div class="takeaways-box">
				<ul>
					<li>Personas are typically presented as a one-page document with shorter modules and a descriptive photograph (avoid stock photos, though)</li>
					<li>Personas help to humanize team efforts and drive design communications when presenting to clients</li>
					<li>They are ideal to define and test ideas in scenarios of use to aid in the decision making process</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="gray">
		<div class="references-cont">
			<h1>References</h1>
			<p>Churruca, Silvana. DIY User Personas
			<a href="http://www.ux-lady.com/diy-user-personas/" target="_blank">UX Lady.com, 28 June, 2013. Web link: http://www.ux-lady.com/diy-user-personas/</a>
			</p>
			<p>Carter, Stephanie and Jill Christ. Avoiding Bullshit Personas
			<a href="https://speakerdeck.com/boltpeters/avoiding-bullshit-personas" target="_blank">Bolt Peters. 12 March, 2012. Web link: https://speakerdeck.com/boltpeters/avoiding-bullshit-personas</a>
			</p>
			<p>Universal Methods of Design. Method #72, Scenario Description Swimlanes
			<a>Bella,  Martin and Bruce Hanington. Rockport Publishers, Feb 1, 2012</a>
			</p>
		</div>
	</section>
	<footer class="orange">
		<h1>
			<a href="http://theuxclinic.com/" target="_blank"><img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/uxclinic-logo-small.png"></a>
			<a href="http://nearsoft.com/" target="_blank" class="nearsof-logo"><img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/nearsoft-logo.png" alt="Nearsoft"></a>
		</h1>
	</footer>

<?php endwhile; ?><?php endif; ?>
</body>
</html>
