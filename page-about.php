<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>
<div class="aboutus">
  <section class="about-hero">
    <?php the_field('about_hero_title'); ?>
    <?php the_field('about_hero_description'); ?>
    <div class="about-hero-icons"></div>
  </section>
  
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
          <h3><?php the_sub_field('about_content_expert_name'); ?></h3>
          <p><?php the_sub_field('about_content_expert_description'); ?></p>
        </li>
       <?php endwhile; else : endif; ?>
      </ol>
    </div>
  </section>
  
</div>
<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
