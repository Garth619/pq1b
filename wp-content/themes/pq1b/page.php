<?php get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/template', 'default-page-banner');?>


  <?php // banner/no banner on internal pages
if (basename(get_page_template()) === 'page.php') {
    if (get_field('disable_banner_new') == 'Yes') {
        $banner = ' no-banner-layout';
    } else {
        $banner = ' default-banner-layout';
    }

}

if (get_field('disable_sidebar')) {
    $sidebar = ' disabled-sidebar';
} else {
    $sidebar = ' enabled-sidebar';
}

?>

  <div id="page-container" class="two-col <?php echo $banner;
echo $sidebar; ?>">

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

    <div class="page-content">

      <?php if (get_field('disable_banner_new')) {?>

      <h1 class="page-title"><?php the_title();?></h1>

      <?php }?>


      <?php if (!get_field('disable_banner_new')): ?>

      <?php if (get_field('banner_h1') == "Yes"): ?>

      <h2 class="page-title"><?php // the_title();?>H1 California’s Top Sex Abuse Lawyers</h2>

      <?php else: ?>

      <h1 class="page-title"><?php // the_title();?>H1 California’s Top Sex Abuse Lawyers</h1>

      <?php endif;?>

      <?php endif;?>

      <div class='page-content-inner content'>

        <?php //get_template_part('loop', 'page');?>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non sodales leo. Pellentesque habitant morbi
          tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus vel justo porttitor, finibus dolor
          elementum, volutpat dolor. Etiam vel tempor nisl. In eu libero sit amet sem ultrices bibendum et at ligula.
          Phasellus sit amet sapien non nunc ultrices rutrum. Ut condimentum nisl augue, sed vehicula sem pretium
          rutrum. Cras blandit elit dolor, et maximus dui hendrerit ac. Nulla facilisi.</p>

        <p>Nunc lorem dolor, finibus vitae libero cursus, tempus congue eros. Etiam porttitor tellus id hendrerit
          rutrum. Fusce at blandit elit. Pellentesque cursus posuere erat, in bibendum odio posuere ac. <a href="">Embed
            Link</a>
          Style. Nam at justo sed ipsum gravida pulvinar eu quis lacus. Nunc vel libero mollis, ullamcorper lorem non,
          consequat magna. Aliquam erat volutpat. Donec bibendum, sapien ac blandit efficitur, ante nibh maximus ex, at
          efficitur augue purus in justo. Duis sagittis consectetur eros, at porttitor purus dictum euismod. Nam
          consequat lectus nec dui aliquam pretium.</p>

        <h2>H2 Trial Lawyers for Justice</h2>

        <ul>
          <li>Greenberg Gross was founded with a single goal: to provide the best possible service to clients involved
            in high-stakes litigation in the most cost-effective manner.</li>
          <li> For several years, the founders worked as
            partners in one of the world’s largest law firms, specializing in the defense of clients who had been sued
            in business cases. In 2011, they co-tried a high-profile case in which their client, a real estate developer
            named NCA, obtained a $50 million verdict on a counterclaim against the largest nonprofit investment manager
            in the country</li>
          <li> It was that experience that ultimately led the founders to form Greenberg Gross, enabling
            them to better serve clients by handling high-stakes business cases for both plaintiffs and defendants.</li>
        </ul>

        <h3>H3 Our attorneys are proud to be leaders in the Orange County legal community</h3>

        <p>In ac lectus interdum, aliquam ante nec, facilisis est. Quisque commodo imperdiet nibh eu consequat. Proin
          nec metus consectetur, congue leo at, porta ipsum. Vivamus ac consequat arcu. Maecenas volutpat magna ac
          vehicula efficitur. Donec hendrerit imperdiet lorem, id pellentesque sapien iaculis ut. Aliquam egestas nisl
          placerat ligula consectetur condimentum. Maecenas ut sapien molestie, volutpat felis maximus, rutrum sapien.
          Quisque elit orci, pharetra ut metus nec, lacinia eleifend enim. Nulla eros diam, lacinia quis ullamcorper
          vel, iaculis suscipit nibh</p>

        <h4>H4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat volutpat auctor.</h4>

        <p>In ac lectus interdum, aliquam ante nec, facilisis est. Quisque commodo imperdiet nibh eu consequat. Proin
          nec metus consectetur, congue leo at, porta ipsum. Vivamus ac consequat arcu. Maecenas volutpat magna ac
          vehicula efficitur. Donec hendrerit imperdiet lorem, id pellentesque sapien iaculis ut. Aliquam egestas nisl
          placerat ligula consectetur condimentum. Maecenas ut sapien molestie, volutpat felis maximus, rutrum sapien.
          Quisque elit orci, pharetra ut metus nec, lacinia eleifend enim. Nulla eros diam, lacinia quis ullamcorper
          vel, iaculis suscipit nibh.</p>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

  </div><!-- page-container -->

</div><!-- internal-main -->


<?php get_footer();?>