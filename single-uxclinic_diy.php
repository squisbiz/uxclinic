<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<style>
  <?php the_field('diy_css'); ?>
</style>

<?php the_field('diy_html'); ?>

<?php endwhile; ?><?php endif; ?>
</body>
</html>
