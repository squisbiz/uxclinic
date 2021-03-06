<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="faq">
    <div class="cont-h1">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
  </section>

  <section class="faq-content">
    <?php the_content(); ?>
  </section>

  <?php include 'inc-signup.php'; ?>

  <?php include 'inc-episodes.php'; ?>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
