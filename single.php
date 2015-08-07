<?php get_header(); ?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-header">
  <div style="top: -10px; width: 100%; height: 270px; filter: blur(5px); -webkit-filter: blur(5px); position: absolute; background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;)"></div>
  <div class="title-band">
    <h1><?php the_title(); ?></h1>
    <div class="date">Published on <?php the_date(); ?> by <?php the_author(); ?></div>
  </div>
</div>

<div class="postcontainer">
  
<div class="post-body" <?php post_class(); ?>>
	
	<div class="post-content">
	  <?php the_content( __( 'read more ...', 'simplestyle' ) ); ?>
	</div>
	
	<div class="clear"></div>
	
	 <?php wp_link_pages('before=<div class="tags"><span class="tags">Pages</span><span class="link-pages">&after=</span></div>'); ?>
	
	<div id="comments"><?php comments_template('', true); ?> </div>
			
</div>

<div class="post-sidebar"></div>
	
	
	<?php endwhile; ?> 
	<?php endif; ?>
</div>
	
		
	<?php get_footer(); ?>