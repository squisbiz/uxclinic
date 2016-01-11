<section class="submit">
  <a name="myAnchor" id="myAnchor"></a>
  <h2><?php the_field('home_submit_title'); ?></h2>
  <p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sandra-img.png"> Sandra Will Call You <strong> (408) 890-2115</strong>
  </p>
  <div class="contact-overlay">
  <div class="form">
    <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php" method="post">
      <p class="error"></p>
      <p><input type="text" id="telephone" class="contactform-name" name="telephone" placeholder="Name"></p>
      <p><input type="text" id="email" class="contactform-email" name="email" placeholder="Phone [xxx-xxx-xxxx]:"></p>
      <textarea type="text" id="site" class="contactform-description" name="site" placeholder="Email:"></textarea>
      <p class="center"><input type="button" value="Let's Talk" onclick="requestSubmit()" class="contactform-submit"></p>
    </form>
  </div>
  </div>
</section>
