<?php
/*
Template Name: LANDING PAGE MOBILE
*/
?>
<?php get_header(); ?>

<section class="mobile-hero">
  <h1>Developing Mobile Apps is Not an Easy Process</h1>
</section>

<section class="mobile-problems">
  <h2>We Know You Are Dealing With</h2>
  <div class="half">
    <div class="illustration">
      <div class="onboarding-back"></div>
      <div class="onboarding-text"></div>
    </div>
    <div class="description">
      Designing the onboarding process for your app is a tough call. First impressions are everything!
    </div>
  </div>
  
  <div class="half">
    <div class="illustration">
    </div>
    <div class="description">
      If your UX planning doesn’t include a simple and straightforward path, users will quit. 
    </div>
  </div>
  
</section>


<section class="mobile-process">
  <h2>Creating an Experience Is the Way Out</h2>
  
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
</section>


<section class="mobile-cs">
  <h2>Yup! We’ve Done It Before</h2>
  
  <div class="single-casestudy">
    <div class="details">
      <div class="case-logo shopwell-logo"></div>
      <span class="subtitle">iOS & ANDROID APP</span>
      <p class="challenge-title"><b>Challenge</b></p>
      <p class="challenge-text">Discover users value perception while interacting with ShopWell to improve User Engagement through User Experience Research.</p>
      
      <p><b>After our research we figured they should</b></p>
      <ul>
        <li>Concise information by making it fast and easy to access.</li>
        <li>Give users the Ability to have social validation in each product.</li>
        <li>Build user’s trust with personalized messages.</li>
      </ul>
      
    </div>
    
    <div class="phoneframe">
      <div class="shopwellslider">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopwell-before.png" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopwell-after.png" />
      </div>
  
<script>
  $(window).load(function() {
    $(".shopwellslider").twentytwenty();
  });
</script>


    </div>
  </div>
  
  
  <div class="separator"></div>
  
  <div class="single-casestudy">
    <div class="details">
      <div class="case-logo skedio-logo"></div>
      <span class="subtitle">ANDROID APP</span>
      <p class="challenge-title"><b>Challenge</b></p>
      <p class="challenge-text">Discover what are users’ first impressions when using the app, and why they end up uninstalling it.</p>
      
      <p><b>After our research we figured they should</b></p>
      <ul>
        <li>Promote Skedio as a Blank Canvas, a Digital Sketch Notebook.</li>
        <li>Update their User Interface.</li>
        <li>Simplify and organize tools.</li>
        <li>Use everyday examples.</li>
      </ul>
      
      <a class="button" href="#">See Full Case Study</a>
      
    </div>
    
    <div class="phoneframe">
      <div class="shopwellslider">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skedio-before.png" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/skedio-after.png" />
      </div>
  
<script>
  $(window).load(function() {
    $(".shopwellslider").twentytwenty();
  });
</script>


    </div>
  </div>
  
</section>


<?php include 'inc-submit.php'; ?>



<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.event.move.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.twentytwenty.js"></script>


<?php get_footer(); ?>
