<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>
<section class="about-hero">
  <div>
    <h1>
      <?php the_field('about_hero_title'); ?>
    </h1>
    <?php the_field('about_hero_description'); ?>
    <div class="about-hero-icons"><a id="link-anchor" class="button big-button">Submit your case study</a></div>
  </div>
</section>
<div class="aboutus">
  <section class="about-content">
    <div class="right-column2">
    </div>
    <div class="left-column">
      <h2><?php the_field('about_content_title'); ?></h2>
      <p><?php the_field('about_content_description'); ?></p>
    </div>
  </section>

</div>
<?php include 'inc-experts.php'; ?>
<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
<script>
  function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link-anchor").click(function() {
   scrollToAnchor('link-anchor');
});
</script>
