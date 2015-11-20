<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="hero" style="background: url(<?php the_field('home_hero_image_bg'); ?>) no-repeat center top, url(http://theuxclinic.com/wp/wp-content/uploads/2015/11/ux-research-designers-home.jpg) no-repeat center bottom; background-size: cover;">
    <h1><?php the_field('home_hero_title'); ?></h1>

<?php the_field('home_hero_text'); ?>
<div class="services-cont">
  <div class="blocks">
     <img src="http://theuxclinic.com/wp/wp-content/uploads/2015/11/user-research-uxteam.jpg">
     <div class="block-text-cont">
        <h2>User Research</h2>
        <p>Listening to your users is key to understand their needs and wants.</p>
     </div>
  </div>
    <div class="blocks">
      <img src="http://theuxclinic.com/wp/wp-content/uploads/2015/11/data-interpretation-uxteam.jpg">
     <div class="block-text-cont">
        <h2>Data Interpretation</h2>
        <p>User insights are translated into design features for your products.</p>
     </div>
  </div>
    <div class="blocks">
       <img src="http://theuxclinic.com/wp/wp-content/uploads/2015/11/ux-solutions-uxteam.jpg">
     <div class="block-text-cont">
        <h2>UX Solutions</h2>
        <p>We create visual solutions ready to be implemented in your next design iteration.</p>
     </div>
  </div>

</div>
  <p><a id="link-anchor" href="#myAnchor" class="contactform-submit"><?php the_field('home_hero_button_text'); ?></a></p>
  </section>

  <section class="episodes">
    <h2><?php the_field('home_episodes_title'); ?></h2>
    <a class="button" href="http://theuxclinic.com/casestudies">See all Case studies</a>
    <ul>
      <?php query_posts( array( 'post_type' => 'uxclinic_casestudy', 'posts_per_page' => 3) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="image-container" style="background: url(<?php the_field('episode_featured_image'); ?>); background-size: cover;">
          </div>

          <h3><?php the_field('episode_featured_episode_number');?><span><?php the_field('episode_featured_episode_client');?></span></h3>
          <p><?php the_field('episode_featured_episode_description');?></p>
        </a>
      </li>
      <?php endwhile; endif; wp_reset_query(); ?>
    </ul>
  </section>

  <section class="submit">
    <a name="myAnchor" id="myAnchor"></a>
    <h2><?php the_field('home_submit_title'); ?></h2>
    <p>
      <img src="http://theuxclinic.com/wp/wp-content/uploads/2015/11/sandra-img.png"> Sandra Will Call You <strong> (408) 890-2115</strong>
    </p>
<div class="contact-overlay">
  <div class="form">
    <form id="contactrequest" action="http://theuxclinic.com/wp/wp-content/themes/uxclinic/send.php" method="post">
      <p class="error"></p>
      <p><input type="text" id="telephone" class="contactform-name" name="phone" placeholder="Phone [xxx-xxx-xxxx]"></p>
      <p><input type="text" id="email" class="contactform-email" name="email" placeholder="E-mail:"></p>
      <textarea type="text" id="site" class="contactform-description" name="site" placeholder="Company Site:"></textarea>
      <p class="center"><input type="button" value="Send" onclick="requestSubmit()" class="contactform-submit"></p>
    </form>
  </div>
</div>
  </section>



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
