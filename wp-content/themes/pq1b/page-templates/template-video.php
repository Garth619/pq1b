<?php

/* Template Name: Video Center */

get_header();?>

<div id="internal-main">

  <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  <div id="page-container">
    <!-- do yt wsta with thumbnail options -->
    <div id='video-wrapper'>

      <div id='single-video' class="pq-video">

        <div class='mywistia'></div><!-- mywistia -->

        <div class='pq-video-img'>

          <img src='<?php bloginfo('template_directory');?>/images/video-image.jpg' alt='' />

          <div class='pq-video-overlay'>

            <span class='pq-play-button'></span><!-- pq-play-button -->

          </div><!-- pq-video-overlay -->

        </div><!-- pq-video-img -->

        <span class='single-video-title-wrapper'>Learn about our law firm really long title that is two lines long here
          is the style</span><!-- single-video-title-wrapper -->

      </div><!-- single-video -->

    </div><!-- video-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>