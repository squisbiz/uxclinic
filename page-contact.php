<?php
/*
Template Name: CONTACT PAGE
*/
?>
<?php get_header(); ?>

<section class="section-contact">
  <h1>If you want us to call you</h1>
  <h2>Submit this quick form and Sandra will call you right away. All information is kept private.</h2>
<!--
  <h2>Contact</h2>
  <span><img src="http://theuxclinic.com/wp/wp-content/themes/uxclinic/img/phone-icon-contact-page.png">(408) 890-2115</span>
-->
<!--
  <div>
  <a href="#">svazquez@nearsoft.com</a>
  </div>
-->

</section>

<div class="section-contact-form">
  <div class="form">
      <h1>Are We a Match?</h1>
      <p>We will contact you to see how we can bring a positive impact to your product’s objectives.</p>
      <form id="contactrequest" action="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/send.php" method="post">
        <p class="error"></p>
        <input type="text" class="name" id="name" name="name" placeholder="Name">
        <input type="text" class="email" id="email" name="email" placeholder="E-mail">
        <input type="text" class="telephone" id="telephone" name="telephone" placeholder="Phone (optional) [xxx-xxx-xxxx]">
<!--         <textarea id="Description" name="Description" class="message"placeholder="Your Message"></textarea> -->
        <p class="center"><input type="button" value="Send request" class="button" onclick="requestSubmit()"><a href="#" class="close"><i class="icon-remove"></i></a></p>
        <input type="hidden" id="company" name="company" value="nearsoft">
      </form>
  </div>
</div>




<?php get_footer(); ?>
