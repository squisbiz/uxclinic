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
    <div class="left-column">
      <h2><?php the_field('about_content_title'); ?></h2>
      <p><?php the_field('about_content_description'); ?></p>
    </div>
    <div class="right-column">
      <ol>
      <?php if( have_rows('home_how_steps') ) : while ( have_rows('home_how_steps') ) : the_row(); ?>
        <li>
          <?php the_field('about_content_expert_image'); ?>
          <h3><?php the_field('about_content_expert_name'); ?></h3>
          <p><?php the_field('about_content_expert_description'); ?></p>
        </li>
       <?php endwhile; else : endif; ?>
      </ol>
    </div>
  </section>

</div>
<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
