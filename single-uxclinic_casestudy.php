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
    
    <?php if( get_field('episode_hero_button_toogle') )
        {
            echo "<a href='" . get_field('episode_hero_report_button_url') . "' class='button report-button'>" . get_field('episode_hero_button_label') . "</a>";
        }
        else
        {
            echo " ";
        }
    ?>
    </p>

    <div class="sub-episode-hero">
    <p> <?php the_field('episode_hero_client_description'); ?></p>
    <?php $image = get_field('episode_hero_client_image'); if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="client-img"/>
    <?php endif; ?>
    </div>
  </section>
  
    <?php if( get_field('episode_resource_toogle') )
        {
            echo "<section class='episode-resources'>";
        }
        else
        {
            echo "<section class='episode-resources-hidden'>";
        }
    ?>
          
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
