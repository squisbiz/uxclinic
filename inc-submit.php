<?php
query_posts('page_id=2');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="submit">
  <h2><?php the_field('home_submit_title'); ?></h2>
  <?php the_field('home_submit_text'); ?>
  <?php echo do_shortcode(get_post_meta(get_the_ID(), 'home_submit_form_shortcode', true)); ?>
</section>
<?php endwhile; ?><?php endif; WP_reset_query(); ?>
