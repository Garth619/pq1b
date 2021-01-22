<?php get_header();?>

<div id="internal-main">

  <h1 class="page-title page-large-content-title"><?php the_field('not_found_title', 'option');?></h1>


  <div id="page-container">

    <div class="page-content">

      <div class='page-content-inner content'>

        <?php //the_field('not_found_content', 'option');?>

        <p>The page you were looking for appears to have been moved, deleted or does not exist. You could go back to
          where you were or head straight to our home page.</p>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>