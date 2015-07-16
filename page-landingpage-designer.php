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
      <a href="http://theuxclinic.com/casestudies/episode-15-skedio-app/">
      <div class="thumb skedio-bg"></div>
      <div class="excerpt">
        <h1><b>Backcasting</b> The UX time travel machine.</h1>
      </div>
      </a>
    </div>
    
    <div class="loop-single">
      <a href="http://theuxclinic.com/casestudies/3-rapid-paper-prototyping-spork/">
      <div class="thumb spork-bg"></div>
      <div class="excerpt">
        <h1><b>Rapid Paper Prototyping</b> Make sure Your Users Achieve Tasks Effortlessly.</h1>
      </div>
      </a>
    </div>
    
  </div>
  
  <a class="next" href="#prev-case-studies"></a>
  
</section>

<div id="prev-case-studies"></div>

<section class="section lp-previous">
  <h3>Do It Yourself</h3>
  
  <div class="overflow">
    <div class="previous-card">
    <h2 class="nomargin">Persona Profile Method</h2>
    <img src="http://theuxclinic.com/wp/wp-content/themes/uxclinic/img/imgpersonas.png" />
    <p>A UX deliverable based on the interpretation of qualitative data and used to drive design and align team efforts by setting a common understanding of the target user of a product or system.</p>
    
    <a class="button" href="http://theuxclinic.com/diy/persona-profile/">See DIY</a>
  </div>
    <div class="previous-card">
    <h2>Kano Analysis Method</h2>
    <img src="http://theuxclinic.com/wp/wp-content/themes/uxclinic/img/imgkano.png" />
    <p>Kano Analysis answer strategic questions regarding the features that have highest satisfaction potential among users.</p>
    
    <a class="button" href="http://theuxclinic.com/diy/kano-analysis-method/">See DIY</a>
      
  </div>
  </div>
  <a class="next" href="#sendyourcase"></a>
</section>

<div id="sendyourcase"></div>

<section class="section lp-submit">
  <h2>I want to know more about The UX Clinic</h2>
  <p>Subscribe to our newsletter. Interesting articles and How-to UX essentials are heading your way.</p>
  <a class="button" href="#modal-contact">Subscribe</a>
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