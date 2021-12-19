<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stylefit-theme
 */

?>

<footer class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="inner ftr_logo_box">
          <a href="<?php echo get_home_url() ?>">
          <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
              echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Site Logo" class="logo tm-logoBrand">';
          ?>
          </a>

          <?php
            wp_nav_menu(
              array(
                'theme_location'   =>     'ftrLinks',
                'menu'             =>     'footer-links',
                'menu_class'       =>     'ftr_links',
                'menu_id'          =>     'primary-menu',
              )
            )
          ?>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-5 mt-5 mt-md-0">
        <div class="inner">
          <?php
            wp_nav_menu(
              array(
                'theme_location'   =>     'footer',
                'menu'             =>     'footer-menu',
                'menu_class'       =>     'ftr_menu',
                'menu_id'          =>     'primary-menu',
              )
            )
          ?>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-3 mt-5 mt-lg-0">
        <div class="inner">
          <?php
            if (is_active_sidebar('footer-widgets')) {
                dynamic_sidebar('footer-widgets');
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
