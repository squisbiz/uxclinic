<?php
/*
Template Name: EPISODE
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="episode-hero">
    <h1><?php echo get_the_title(); ?></h1>
    <?php the_field('episode_hero_video'); ?>
    <p><?php the_field('episode_hero_description'); ?>
    <a href="<?php the_field('episode_hero_report_button_url'); ?>" class="button report-button">See the report</a>
    </p>
    
    <div class="sub-episode-hero">
    <img src=" <?php the_field('episode_hero_client_image'); ?>" class="client-img">
    <p> <?php the_field('episode_hero_client_description'); ?></p>
    </div>
  </section>

  <section class="episode-resources">
    <h2>You can download our resources <span>(infographics, slideshows).</span></h2>
    <ol>
      <?php if( have_rows('episode_resource_item') ) : while ( have_rows('episode_resource_item') ) : the_row(); ?>
      <li>
        <a href="<?php the_sub_field('episode_resource_link');?>" >
        <img src="<?php the_sub_field('episode_resource_image');?>">
        </a>
      </li>
      <?php endwhile; else : endif; ?>
    </ol>
  </section>

  <section class="submit">
    <h2><?php the_field('home_submit_title'); ?></h2>
    <?php the_field('home_submit_text'); ?>
    <?php the_field('home_submit_form_shortcode'); ?>
  </section>

  <section class="episodes">
    <h2><?php the_field('home_episodes_title'); ?></h2>
    <a class="button">See all episodes</a>
    <ul>
      <?php if( have_rows('episodes_episodes') ) : while ( have_rows('episodes_episodes') ) : the_row(); ?>
      <li style="background: url(<?php the_sub_field('episode_image'); ?>) no-repeat; background-size: cover;">
        <h3><?php the_sub_field('episode_title');?></h3>
        <?php the_sub_field('episode_description');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ul>
  </section>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
