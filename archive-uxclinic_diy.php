<?php get_header(); ?>

<div class="episodesindex">

<div class="cont-h1">
  <h1>Do It Yourself</h1>
</div>

<div class="the_content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<a href="<?php the_permalink(); ?>" class="loop-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bg-op diy-loop"></div>
    		<div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div>
    	<div class="excerpt">
      		<h1><?php the_title(); ?></h2>
          <div class="why-diy">
            <?php
                the_field('diy_hero_description')
              ?>
          </div>
            <div class="when-diy"><span>When to use it: </span> <?php the_field('when_to_use')?></div>
    	</div>
  	</a>

<?php endwhile; endif; ?>
  </div>
</div>

<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
