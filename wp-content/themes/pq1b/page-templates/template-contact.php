<?php

/* Template Name: Contact */

get_header();?>

<div id="internal-main">

  <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  <span id='contact-descrption'>Call today or fill out consultation form below</span><!-- contact-descrption -->

  <div id="page-container">

    <div id='contact-wrapper'>

      <?php get_template_part('page-templates/includes/template', 'locations');?>

    </div><!-- contact-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>