<?php
/*
Template Name: EPISODES INDEX
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="episodesindex">
  <h1>Episodes</h1>
  <div class="content">
    <?php
      query_posts('cat=3');
      while (have_posts()) : the_post(); ?>
      <section>
        <div class="thumb" style="background: url('<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true); echo $thumb_url[0]; ?>') no-repeat center center;">
        
        <div class="excerpt">
          <h2><?php the_title(); ?></h2>
        </div>
        
      </section>
      <?php endwhile; ?>
    <?php endwhile; ?><?php endif; ?>
  </div>

  <div class="sidebar"></div>
</div>


<?php include 'inc-submit.php'; ?>

<?php get_footer(); ?>
