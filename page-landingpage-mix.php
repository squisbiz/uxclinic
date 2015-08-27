<?php
/*
Template Name: TEMPLATE LANDING PAGE MIXED
*/
?>
<?php get_header(); ?>

<div class="modal" id="modal-contact" aria-hidden="true">
  <div class="modal-dialog">
    <h2>Send us your case study</h2>
    <a href="#close" class="btn-close" aria-hidden="true">×</a>
    <div class="apply-hero">
      <?php echo do_shortcode( '[contact-form-7 id="878" title="landingpage"]' ); ?>
    </div>
  </div>
</div>

<section class="section lp-hero">
  <h1>Boost Your Conversion Rate, with UX Research</h1>
  <p>Translate user feedback to functional features. We can help you build products people actually want.</p>
  <a class="button" href="#modal-contact">Contact Request</a>
  <a class="next" href="#intro"></a>
</section>

<div id="intro"></div>

<section class="section lp-why">
  <h2>Here Is How We Do It</h2>
  
  <?php query_posts('page_id=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
    <ol>
      <?php if( have_rows('home_how_steps') ) : while ( have_rows('home_how_steps') ) : the_row(); ?>
      <li>
        <img src="<?php the_sub_field('how_image');?>" alt="<?php the_sub_field('how_image_alt');?>" />
        <h3><?php the_sub_field('how_title');?></h3>
        <?php the_sub_field('how_description');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ol>
    
  <?php endwhile; ?><?php endif; WP_reset_query(); ?>
  
  <a class="next" href="#our-participants"></a>
</section>

<div id="our-participants"></div>

<section class="section lp-quotes">
  <h2>Our happy clients</h2>
  
  <div class="participants">
    
    <div class="third">
      <p>The UX Clinic consulting and free case study report was worth at least $15,000 USD for my company. Our company was so fortunate to receive 100+ of hours of work and a detailed report on our current UI/UX.</p>
      <span class="client"><b>Dustin Yoder, CEO at Sureify</b></span>
      <div class="photo quote01"></div>
    </div>
    
    <div class="third">
      <p>The UX Clinic was like having a big UX/UI team working for us, this was highly valuable for our company. It gave us great insights in a short amount of time.</p>
      <span class="client"><b>Alex G. Del Bosque, CEO at Staytuned App</b></span>
      <div class="photo quote03"></div>
    </div>
    
  </div>
  
  <a class="next" href="#prev-case-studies"></a>
  
</section>

<div id="prev-case-studies"></div>

<section class="section lp-previous">
  <h3>Case Studies</h3>
  
  <div class="overflow">
    <div class="previous-card">
    <h2>Backcasting: The UX time travel machine</h2>
    <img src="http://theuxclinic.com/wp/wp-content/uploads/2015/06/ux-casestudy-skedio.jpg" />
    <p>Through our interviews with potential users, we gathered their first impressions using Skedio. We found out that although the app has a great precision and performance, users felt overwhelmed with the amount of buttons. They thought the app was outdated and they were intimidated by the complex examples</p>
    
    <a class="button" href="http://theuxclinic.com/casestudies/episode-15-skedio-app/">Full Case Study</a>
  </div>
    <div class="previous-card">
    <h2>Experience Prototyping: Creating human centered processes for 1-on-1s</h2>
    <img src="http://theuxclinic.com/wp/wp-content/uploads/2015/02/ux-case-study-7geese.jpg" />
    <p>We decided to investigate if the 1-on-1 process in 7Geese reflects the needs of managers and the expectations from employees.We took a divergent approach by asking participants to embody their mental models regarding 1-on-1 meetings as a way for team members to express issues, ideas, and frustrations that might not fit into other organizational mechanisms through the construction of their ideal 1-on-1 process. </p>
    
    <a class="button" href="http://theuxclinic.com/casestudies/9-experience-prototyping-7geese/">Full Case Study</a>
      
  </div>
  </div>
  <a class="next" href="#sendyourcase"></a>
</section>

<div id="sendyourcase"></div>

<section class="section lp-submit">
  <h2>I want to be part of the UXClinic’s third season!</h2>
  <p>Submit your software product to our free initiative. We will contact you to see how we can bring a positive impact to your company’s objectives. Hopefully you’ll be featured in an upcoming episode</p>
  <a class="button" href="#modal-contact">Submit application</a>
</section>

<!--
<script>
  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
-->




<?php get_footer(); ?>