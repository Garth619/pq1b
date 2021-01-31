<div id="sidebar-wrapper" class='sidebar-bio'>

  <div id='sidebar-inner'>

    <div id='desktop-att-profile'>

      <?php

// desktop att profile

get_template_part('page-templates/includes/template', 'att-profile-box');?>

    </div><!-- desktop-att-profile -->

    <div id='att-bio-contact-info'>

      email phone

    </div><!-- att-bio-contact-info -->

    <div id='att-bio-location-wrapper'>

      <div class='att-bio-location'>

        la

      </div><!-- att-bio-location -->

      <div class='att-bio-location'>

        oc

      </div><!-- att-bio-location -->


    </div><!-- att-bio-location-wrapper -->

    <?php if (have_rows('sidebar_accolades')): ?>

    <div id='sidebar-accolades'>

      <?php while (have_rows('sidebar_accolades')): the_row();?>

      <div class='sidebar-accolades-section'>

        <span class="sidebar-accolades-title"><?php the_sub_field('accolades_title');?></span>
        <!-- sidebar-accolades-title -->

        <?php if (have_rows('accolades_list_items')): ?>

        <ul>

          <?php while (have_rows('accolades_list_items')): the_row();?>

          <li><?php the_sub_field('accolades_list_item');?>

            <?php if (have_rows('accolades_sub_list_items')): ?>

            <ul>

              <?php while (have_rows('accolades_sub_list_items')): the_row();?>

              <li><?php the_sub_field('accolades_sub_list_item');?></li>

              <?php endwhile;?>

            </ul>

            <?php endif;?>

          </li>


          <?php endwhile;?>

        </ul>

        <?php endif;?>



      </div><!-- sidebar-accolades-section -->

      <?php endwhile;?>

    </div><!-- sidebar-accolades -->

    <?php endif;?>

  </div><!-- sidebar-inner -->

</div><!-- sidebar_wrapper -->