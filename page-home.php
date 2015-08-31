<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero" style="background: url(<?php the_field('home_hero_image_bg'); ?>) no-repeat center top, url(http://nearsoft.com/stg.uxclinic/wp/wp-content/themes/uxclinic/img/ux-lab-background.gif) repeat-x center bottom;">
    <h1><?php the_field('home_hero_title'); ?></h1>

<?php the_field('home_hero_text'); ?>
  <p><a id="link-anchor" href="<?php the_field('home_hero_button_url'); ?>" class="button big-button"><?php the_field('home_hero_button_text'); ?></a></p>

  </section>

  <section class="howitworks">
    <h2><?php the_field('home_how_title'); ?></h2>
    <ol>
      <?php if( have_rows('home_how_steps') ) : while ( have_rows('home_how_steps') ) : the_row(); ?>
      <li>
        <img src="<?php the_sub_field('how_image');?>" alt="<?php the_sub_field('how_image_alt');?>" />
        <h3><?php the_sub_field('how_title');?></h3>
        <?php the_sub_field('how_description');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ol>
  </section>

  <section class="experts">
    <h2><?php the_field('home_experts_title'); ?></h2>
    <h3>Our team is an expert in researching how user feedback can make a product functional and delightful.</h3>
    <a class="button">See Experts</a>
    <ul>
      <?php if( have_rows('experts_experts') ) : while ( have_rows('experts_experts') ) : the_row(); ?>
      <li style="background: url(<?php the_sub_field('expert_pic');?>); background-position-x: center;">
        <h3><?php the_sub_field('expert_name');?></h3>
        <?php the_sub_field('expert_bio');?>
      </li>
      <?php endwhile; else : endif; ?>
    </ul>
    <a name="link-anchor"></a>
  </section>

  <section class="submit">
    <h2><?php the_field('home_submit_title'); ?></h2>
    <?php the_field('home_submit_text'); ?>
<div class="contact-overlay">
  <div class="form">
    <form id="contactrequest" action="http://theuxclinic.com/wp/wp-content/themes/uxclinic/send.php" method="post">
      <p class="error"></p>
      <p><input type="text" id="name" class="contactform-name" name="name" placeholder="Name:"></p>
      <p><input type="text" id="email" class="contactform-email" name="email" placeholder="E-mail:"></p>
      <textarea type="text" id="site" class="contactform-description" name="site" placeholder="Website URL:"></textarea>
      <p class="center"><input type="button" value="Send" onclick="requestSubmit()" class="contactform-submit"></p>
    </form>
  </div>
</div>
  </section>


  <section class="episodes">
    <h2><?php the_field('home_episodes_title'); ?></h2>
    <a class="button" href="http://theuxclinic.com/casestudies">See all Case studies</a>
    <ul>
      <?php query_posts( array( 'post_type' => 'uxclinic_casestudy', 'posts_per_page' => 3) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <span class="vid-flag"></span>

          <div class="image-container" style="background: url(<?php the_field('episode_featured_image'); ?>); background-size: cover;">

          </div>

          <h3><?php the_field('episode_featured_episode_number');?><span><?php the_field('episode_featured_episode_client');?></span></h3>
          <p><?php the_field('episode_featured_episode_description');?></p>
        </a>
      </li>
      <?php endwhile; endif; wp_reset_query(); ?>
    </ul>
  </section>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>

<script>
  function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link-anchor").click(function() {
   scrollToAnchor('link-anchor');
});
</script>
