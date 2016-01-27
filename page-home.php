<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/ux-research-designers-home.jpg) no-repeat center bottom; background-size: cover;">
    <h1><?php the_field('home_hero_title'); ?></h1>

<?php the_field('home_hero_text'); ?>
<div class="services-cont">
  <div class="blocks">
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user-research-uxteam.jpg">
     <div class="block-text-cont">
        <h2>User Research</h2>
        <p>1-on-1 feedback sessions give us an idea of what your product is telling your users.</p>
     </div>
  </div>
    <div class="blocks">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/data-interpretation-uxteam.jpg">
     <div class="block-text-cont">
        <h2>Data Analysis</h2>
        <p>We work with you to analyze user feedback and turn it into actionable insights.</p>
     </div>
  </div>
    <div class="blocks">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-solutions-uxteam.jpg">
     <div class="block-text-cont">
        <h2>UX Solutions</h2>
        <p>We create visual solutions ready to be implemented in your next design iteration.</p>
     </div>
  </div>

</div>
  <p><a id="link-anchor" href="#myAnchor" class="sendus-button"><?php the_field('home_hero_button_text'); ?></a></p>
  </section>

  <section class="episodes">
<!--     <h2><?php the_field('home_episodes_title'); ?></h2> -->
    <h2>Our Amazing Clients</h2>
    <div class="our-client-text">We have helped several companies reconnect with their users. <a href="http://theuxclinic.com/casestudies">See All of Our Clients</a></div>
    
    <ul class="bxslider">
      
      <li>
        <ul>
          <?php query_posts( array( 'post_type' => 'uxclinic_casestudy', 'posts_per_page' => 2) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="image-container" style="background: url(<?php the_field('episode_featured_image'); ?>); background-size: cover;">
              <h3><?php the_field('episode_featured_episode_number');?></h3>
              <p>
                <span><?php the_field('episode_featured_episode_client');?></span>
                <?php the_field('episode_featured_episode_description');?></p>
              </div>
            </a>
          </li>
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
      </li>
      
      
      <li>
        <ul>
          <?php query_posts( array( 'post_type' => 'uxclinic_casestudy', 'posts_per_page' => 2, 'offset' => 2) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="image-container" style="background: url(<?php the_field('episode_featured_image'); ?>); background-size: cover;">
              <h3><?php the_field('episode_featured_episode_number');?></h3>
              <p>
                <span><?php the_field('episode_featured_episode_client');?></span>
                <?php the_field('episode_featured_episode_description');?></p>
              </div>
            </a>
          </li>
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
      </li>
      
      <li>
        <ul>
          <?php query_posts( array( 'post_type' => 'uxclinic_casestudy', 'posts_per_page' => 2, 'offset' => 4) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="image-container" style="background: url(<?php the_field('episode_featured_image'); ?>); background-size: cover;">
              <h3><?php the_field('episode_featured_episode_number');?></h3>
              <p>
                <span><?php the_field('episode_featured_episode_client');?></span>
                <?php the_field('episode_featured_episode_description');?></p>
              </div>
            </a>
          </li>
          <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
      </li>
      
    </ul>


    <script>
    $(document).ready(function(){
      $('.bxslider').bxSlider();
    });
    </script>
    
  </section>

<!--   <?php include 'inc-quotes.php'; ?> -->

  <section class="quotes">
      <!-- <h2>Our Happy Clients</h2> -->
      <ul class="quoteslider">
        
        <li>
          <div class="quote">
          The UX team was so helpful for us because a lot of times you need a fresh, 3rd party eyes to really get valuable feedback. It's very easy to get too used to your UX and start making bad decisions based on your own feelings, so working with the UX Team was extremely useful for us
          </div>
          
          <div class="quote-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/andrew-pic.png" /></div>
          <h4>Andrew Miller<span> CEO of Olset.</span></h4>
          <a href="http://www.olset.com/" target="_blank">http://www.olset.com/</a>
        </li>
        
        
        <!--
<li>
          <div class="quote">
          I can tell you really took the time to understand who we are, what we're trying to do, what we're trying to accomplish.
          </div>
          
          <div class="quote-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oleksandra-pic.png" /></div>
          <h4>Oleksandra Schturma<span> CEO of scturmsoft.</span></h4>
          <a href="http://skedio.shturmsoft.com/" target="_blank">http://skedio.shturmsoft.com/</a>
        </li>
-->
        
        <!--
<li>
          <div class="quote">
          It is very easy to get too used to your own UX and UI. You start making bad decisions based on your own feelings. Working with the UX Team was extremely useful to get objective feedback on our product.
          </div>
          
          <div class="quote-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/oleksandra-pic.png" /></div>
          <h4>Dustin Yoder<span> CEO at Sureify.</span></h4>
          <a href="http://www.sureify.com/" target="_blank">http://www.sureify.com/</a>
        </li>
-->
        
        
        
      </ul>
    </section>
  </section>
  
  <?php include 'inc-submit.php'; ?>



<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>

<script>
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script>
<script>
  // get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('.hero').offset().top + $('.hero').height();
// on scroll,
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());

    if (stop > mainbottom) {
        $('header').addClass('past-main').fadeIn("slow");

    } else {
        $('header').removeClass('past-main');
    }
});
</script>
