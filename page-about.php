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
    <div class="about-hero-icons"><img src="wp-content/themes/uxclinic/img/ux-design-team-about-us.png" alt="UX Design team about us image"></div>
  </div>
</section>
<div class="aboutus">
  <section class="about-content">
    <div class="right-column2">
      <h2>Learn the UX way</h2>
      <p>Creating products people love is no easy feat. It’s not just about beautiful UI or fully functional features. UX Design thrives from a profound understanding of users and keeping their needs in mind during the product design process. A great way to start is diving head first into different design methods. And yes, we’ve created infographics for a better experience.</p>
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
