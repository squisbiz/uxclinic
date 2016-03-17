<?php
/*
Template Name: LANDING PAGE AD ROLL
*/
?>
<?php get_header(); ?>

<section class="e-hero">
  <h1>User Experience Makes a Difference in Software Development</h1>
</section>

<section class="e-can">
  <h2>UX Can Have a Lasting Impact in Your Company</h2>
  <h3>Our UX Team Can Help You To:</h3>
  <div class="e-can-container">
    <div class="e-can-item">
      <div class="e-can-image">
        <a href="#modal" class="intuitive-design"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intuitive-design-btn.png" /></a>
      </div>
      <div class="e-can-text">Make Your Products More Intuitive</div>
    </div>
    
    <div class="e-can-item">
      <div class="e-can-image">
        <a href="#modal" class="user-satisfaction"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user-satisfaction-btn.png" /></a>
      </div>
      <div class="e-can-text">Increase Customer Satisfactions</div>
    </div>
    
    <div class="e-can-item">
      <div class="e-can-image">
        <a href="#modal" class="user-engagement"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user-engagement-btn.png" /></a>
      </div>
      <div class="e-can-text">Boost Your Engagement</div>
    </div>
    
  </div>
</section>

<div class="footer-padding-div"></div>

<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <h2>Are You Ready to Power-up Your Product?</h2>
  <p style="margin-bottom: 0;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sandra-img.png"> Talk to Sandra at<strong> (408) 890-2115</strong>
  </p>
  
  <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php" method="post">

      <p class="error"></p>
      <div><input type="text" id="site" class="contactform-name" name="site" placeholder="Name"></div>
      <div><input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input></div>
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <div class="center"><input type="button" value="Let's Talk" onclick="requestSubmit()" class="contactform-submit"></div>
    </form>
  
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });

//  Usage:
//  $(function() {
//
//    // In this case the initialization function returns the already created instance
//    var inst = $('[data-remodal-id=modal]').remodal();
//
//    inst.open();
//    inst.close();
//    inst.getState();
//    inst.destroy();
//  });

  //  The second way to initialize:
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>


<?php get_footer(); ?>
