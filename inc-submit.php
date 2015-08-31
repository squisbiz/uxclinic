<?php
query_posts('page_id=2');
if (have_posts()) : while (have_posts()) : the_post();
?>
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
<?php endwhile; ?><?php endif; WP_reset_query(); ?>
