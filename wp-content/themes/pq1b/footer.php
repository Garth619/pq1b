<footer>

  <div id='footer-inner'>

    <div id='footer-form-wrapper'>

      <span id='footer-form-title'>Request a Consultation</span><!-- footer-form-title -->

      <span id='footer-form-descrip'>Fill out the form below and we’ll get back to you shortly.</span>
      <!-- footer-form-descrip -->

      <?php gravity_form(3, false, false, false, '', true, 1345);?>

      <span id='required'><span>*</span>Required Field</span><!-- required -->

    </div><!-- footer-form-wrapper -->

    <div id='footer-location-wrapper'>

      <div id='footer-logo'>

        <a href='<?php bloginfo('url');?>'>

          <?php echo file_get_contents(get_template_directory() . '/images/logo.svg'); ?>

        </a>

      </div><!-- footer-logo -->

      <div id='footer-location-inner'>

        <?php get_template_part('page-templates/includes/template', 'locations');?>

      </div><!-- footer-location-inner -->

    </div><!-- footer-location-wrapper -->

    <div id='copyright-wrapper'>

      <ul>
        <li>Copyright &copy; <?php echo date('Y'); ?> Greenberg Gross</li>
        <li><a href="">Policies & Disclaimer</a></li>
        <li><a href="">Privacy Policy</a></li>
      </ul>

      <a id='ilawyer' href='//ilawyermarketing.com' target="_blank" rel="noopener">

        <?php echo file_get_contents(get_template_directory() . '/images/ilawyer.svg'); ?>

      </a><!-- ilawyer -->

    </div><!-- copyright-wrapper -->

  </div><!-- footer-inner -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

<?php if (is_front_page()) {?>

<script type="text/javascript">
jQuery(document).ready(function($) {

  // above the fold home functions

  $("body").addClass("ready");


});

// load all other scripts

function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      for (const key in attributes) {
        const attribute = key;
        const value = attributes[key];
        scriptElem.setAttribute(attribute, value ? value : "");
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}

delayScript("<?php bloginfo('template_directory');?>/js/custom-min.js", 2000);

<?php if (get_field('live_chat', 'option')) {?>

delayScript("<?php the_field('live_chat', 'option');?>", 2000);

<?php }?>
</script>

<?php }?>

</body>

</html>