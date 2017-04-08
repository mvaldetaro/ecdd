<?php
  /**
   *
   * Scripts and Styles
   * @since  1.0.0
   *
   */

  // If this file is called directly, abort.
  if ( ! defined( 'WPINC' ) ) { die; }

  /**
   *
   * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head
   *
   * @since  1.0.0
   *
   */

  add_action('wp_enqueue_scripts', 'ecdd_scripts');
  function ecdd_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
      //wp_enqueue_script('jquery');

      /**
       *
       * Minified and concatenated scripts
       *
       *     @vendors     plugins.min,js
       *     @custom      scripts.min.js
       *
       *     Order is important
       *
       */

      wp_register_script('ecdd_bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true); // Custom scripts
      wp_enqueue_script('ecdd_bootstrapjs'); // Enqueue it!

      wp_register_script('ecdd_vendorsJs', get_template_directory_uri() . '/assets/js/vendors.min.js', array(), '1.0', true); // Custom scripts
      wp_enqueue_script('ecdd_vendorsJs'); // Enqueue it!

      wp_register_script('ecdd_customJs', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '1.0', true); // Custom scripts
      wp_enqueue_script('ecdd_customJs'); // Enqueue it!

      /**
       *
       * Enqueue Mordenizr
       *
       */

      wp_register_script('ecdd_mordenizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js');
      wp_enqueue_script('ecdd_mordenizr'); // Enqueue it!
    }
  }

  /**
    *
    * Styles: Frontend with no conditions, Add Custom styles to wp_head
    *
    * @since  1.0
    *
    */

    add_action('wp_enqueue_scripts', 'ecdd_styles'); // Add Theme Stylesheet
    function ecdd_styles() {
    /**
     *
     * Minified and Concatenated styles
     *     @vendors     vendor.min,js
     *     @style      style.min.js
     *
     */

    wp_register_style('ecdd_vendor_style', get_template_directory_uri() . '/vendor.min.css', array(), '1.0', 'all');
    wp_enqueue_style('ecdd_vendor_style'); // Enqueue it!

    wp_register_style('ecdd_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
    wp_enqueue_style('ecdd_style'); // Enqueue it!
    }

?>
