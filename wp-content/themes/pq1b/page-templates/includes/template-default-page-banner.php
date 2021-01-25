<?php if (!get_field('disable_banner_new')) {?>

<div id="internal-banner">

  <div id="internal-banner-content">

    <?php // blog main feed

    if (is_home()) {?>

    <h1 class="banner-title page-title"><?php the_field('internal_banner_blog_title', 'option');?></h1>
    <!-- banner_title -->

    <?php }?>

    <?php // category feed

    if (is_category()) {?>

    <h1 class="banner-title page-title"><?php single_cat_title()?></h1><!-- banner_title -->

    <?php }?>

    <?php // archive feed

    if (is_archive() && !is_category()) {?>

    <h1 class="banner-title page-title">
      <?php printf(__('<span>%s</span>'), get_the_date(_x('Y', 'yearly archives date format', 'twentyten')));?>
    </h1>

    <?php }?>

    <?php

    // pa pages

    if (!is_home() && !is_archive() && basename(get_page_template()) === 'page.php') {?>

    <?php if (get_field('banner_title')): ?>

    <?php if (get_field('banner_h1') == "Yes"): ?>

    <h1 class="banner-title page-title"><?php the_field('banner_title');?></h1><!-- banner_title -->

    <?php else: ?>

    <span class="banner-title page-title"><?php the_field('banner_title');?></span><!-- banner_title -->

    <?php endif;?>

    <?php else: ?>

    <?php if (get_field('banner_h1') == "Yes"): ?>

    <h1 class="banner-title page-title"><?php the_field('global_banner_title', 'option');?></h1><!-- banner_title -->

    <?php else: ?>

    <span class="banner-title page-title"><?php the_field('global_banner_title', 'option');?></span>
    <!-- banner_title -->

    <?php endif;?>

    <?php endif;?>

    <?php }?>

    <?php // practice areas

    if (is_page_template('page-templates/template-padirectory.php')) {?>

    <h1 class="banner-title page-title"><?php the_title();?></h1>

    <?php }?>



  </div><!-- internal-banner-content -->

  <picture>

    <source media='(min-width: 1695px)' srcset='<?php bloginfo('template_directory');?>/images/int-hero-hd.jpg'>

    <source media='(min-width: 1380px)' srcset='<?php bloginfo('template_directory');?>/images/int-hero-1400.jpg'>

    <img id='banner-img' src='<?php bloginfo('template_directory');?>/images/int-hero-1200.jpg' alt='' />

  </picture>

</div><!-- internal-banner -->

<?php }?>