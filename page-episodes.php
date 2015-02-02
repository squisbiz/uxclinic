<?php
/*
Template Name: EPISODES INDEX
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
  query_posts('cat=3');
  while (have_posts()) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php endwhile; ?>

  <?php include 'inc-submit.php'; ?>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
