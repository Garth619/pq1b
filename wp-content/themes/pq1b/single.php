<?php get_header();?>


<div id="internal-main">

  <?php if (get_field('disable_sidebar')) {
    $sidebar = ' disabled-sidebar';
} else {
    $sidebar = ' enabled-sidebar';
}

?>

  <div id="page-container" class="two-col <?php echo $banner;
echo $sidebar; ?>">

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

    <div class="page-content">

      <?php if (get_field('disable_banner_new')) {?>

      <h1 class="page-title default-title"><?php the_title();?></h1>

      <?php }?>


      <?php if (!get_field('disable_banner_new')): ?>

      <?php if (get_field('banner_h1') == "Yes"): ?>

      <h2 class="page-title default-title"><?php the_title();?></h2>

      <?php else: ?>

      <h1 class="page-title default-title"><?php the_title();?></h1>

      <?php endif;?>

      <?php endif;?>

      <div class='page-content-inner content'>

        <?php get_template_part('loop', 'single');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

  </div><!-- page-container -->

</div><!-- internal-main -->


<?php get_footer();?>