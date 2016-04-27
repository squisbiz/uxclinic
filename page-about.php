<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>
<section class="about-hero">
  <div>
    <h2>
      About Us
    </h1>
    <h1>We help software companies accelerate their business by powering up their user experience.</h1>
<!--     <div class="about-hero-icons"><a id="link-anchor" class="button big-button">Contact Request</a></div> -->
  </div>
</section>

<div class="aboutus">
  <section class="about-content">
    <div class="right-column2">
    </div>
    <div class="left-column">
      <h2><?php the_field('about_content_title'); ?></h2>
      <p><?php the_field('about_content_description'); ?></p>
      <!-- <a id="link-anchor2" class="scnd-case-link">Submit your case study</a> -->
    </div>
  </section>
</div>

<div class="not-p">
	<?php include 'inc-experts.php'; ?>
</div>

<div class="submit-about">
  <?php include 'inc-submit.php'; ?>
</div>

<?php get_footer(); ?>
<script>
  function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link-anchor").click(function() {
   scrollToAnchor('link-anchor');
});
$("#link-anchor2").click(function() {
   scrollToAnchor('link-anchor');
});
</script>
