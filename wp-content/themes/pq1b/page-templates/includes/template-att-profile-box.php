<div class='att-profile-wrapper'>

  <div class='att-profile-image'>

    <?php $attorney_profile = get_field('attorney_bio_image');?>

    <?php if ($attorney_profile) {?>

    <img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

    <?php } else {?>

    <img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Bio Placeholder" />

    <div class='placeholder-wrapper'></div><!-- placeholder-wrapper -->

    <?php }?>

  </div><!-- att-profile-image -->

  <div class='att-profile-button-wrapper'>

    <a class='button-three att-profile-button' href=''><?php the_field('download_vcard_verbiage');?></a>
    <!-- button-two  -->

    <a class='button-three att-profile-button' href=''><?php the_field('download_bio_pdf_verbiage');?></a>
    <!-- button-two  -->

  </div><!-- att-profile-button-wrapper -->

</div><!-- att-profile-wrapper -->