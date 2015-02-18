<?php get_header(); ?>

	<!-- 404 content -->
	<section class="error404">
  	 <p><?php the_field('404_copy'); ?></p>
  	 <a class="button" href="<?php the_field('404_button_url'); ?>"><?php the_field('404_button_label'); ?></a>
	</section>

<?php get_footer(); ?>