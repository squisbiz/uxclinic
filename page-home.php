<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero" style="background: url(<?php the_field('home_hero_image_bg'); ?>) no-repeat center top, url(http://nearsoft.com/stg.uxclinic/wp/wp-content/themes/uxclinic/img/hero-pattern.gif) repeat-x center bottom;">
    <h1><?php the_field('home_hero_title'); ?></h1>
    <?php the_field('home_hero_text'); ?>
    <p><a href="<?php the_field('home_hero_button_url'); ?>" class="button big-button"><?php the_field('home_hero_button_text'); ?></a></p>
  </section>

  <section class="howitworks">
    <h2><?php the_field('home_how_title'); ?></h2>
    <ol>
      <?php if( have_rows('home_how_steps') ) : while ( have_rows('home_how_steps') ) : the_row(); ?>
      <li>
        <img src="<?php the_sub_field('how_image');?>">
        <h3><?php the_sub_field('how_title');?></h3>
        <?php the_sub_field('how_description');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ol>
  </section>

  <section class="experts">
    <h2><?php the_field('home_experts_title'); ?></h2>
    <ul>
      <?php if( have_rows('experts_experts') ) : while ( have_rows('experts_experts') ) : the_row(); ?>
      <li style="background: url(<?php the_sub_field('expert_pic');?>);">
        <h3><?php the_sub_field('expert_name');?></h3>
        <?php the_sub_field('expert_bio');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ul>
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
      <li>
        <img src="<?php the_sub_field('episode_image'); ?>" alt="<?php the_sub_field('episode_title');?>">
        <span class="vid-flag"></span>
        <a href="<?php the_sub_field('episode_url'); ?>">
          <h3><?php the_sub_field('episode_title');?><span><?php the_sub_field('episode_client');?></span></h3>
        </a>
        <?php the_sub_field('episode_description');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ul>
  </section>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
