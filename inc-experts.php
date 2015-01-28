<?php
query_posts('page_id=2');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="experts">
  <h2><?php the_field('home_experts_title'); ?></h2>
  <a class="button">See Experts</a>
  <ul>
    <?php if( have_rows('experts_experts') ) : while ( have_rows('experts_experts') ) : the_row(); ?>
      <li style="background: url(<?php the_sub_field('expert_pic');?>); background-position-x: center;">
        <h3><?php the_sub_field('expert_name');?></h3>
        <?php the_sub_field('expert_bio');?>
      </li>
    <?php endwhile; else : endif; ?>
  </ul>
</section>
<?php endwhile; ?><?php endif; WP_reset_query(); ?>
