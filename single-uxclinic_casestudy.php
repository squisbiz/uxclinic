<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="report-hero" style="background: url(<?php the_field('case_study_background'); ?>) no-repeat; background-size: cover;">
    <div>
      <h1 class="title-new-casestudy"><?php echo get_the_title(); ?></h1>
    </div>
    <h2 class="subtitle-new-casestudy"><?php the_field('case_study_subtitle'); ?></h2>
  </section>

  <section class="display-our-work experts">
   <?php $image = get_field('display_our_work'); if( !empty($image) ): ?>
      <div class="display-work-cont">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="casestudy_hero_img"/>
        <?php endif; ?> <!-- Tanto codigo es para que pueda desplegar el 'alt' de la imagen -->
  </section>

  <section class="report-casestudy">
    <div class="border-class">
      <div class ="report-textcont">
        <h2>Oportunity Areas: <span><?php the_field('casestudy_hero_method'); ?></span></h2>
        <p><?php the_field('casestudy_hero_description'); ?></p>
        <p><?php the_field('diy_link'); ?></p>
      </div>
      <?php $image = get_field('casestudy_hero_image'); if( !empty($image) ): ?>
      <div class="process-img-cont">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="casestudy_hero_img"/>
        <?php endif; ?> <!-- Tanto codigo es para que pueda desplegar el 'alt' de la imagen -->
        <h5><?php the_field('footnote_process_img'); ?></h5>
      </div>
    </div>
  </section>

  <section class="report-analysis">
    <div class="border-class">
      <div class ="report-textcont">
        <h2>UX Findings for: <span><?php the_field('case_study_company_title'); ?></span></h2>
        <p><?php the_field('casestudy_outcome_description'); ?></p>
      </div>
      <?php $image = get_field('casestudy_outcome_image2'); if( !empty($image) ): ?>
      <div class="process-img-cont">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="casestudy_outcome_img"/>
      <?php endif; ?> <!-- Tanto codigo es para que pueda desplegar el 'alt' de la imagen -->
        <h5><?php the_field('footnote_img_outcomes'); ?></h5>
        </div>
    </div>
  </section>


  <section class="episode-hero casestudy-video-hero">
      <h2 class="video-h3-title">Watch Our <span><?php the_field('case_study_episode'); ?></span></h2>
    <div class="video-wrapper">
      <?php the_field('casestudy_video_video'); ?>
    </div>
    <p>
      <?php the_field('casestudy_video_description'); ?>
    <!--   <a class="button report-button" href="<?php the_field('casestudy_video_report_button_url'); ?>"><?php the_field('casestudy_video_report_button_label'); ?></a> -->
    </p>

  </section>


  <section class="report-download">
    <h2><?php the_field('report_download_label'); ?></h2>
    <a class="button report-button" href="<?php the_field('casestudy_video_report_button_url'); ?>"><?php the_field('casestudy_video_report_button_label'); ?></a>
  </section>

  <section class="report-pagination">
    <div class="previouspost">
    <?php if(get_adjacent_post(false, '', true)) { echo previous_post_link('%link'); }
    else { echo '<span style="display:none;">"'.get_the_title().'" is the oldest post, no further articles. </span>'; } ; ?>
    </div>
    <div class="nexpost">
    <?php if(get_adjacent_post(false, '', false)) { echo next_post_link('%link'); }
    else { echo '<span style="display:none;">"'.get_the_title().'" is the latest post: no newer articles. </span>'; } ; ?>
    </div>
  </section>


<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
