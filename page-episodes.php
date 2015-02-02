<?php
/*
Template Name: EPISODES INDEX
*/
?>
<?php get_header(); ?>


<div class="episodesindex">
  
  <h1>Episodes</h1>
  
  <div class="the_content">
    
    <?php query_posts('cat=4'); while (have_posts()) : the_post(); ?>
    
      <div class="single">
        <a href="<?php the_permalink(); ?>"><div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div></a>
        
        <div class="excerpt">
          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          <?php the_excerpt(); ?>
        </div>
        
      </div>
      <?php endwhile; ?>

  </div>
</div>


<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
