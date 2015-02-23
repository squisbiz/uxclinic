<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="episode-hero">
    <div class="cont-h1">
      <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="video-wrapper">
      <?php the_field('episode_hero_video'); ?>
    </div>
    <p><?php the_field('episode_hero_description'); ?>
    <a href="<?php the_field('episode_hero_report_button_url'); ?>" class="button report-button">See the report</a>
    <a href="https://plus.google.com/events/csro8sl4lhcu7prc1kho44dbbvk" target="_blank" class="button calendar-button">Add to calendar</a>
    </p>

    <div class="sub-episode-hero">
    <p> <?php the_field('episode_hero_client_description'); ?></p>
    <?php $image = get_field('episode_hero_client_image'); if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="client-img"/>
    <?php endif; ?>
    </div>
  </section>

  <section class="episode-resources">
    <h2><?php the_field('episode_resource_title'); ?></h2>
    <ol>
      <?php if( have_rows('episode_resource_item') ) : while ( have_rows('episode_resource_item') ) : the_row(); ?>
      <li>
        <a href="<?php the_sub_field('episode_resource_link');?>" target="_blank" >
          
          <?php $image = get_sub_field('episode_resource_image'); if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
          
        </a>
      </li>
      <?php endwhile; else : endif; ?>
    </ol>
  </section>

  <?php include 'inc-signup.php'; ?>

  <?php include 'inc-episodes.php'; ?>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
