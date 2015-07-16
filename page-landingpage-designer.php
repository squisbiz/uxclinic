<?php
/*
Template Name: TEMPLATE LANDING PAGE DESIGNERS
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
  <h1>We are all about UX</h1>
  <p>Becoming a UX designer is hard. There’s no magic way  to achieve truly insightful Team up with the UX Clinic to learn the best UX practices. We specialize in UX research for software products and want to share our experience.</p>
  <a class="button" href="#modal-contact">Join the conversation</a>
  <a class="next" href="#intro"></a>
</section>

<div id="intro"></div>

<section class="section lp-why">
  <h2>The UX Clinic promotes the best UX practices within the software development community.</h2>
  <p>We apply design methods that will provide objective feedback to enhance software products. We have learned a lot during this process. It’s time to share it with the community!</p>
  <a class="button" href="http://theuxclinic.com">Learn More</a>
  
  <a class="next" href="#our-participants"></a>
</section>

<div id="our-participants"></div>

<section class="section lp-quotes">
  <h2>Case Studies</h2>
  
  <div class="participants">
    
    <div class="loop-single spork-bg">
      <div class="thumb skedio-bg"></div>
      <div class="excerpt">
        <h1><b>Backcasting</b> The UX time travel machine.</h1>
      </div>
    </div>
    
    <div class="loop-single">
      <div class="thumb spork-bg"></div>
      <div class="excerpt">
        <h1><b>Rapid Paper Prototyping</b> Make sure Your Users Achieve Tasks Effortlessly.</h1>
      </div>
    </div>
    
  </div>
  
  <a class="next" href="#prev-case-studies"></a>
  
</section>

<div id="prev-case-studies"></div>

<section class="section lp-previous">
  <h3>Previous Case studies</h3>
  
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