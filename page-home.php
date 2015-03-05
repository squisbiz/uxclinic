<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero" style="background: url(<?php the_field('home_hero_image_bg'); ?>) no-repeat center top, url(http://nearsoft.com/stg.uxclinic/wp/wp-content/themes/uxclinic/img/ux-lab-background.gif) repeat-x center bottom;">
    <h1><?php the_field('home_hero_title'); ?><!-- <a href="https://plus.google.com/events/csro8sl4lhcu7prc1kho44dbbvk" target="_blank"class="button big-button add-live">Add to calendar</a> --></h1>


<!-- <div class="livevideo">
      <div class="livevideocontainer">
        <iframe width="780" height="421" src="//www.youtube.com/embed/lUkTHZV122E" frameborder="0" allowfullscreen></iframe>
      </div>
    </div> -->

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
    <?php echo do_shortcode(get_post_meta(get_the_ID(), 'home_submit_form_shortcode', true)); ?>
  </section>

  <section class="episodes">
    <h2><?php the_field('home_episodes_title'); ?></h2>
    <a class="button" href="http://theuxclinic.com/episodes">See all episodes</a>
    <ul>
      <?php if( have_rows('episodes_episodes') ) : while ( have_rows('episodes_episodes') ) : the_row(); ?>
      <li>
        <a href="http://theuxclinic.com/<?php the_sub_field('episode_url'); ?>">
          <span class="vid-flag"></span>
          <img src="<?php the_sub_field('episode_image'); ?>" alt="<?php the_sub_field('episode_client');?>">
          <h3><?php the_sub_field('episode_title');?><span><?php the_sub_field('episode_client');?></span></h3>
          <?php the_sub_field('episode_description');?>
        </a>
      </li>
      <?php endwhile; else : endif; ?>
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
