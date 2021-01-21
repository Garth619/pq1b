<?php

/* Template Name: PA Directory */

get_header();?>

<div id="internal-main">

  <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  <div id="page-container">

    <div id='pa-directory'>

      <?php if (get_field('practice_area_directory')): ?>

      <ul class="pa_directory_top_menu">

        <?php while (has_sub_field('practice_area_directory')): ?>

        <li>

          <a><?php the_sub_field('title');?></a>

          <?php $obj = get_sub_field('pa_nav_menu');?>

          <?php wp_nav_menu(array('menu' => $obj->name));?>

        </li>

        <?php endwhile;?>

      </ul><!-- pa_directory_top_menu -->

      <?php endif;?>

    </div><!-- pa-directory -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>