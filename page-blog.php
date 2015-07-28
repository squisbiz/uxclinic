<?php
/*
Template Name: TEMPLATE BLOG
*/
?>

<?php get_header(); ?>
<div class="episodesindex">
  <div class="blogposts">

  <?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>
  
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  
    <a href="<?php the_permalink() ?>" class="loop-single">
      <div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div>
      <div class="excerpt">
      		<h1><?php the_title(); ?></h2>
          <div>
            <?php the_excerpt() ?>
          </div>
    	</div>
  
    </a>
  
  <?php endwhile; wp_reset_postdata(); ?>
  
  </div>
</div>
<?php get_footer(); ?>
