<?php

if ( ! defined( '_JN_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_JN_VERSION', '1.0.4' );
}

if ( ! function_exists( 'stylefit_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stylefit_theme_setup() {
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// Logo support
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => false,
        );

        add_theme_support( 'custom-logo', $defaults );

        /**
		 * Add support for Featured Image.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// Logo support
        add_theme_support( 'post-thumbnails' );

        /**
         * Enqueue scripts and styles.
         */

        function stylefit_scripts() {
            wp_enqueue_style( 'stylefit-style', get_stylesheet_uri(), array(), _JN_VERSION );
            wp_enqueue_style( 'stylefit-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css',false, _JN_VERSION,'all');
            wp_enqueue_style( 'stylefit-fontawesome-style', get_template_directory_uri() . '/assets/css/fontawesome/css/all.min.css',false, _JN_VERSION,'all');

            // owl and slick both are linked use one of them at once
            // wp_enqueue_style( 'stylefit-owl-style', get_template_directory_uri() . '/assets/css/owl/owl-carousel-v2..3.4.min.css',false, _JN_VERSION,'all');
            // wp_enqueue_style( 'stylefit-slick-style', get_template_directory_uri() . '/assets/css/slick/slick-1.8.1.min.css',false, _JN_VERSION,'all');
             wp_enqueue_style( 'stylefit-theme-font', get_template_directory_uri() . '/assets/fonts/helvetica-neue/stylesheet.css',false, _JN_VERSION,'all');
            wp_enqueue_style( 'stylefit-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',false, _JN_VERSION,'all');

            // slick-css
            // wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/slick/slick.css',false, _JN_VERSION,'all');
            // wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/slick/slick-theme.css',false, _JN_VERSION,'all');

            //tiny-slider
            wp_enqueue_style( 'tiny-slider', get_template_directory_uri() . '/assets/tiny-slider/tiny-slider.css',false, _JN_VERSION,'all');

            wp_enqueue_script( 'stylefit-jquery-script', get_template_directory_uri() . '/assets/js/jquery/jquery-3.6.0.min.js', array(), _JN_VERSION, true );
            wp_enqueue_script( 'stylefit-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array(), _JN_VERSION, true );

            // owl and slick both are linked use one of them at once
            // wp_enqueue_script( 'stylefit-owl-script', get_template_directory_uri() . '/assets/js/owl/owl-carousel-v2.3.4.min.js', array(), _JN_VERSION, true );
            // wp_enqueue_script( 'stylefit-slick-script', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), _JN_VERSION, true );
            

            //tiny-js
            wp_enqueue_script( 'tiny-slider-script', get_template_directory_uri() . '/assets/tiny-slider/tiny-slider.js', array(), _JN_VERSION, true );
            wp_enqueue_script( 'stylefit-theme-script', get_template_directory_uri() . '/assets/js/function.js', array(), _JN_VERSION, true );


        //	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        //		wp_enqueue_script( 'comment-reply' );
        //	}
        }
        add_action( 'wp_enqueue_scripts', 'stylefit_scripts' );
	}
endif;
add_action( 'after_setup_theme', 'stylefit_theme_setup' );



// Register Menu's
function register_TM_menu() {
   register_nav_menu('header-menu',__( 'header' ));
   register_nav_menu('footer-menu',__( 'footer' ));
   register_nav_menu('footer-links',__( 'ftrLinks' ));
}

add_action( 'init' , 'register_TM_menu' );



// add class in li
add_filter ( 'nav_menu_css_class', 'add_class_to_menu_list', 10, 4 );

function add_class_to_menu_list ( $classes, $item, $args, $depth ){
    if ($args->theme_location == 'header') { /**** according to theme location *****/
      $classes[] = 'nav-item';
    }
    return $classes;
}



// add class in anchor
add_filter( 'nav_menu_link_attributes', 'add_class_to_list_anchor', 10, 4 );

function add_class_to_list_anchor($atts, $item, $args, $depth) {
    if ($args->theme_location == 'header') { /**** according to theme location *****/
        $atts['class'] = "nav-link";
    }
  return $atts;
}

/*** register sidebar ***/

register_sidebar(
    array(
        'name' => _x('Footer Widget', 'backend', 'cargopress-pt'),
        'id' => 'footer-widgets',
        'description' => _x('Add social links and copyright text here', 'backend', 'cargopress-pt'),
        'before_widget' => '<div class="widget  %2$s">',
        'after_widget' => '</div>',
    )
);

// allow woocommerce to override templates
//add_theme_support('woocommerce');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/admin-css.php';

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );


function ap_login_redirect_wc( $redirect, $user ) {

//    $redirect_page_id = url_to_postid( $redirect );
//    $checkout_page_id = wc_get_page_id( 'shop' );
//
//    if ($redirect_page_id == $checkout_page_id) {
//        return $redirect;
//    }
//    return get_permalink(get_option('woocommerce_myaccount_page_id')) . 'shop/';
    
    return home_url('/shop');

}
add_action('woocommerce_login_redirect', 'ap_login_redirect_wc', 10, 2);


function ap_registration_redirect_wc() {
//    wp_logout();
    return home_url('/shop');
}
add_action('woocommerce_registration_redirect', 'ap_registration_redirect_wc', 2);
