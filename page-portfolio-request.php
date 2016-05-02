<?php
/*
Template Name: PORTFOLIO REQUEST
*/
?>
<?php get_header(); ?>

<div class="ux-p-hero">
	<h1>Would you like to know how we have helped several software companies?</h1>
	<span>Request our portfolio</span>
	
	<div class="request-form">
      <form id="contactrequest" action="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/send.php" method="post">
        <p class="error"></p>
        <input type="text" class="name" id="name" name="name" placeholder="Name">
        <input type="text" class="email" id="email" name="email" placeholder="E-mail">
        <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
        <input type="button" value="Request" class="button" onclick="requestSubmit()"><a href="#" class="close"><i class="icon-remove"></i></a>
        <input type="hidden" id="company" name="company" value="nearsoft">
      </form>
  </div>
	
</div>

<section class="ux-p-process">
	<h2>Our UX Process</h2>
	
	<div class="timelinebar"></div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-01"></div>
		<div class="process">
			<h2>Planning</h2>
			<p>We start by analyzing your product and defining with you the main issue to focus on. Since each product is unique we take this time to deeply understand your needs and select the research method that best suits your product.</p>
		</div>
	</div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-02"></div>
		<div class="process">
			<h2>Research</h2>
			<p>We conduct 1-on-1 feedback session learn what your product is telling your users. We look for insights on how your customer interact with you application. We analyze this information to propose UX solution.</p>
		</div>
	</div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-03"></div>
		<div class="process">
			<h2>Outcome</h2>
			<p>We deliver US interface design that include UI high fidelity mockups as well as a styleguide ready to implement for you development team. Also, all of our work and findings are (plasmados) at report and presented to at a presentation.</p>
		</div>
	</div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-04"></div>
		<div class="process">
			<h2>Follow Up</h2>
			<p>If you need extra help to implement the new design we work hand by hand with your development team.</p>
		</div>
	</div>
	
</section>

<section class="onlytitle">
<h2>We have done</h2>
	
</section>

<section class="shopwell p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>ShopWell</h2>
			<div class="p-test-desc">
			ShopWell is a free website and iPhone/Android app that scores foods on how well they meet your unique needs.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Increase user retention and engagement.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method-container">
			<div class="p-cs-method-half">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ShopWellAnalyzed_002.jpg" />
				<h2>Remote Moderated Research</h2>
				<p>We conducted a Remote Moderated Research asking users a set of questions regarding how they feel and interact with the app.</p>
			</div>
		
			<div class="p-cs-method-half">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ShopWellAnalyzed_004.jpg" />
				<h2>Card Sorting</h2>
				<p>And also, we did an activity called Card Sorting where users choose what features are most valuable for them.</p>
			</div>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcase-container">
			<div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_before1.jpg" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_after1.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_before2.jpg" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_after2.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>ShopWell Menu</h3>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>ShopWell homescreen</h3>
	    </div>
		</div>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Personalized content for users</li>
			<li>Social validation</li>
		</ul>
	</div>
	
</section>


<section class="cogia p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>Cogia Intelligence</h2>
			<div class="p-test-desc">
			Cogia Intelligence is a web and social media monitoring system.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Discover how to improve the informa on structure in the Cogia Intelligence App.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/portfolio/cogiaaffinity2.jpg" />
			<h2>Elito Method</h2>
			<p>We used the Elito Method to categorize user research observations and define main insights that can improve the Cogia experience.</p>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcaseslider">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cogia_before.png" alt="Skedio android app before ux research"/>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cogia_after.png" alt="Skedio android app after ux research improvements"/>
    </div>
    <h3>Cogia Intelligence desktop app before and after conducting User Research</h3>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Workspaces to distill data from top-down (general to specific)</li>
			<li>Default Dashboards and Widgets</li>
			<li>Feedback from the system</li>
		</ul>
	</div>
	
</section>






<div class="footerholder"></div>

<?php get_footer(); ?>