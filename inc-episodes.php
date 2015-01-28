<?php
query_posts('page_id=2');
if (have_posts()) : while (have_posts()) : the_post();
?>
<section class="episodes">
  <h2><?php the_field('home_episodes_title'); ?></h2>
  <a class="button">See all episodes</a>
  <ul>
    <?php if( have_rows('episodes_episodes') ) : while ( have_rows('episodes_episodes') ) : the_row(); ?>
      <li>
        <a href="<?php the_sub_field('episode_url'); ?>">
          <span class="vid-flag"></span>
          <img src="<?php the_sub_field('episode_image'); ?>" alt="<?php the_sub_field('episode_client');?>">
          <h3><?php the_sub_field('episode_title');?><span><?php the_sub_field('episode_client');?></span></h3>
          <?php the_sub_field('episode_description');?>
        </a>
      </li>
    <?php endwhile; else : endif; ?>
    </ul>
  </section>
<?php endwhile; ?><?php endif; WP_reset_query(); ?>
