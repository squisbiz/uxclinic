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
      <?php if( have_rows('about_content_experts') ) : while ( have_rows('about_content_experts') ) : the_row(); ?>
        <li>
          <?php $image = get_sub_field('about_content_expert_image'); if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
          <div>
            <h3><?php the_sub_field('about_content_expert_name'); ?></h3>
            <p><?php the_sub_field('about_content_expert_description'); ?></p>
          </div>
        </li>
       <?php endwhile; else : endif; ?>
      </ol>
    </div>
  </section>

</div>
<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
